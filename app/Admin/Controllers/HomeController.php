<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('控制台')
            ->description('控制台')
            ->body(admin_view('pages.admin'));
            // ->view('pages.admin.me');
            // ->body(function (Row $row) {
            //     $row->column(12, function (Column $column) {
            //         $column->row(new Examples\Adver());
            //         // $column->row(new Examples\Tickets());
            //     });

            //     // $row->column(6, function (Column $column) {
            //     //     $column->row(function (Row $row) {
            //     //         $row->column(6, new Examples\NewUsers());
            //     //         $row->column(6, new Examples\NewDevices());
            //     //     });

            //     //     $column->row(new Examples\Sessions());
            //     //     $column->row(new Examples\ProductOrders());
            //     // });
            // });
            // ->body(function (Row $row) {
            //     $row->column(12, function (Column $column) {
            //         $column->row(function (Row $row) {
            //             $row->column(12, new Examples\Adver());
            //         });
            //     });
            // });
    }
}
