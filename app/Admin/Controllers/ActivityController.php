<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Activity;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Admin;
use Dcat\Admin\Http\Controllers\AdminController;

class ActivityController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected $title = "最新消息";

    protected function grid()
    {
        return Grid::make(new Activity(), function (Grid $grid) {
            // $grid->column('id')->sortable();
            $grid->number();        
            $grid->column('title');
            $grid->column('status')->using([0 => '結束', 1 => '進行', 2 => '準備'])->label([
                'default' => 'primary',
            
                0 => 'primary',
                1 => 'danger',
                2 => 'success',
                // 4 => Admin::color()->info(),
            ]);
            // $grid->column('image')->image();
            // $grid->column('body');
            $grid->column('order')->sortable();
            $grid->column('on_sale')->switch();
            $grid->column('start_date');
            $grid->column('end_date');

            // $grid->column('created_at');
            // $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                // 更改为 panel 布局
                $filter->panel();
                // $filter->expand();
                $filter->between('start_date')->date();
                $filter->between('end_date')->date();
            });
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
        return Show::make($id, new Activity(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('image')->image(600,600);
            $show->field('body');
            $show->field('order');
            $show->field('on_sale')->bool();
            $show->field('status')->using([0 => '結束', 1 => '進行', 2 => '準備']);
            $show->field('start_date');
            $show->field('end_date');
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
        return Form::make(new Activity(), function (Form $form) {
            $form->column(12, function (Form $form) {
                // $form->display('id');
                $form->text('title')->required();
                $form->image('image')->required();
                $form->number('order')->required();
                $form->switch('on_sale')->required();
    
                $status = [
                    0 => '結束',
                    1 => '進行',
                    2 => '準備',
                ];
                $form->select('status')->options($status)->required();
                $form->datetimeRange('start_date', 'end_date', '活動時間')->required();
            });
            
            $form->column(12, function (Form $form) {
                $form->markdown('body')->height('720')->required();
            });
            $form->display('created_at','建立時間');
            $form->display('updated_at','更新時間');
        });
    }
}
