<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subject;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('subject')->onsale()->orderBy('order','asc')->latest()->paginate(6);
        $dates = post::onsale()->latest()->take(5)->get();
        $subjects = Subject::all();
        return view('posts.index', compact('posts','dates','subjects'));
    }

    // 最新消息 單篇文章
    public function Show($language,$slug)
    {
        $posts = Post::where('slug', $slug)->firstOrFail();

        $dates  = post::onsale()->latest()->take(5)->get();
        $subjects = Subject::all();

        $previous = Post::where('id', '<', $posts->id)->onsale()->orderBy('id','desc')->first();
        $next = Post::where('id', '>', $posts->id)->onsale()->orderBy('id','asc')->first();
        return view('posts.show', compact('posts','dates','subjects','previous','next'));
    }

    public function Subject()
    {
        $dates  = post::latest()->onsale()->take(5)->get();
        $subjectslist = Subject::all();

        return view('posts.subject',compact('dates','subjectslist'));
    }

    public function SubjectShow($language,Subject $subject)
    {
        $posts = $subject->posts()->onsale()->paginate(3);
        $dates  = post::onsale()->latest()->take(5)->get();
        $subjects = Subject::all();
          
        return view('posts.subjectshow',compact('dates','posts','subjects'));
    }

}
