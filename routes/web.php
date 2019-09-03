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
    return view('welcome');
});

Route::resource('letters', 'LetterController');

// Route::get('/test/home', 'TestsController@home')-> name('test.home');
// Route::get('/test/home1', 'TestsController@home1') -> name('test.home1');

// Route::get('/test', function () {
//     return view('test');
// }) -> name("test.index");

// Route::get('/test/{id}', function () {
//     return view('test');
// }) -> name("test.show");

// Route::resource('tasks', 'MySampleResourceController');

Route::resource('posts', 'PostController');