<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blogIndex');

Route::get('/post/{id}', function($id) {
    return view('blog.post');
})->name('blogPost');

Route::group([
    'prefix'=>'admin'
], function(){

    Route::get('/', function () {
        return view('admin.index');
    })->name('adminIndex');

    Route::get('/create', function () {
        return view('admin.create');
    })->name('adminCreate');

    Route::get('/edit/{id}', function () {
        return view('admin.edit');
    })->name('adminEdit');
});

Route::get('/about', function () {
    return view('other.about');
})->name('otherAbout');



