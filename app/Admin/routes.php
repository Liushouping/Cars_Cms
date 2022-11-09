<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('banner', 'BannerController');
    $router->resource('activity', 'ActivityController');
    $router->resource('car', 'CarController');
    $router->resource('power', 'PowerController');
    $router->resource('sop', 'SopController');
    $router->resource('notice', 'NoticeController');

    $router->resource('post', 'PostController');
    $router->resource('subject', 'SubjectController');

    Route::get('/settings', 'SettingsController@index')->name('settings.index');
});


