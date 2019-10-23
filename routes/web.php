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
Route::get('/show/{id}/post',[
    'uses'=>'PostsController@show',
    'as'=>'post.show'
]);
Route::get('/edit/{id}/post',[
    'uses'=>'PostsController@edit',
    'as'=>'post.edit'
]);
Route::post('/store/post',[
    'uses'=>'PostsController@store',
    'as'=>'post.store'
]);
Route::post('/update/{id}/post',[
    'uses'=>'PostsController@update',
    'as'=>'post.update'
]);
Route::post('/delete/{id}/post',[
    'uses'=>'PostsController@destroy',
    'as'=>'post.delete'
]);
Route::resource('/','PostsController');