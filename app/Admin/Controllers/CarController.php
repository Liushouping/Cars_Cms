<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Car;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

use Dcat\Admin\Layout\Content;
use App\Admin\Metrics\Examples\NewDevices;
use App\Admin\Metrics\Examples\NewUsers;
use App\Admin\Metrics\Examples\TotalUsers;
use Dcat\Admin\Layout\Row;

class CarController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected $title = "超跑車款";

    protected function grid()
    {
        return Grid::make(new Car(), function (Grid $grid) {
            $grid->number();
            // $grid->column('id')->sortable();
            $grid->column('title');
            // $grid->column('description');
            // $grid->column('image');
            $grid->column('model');
            $grid->column('engine');
            $grid->column('​exhaust');
            $grid->column('max_horsepower');
            $grid->column('​max_torque');
            $grid->column('price');
            $grid->column('order');
            $grid->column('on_sale')->switch();
            // $grid->column('phone');
            // $grid->column('link');
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
        return Show::make($id, new Car(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('image')->image();
            $show->field('model');
            $show->field('engine');
            $show->field('​exhaust');
            $show->field('max_horsepower');
            $show->field('​max_torque');
            $show->field('price');
            $show->field('order');
            $show->field('on_sale')->bool();
            // $show->field('phone');
            // $show->field('link');
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
        return Form::make(new Car(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->textarea('description');
            $form->image('image')->required();
            $form->text('model');
            $form->text('engine');
            $form->text('​exhaust');
            $form->text('max_horsepower');
            $form->text('​max_torque');
            $form->currency('price')->symbol('Nt');
            $form->number('order')->required();
            $form->switch('on_sale')->required();
            // $form->mobile('phone');
            // $form->url('link');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
