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

Route::get('/', [  'uses' => 'HomeController@getLogin', 'as' =>'login']
);

Auth::routes();

Route::get('/home', [
  'uses' => 'HomeController@getDashboard', 'as' =>'dashboard'
]);
Route::get('/admin', 'AdminController@index');
Route::get('/logout',[
  'uses' => 'HomeController@getLogout', 'as' =>'logout'
]);
Route::get('/dashboard',[
  'uses' => 'HomeController@getDashboard', 'as' =>'dashboard'

]);
Route::post('/insert', [
  'uses' => 'HomeController@postInsert', 'as'=>'insert'
]);
Route::post('/delete-doc}',[
  'uses'=>'HomeController@postDeleteDoc', 'as' =>'doc.delete'
]);
Route::post('/edit', [
  'uses' => 'HomeController@postEditDoc', 'as'=>'edit'
]);
