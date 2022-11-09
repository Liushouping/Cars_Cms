<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Sop;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SopController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected $title = "租車流程";

    protected function grid()
    {
        return Grid::make(new Sop(), function (Grid $grid) {
            $grid->number();
            // $grid->column('id')->sortable();
            $grid->column('title');
            // $grid->column('body');
            // $grid->column('created_at');
            // $grid->column('updated_at')->sortable();
            $grid->disableCreateButton();
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
        return Show::make($id, new Sop(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('body');
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
        return Form::make(new Sop(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->divider();
            $form->editor('body')->height('720')->required();
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
