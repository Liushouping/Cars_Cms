<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Car;
use App\Models\Power;
use App\Models\Sop;
use App\Models\Notice;
use App\Models\Banner;
use App\Models\Post;

class PagesController extends Controller
{
    // 首頁
    public function index()
    {
        $banners = Banner::query()->where('on_sale', true)->orderBy('order','asc')->get();
        $activitys = Activity::query()->where('on_sale', true)->orderBy('order','asc')->paginate(4);
        $cars = Car::query()->where('on_sale', true)->orderBy('order','asc')->paginate(4);
        $posts = Post::with('subject')->onsale()->orderBy('order','asc')->latest()->paginate(2);
        return view('pages.index',compact('banners','activitys','cars','posts'));
    }

    // 最新消息
    public function Activity(Request $request)
    {
        $activitys = Activity::query()->where('on_sale', true)->orderBy('order','asc')->paginate(8);
        return view('activities.index', compact('activitys'));
    }

    // 最新消息 單篇文章
    public function ShowActivity($language,$id)
    {
        $activitys = Activity::find($id);
        $dates  = Activity::latest()->take(5)->get();
        $previous = Activity::where('id', '<', $activitys->id)->max('id');
        $next = Activity::where('id', '>', $activitys->id)->min('id');
        return view('activities.show', compact('activitys','dates','previous','next'));
    }

    // 最新消息 搜尋
    public function search(Request $request)
    {
        $search_text = $request->input('query');
        $countries = Activity::where('title','LIKE','%'.$search_text.'%')
            ->where('on_sale', true)
            ->orderBy('order','asc')
            ->paginate(6);

        return view('activities.search',['countries'=>$countries]);
    }

    // 租車流程
    public function sop()
    {
        $sops = Sop::select(['title','body','updated_at'])->get();
        return view('pages.sop',compact('sops'));
    }
    // 租車須知
    public function notice()
    {
        $notices = Notice::select(['title','body','updated_at'])->get();
        return view('pages.notice',compact('notices'));
    }

    // 聯絡我們
    public function contact()
    {
        return view('pages.contact');
    }

    // 超跑車款
    public function car(Request $request)
    {
        $builder = Car::query()->where('on_sale', true);

        if ($search = $request->input('search', '')) {
            $like = '%'.$search.'%';
            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like);
            });
        }

        if ($order = $request->input('order', '')) {
            if (preg_match('/^(.+)_(asc|desc)$/', $order, $m)) {
                if (in_array($m[1], ['price'])) {
                    $builder->orderBy($m[1], $m[2]);
                }
            }
        }

        $cars = $builder->paginate(8);

        return view('cars.index', [
            'cars' => $cars,
            'filters'  => [
                'search' => $search,
                'order'  => $order,
            ],
         ]);
    }

    // 性能車款
    public function power(Request $request)
    {
        $builder = Power::query()->where('on_sale', true);

        if ($search = $request->input('search', '')) {
            $like = '%'.$search.'%';
            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like);
            });
        }

        if ($order = $request->input('order', '')) {
            if (preg_match('/^(.+)_(asc|desc)$/', $order, $m)) {
                if (in_array($m[1], ['price'])) {
                    $builder->orderBy($m[1], $m[2]);
                }
            }
        }

        $powers = $builder->paginate(8);

        return view('powers.index', [
            'powers' => $powers,
            'filters'  => [
                'search' => $search,
                'order'  => $order,
            ],
         ]);
    }
}
