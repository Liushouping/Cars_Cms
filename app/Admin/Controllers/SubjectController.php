<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Subject;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SubjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected $title = "主題";

    protected function grid()
    {
        return Grid::make(new Subject(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name','名稱');
            // $grid->column('created_at','建立時間');
            // $grid->column('updated_at','更新時間')->sortable();
        
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
        return Show::make($id, new Subject(), function (Show $show) {
            $show->field('id');
            $show->field('name','名稱');
            $show->field('slug','網址');
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
        return Form::make(new Subject(), function (Form $form) {
            $form->display('id');
            $form->text('name','名稱')->required();
            $form->text('slug','網址')->required();
            $form->display('created_at','建立時間');
            $form->display('updated_at','更新時間');
        });
    }
}
