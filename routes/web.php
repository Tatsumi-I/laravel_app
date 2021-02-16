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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
//laravel TOP画面
Route::get('/', function () {
    return view('welcome');
});

//テストページ
Route::get('/test/', function () {
    return view('test');
});
Route::get('/home/app/', function () {
    return view('layouts.app');
});


//記事一覧
Route::get('/list', 'BlogController@showList')->name('blogs');
//登録画面
Route::get('/blog/create', 'BlogController@showCreate')->name('create');
//登録処理
Route::post('/blog/store', 'BlogController@exeStore')->name('store');
//詳細表示
Route::get('/blog/{id}', 'BlogController@showDetail')->where('id', '[0-9]+')->name('show');
//編集画面
Route::get('/blog/edit/{id}', 'BlogController@showEdit')->where('id', '[0-9]+')->name('edit');
//上書き処理
Route::post('/blog/update', 'BlogController@exeUpdate')->name('update');
//削除
Route::post('/blog/delete/{id}', 'BlogController@exeDelete')->where('id', '[0-9]+')->name('delete');


Route::get('/tag/list', 'TagController@index')->name('tag_list');
//登録画面
Route::get('/tag/create', 'TagController@showCreate')->name('tag_create');
//登録処理
Route::post('/tag/store', 'TagController@exeStore')->name('tag_store');
//詳細表示
Route::get('/tag/{tag}', 'TagController@showDetail')->name('tag_show');
//編集画面
Route::get('/tag/edit/{tag}', 'TagController@showEdit')->name('tag_edit');
//上書き処理
Route::post('/tag/update', 'TagController@exeUpdate')->name('tag_update');
//削除
Route::post('/tag/delete/{id}', 'TagController@exeDelete')->name('tag_delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



