<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Banner;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BannerController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected $title = "首頁圖片";

    protected function grid()
    {
        return Grid::make(new Banner(), function (Grid $grid) {
            $grid->number();
            // $grid->column('id')->sortable();
            // $grid->column('image')->image(400,400);
            $grid->column('title');
            // $grid->column('description');
            $grid->column('link')->link();
            $grid->column('order');
            $grid->column('on_sale')->switch();
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
        return Show::make($id, new Banner(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('link');
            $show->field('order');
            $show->field('image')->image(600,600);
            $show->field('on_sale')->bool();
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Banner(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->textarea('description')->required();
            $form->url('link')->required();
            $form->number('order')->required();
            $form->image('image')->required();
            $form->switch('on_sale')->required();
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
