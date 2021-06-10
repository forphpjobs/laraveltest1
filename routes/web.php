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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::post('news/ajax/comment', 'NewsController@ajaxcomments');
Route::get('news/ajax/{id}', 'NewsController@ajaxnews')->where('id','[0-9]+');
Route::get('news/{id}', 'NewsController@view')->name('viewNews')->where('id','[0-9]+');
Route::get('news', 'NewsController@index')->name('news');
Route::get('app/{id}', 'AppController@view')->name('viewApp')->where('id','[0-9]+');
Route::get('app', 'AppController@index')->name('app');
Route::get('contact','ContactController@index')->name('contact');
Route::get('profile', 'ProfileController@index')->name('profile')->middleware('auth');
Route::post('send', 'SendController@register');
Route::get('admin', 'Admin\AdminController@index');

Route::group(['namespace'=>'Admin','middleware'=>'is_admin', 'prefix'=>'admin/'],function(){
    Route::get('','AdminController@index')->name('admin');
    Route::resource('news', 'NewsadminController');
    Route::resource('app', 'AppadminController');
    Route::resource('addadmin','AddadminController');
    Route::post('comment/delete', 'CommentadminController@index')->name('delete_comment');

});




Auth::routes();
Route::get('logout', function(){
    Auth::logout();
    return redirect('news');
});

