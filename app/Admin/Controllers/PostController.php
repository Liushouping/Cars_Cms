<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Post;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Subject;

class PostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected $title = "文章";

    protected function grid()
    {
        return Grid::make(Post::with(['Subject']), function (Grid $grid) {  
            $grid->number();
            // $grid->column('id')->sortable();
            $grid->column('subject.name','主題');
            $grid->column('title','標題');
            // $grid->column('slug','網址');
            $grid->column('order','排序');
            $grid->column('on_sale','開啟')->switch();
            // $grid->column('content');
            // $grid->column('created_at');
            // $grid->column('updated_at')->sortable();

            // $grid->filter(function (Grid\Filter $filter) {
            //     $filter->equal('id');
            
            // });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Post(), function (Show $show) {
            $show->field('id');
            $show->field('subject_name','主題');
            $show->field('title','標題');
            $show->field('image')->image(600,600);
            $show->field('content','內容');
            $show->field('excerpt','摘要');
            $show->field('slug','網址');
            $show->field('order','排序')->bool();
            $show->field('on_sale','開啟');
            $show->field('created_at','建立時間');
            $show->field('updated_at','更新時間');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Post(), function (Form $form) {
            $form->display('id');
            $form->select('subject_id','主題')->options(Subject::orderBy('id', 'desc')->pluck('name', 'id'))->required();
            $form->text('title','標題')->required();
            $form->textarea('excerpt','摘要')->help('顯示100個字元。')->required();
            $form->image('image')->required();
            $form->text('slug','網址')->required();
            $form->number('order','排序')->required();
            $form->switch('on_sale','開啟')->required();
            $form->divider();
            $form->markdown('content','內容')->height(720)->required();
            $form->display('created_at','建立時間');
            $form->display('updated_at','更新時間');
        });
    }
}
