<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\Subject;

Route::redirect('/', '/zh_tw');



// 切換語言
Route::group([
    'prefix' => '{language}',
    'where' => ['language' => 'en|zh_tw']
], function () {

    // 首頁
    Route::get('/', [PagesController::class, 'index'])->name('home');

    // 超跑職人
    Route::get('/posts', [PostsController::class, 'index'])->name('posts');
    Route::get('/posts/{post:slug}', [PostsController::class, 'show'])->name('posts.show');
    // Route::get('/posts/search', [PostsController::class, 'search'])->name('posts.search');

    // 超跑職人 - 主題分類
    Route::get('/subjects', [PostsController::class, 'subject'])->name('subject');
    Route::get('/subjects/{subject:slug}',[PostsController::class, 'SubjectShow'])->name('subject.show');

    // 超跑車款
    Route::get('/cars', [PagesController::class, 'car'])->name('car');

    // 性能車款
    Route::get('/powers', [PagesController::class, 'power'])->name('power');

    // 最新消息
    Route::get('/activity', [PagesController::class, 'activity'])->name('activity.indexActivity');
    Route::get('/activity/{id}', [PagesController::class, 'ShowActivity'])->name('activity.ShowActivity');
    Route::get('/search', [PagesController::class, 'search'])->name('search');

    // 租車流程
    Route::get('/sop', [PagesController::class, 'sop'])->name('sop');

    // 租車須知
    Route::get('/notice', [PagesController::class, 'notice'])->name('notice');

    // 聯絡我們
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


});


