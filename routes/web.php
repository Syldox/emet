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

use App\Post;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}', ['as'=>'home.post','uses'=>'AdminPostsController@post']);

Route::get('blog/{slug}', ['as'=> 'blog.single','uses' =>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog',['uses'=>'BlogController@getIndex', 'as'=>'blog.index']);


Route::get('/about', 'pagesController@about');

Route::get('/contact', 'pagesController@getContact');
Route::post('/contact', 'pagesController@postContact');





Route::get('/search', ['as'=>'search','uses'=> 'SearchController@search']);



Route::group(['middleware'=>'admin'], function(){

    Route::get('admin',function(){

        return view('admin.index');
    });
    Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


    Route::resource('/admin/users' , 'AdminUsersController');
    Route::resource('/admin/posts' , 'AdminPostsController');
    Route::resource('/admin/categories' , 'AdminCategoriesController');
    Route::resource('/admin/media' , 'AdminMediasController');

    Route::resource('admin/comments' , 'PostCommentsController');
    Route::resource('admin/comments/replies' , 'CommentRepliesController');

    Route::delete('admin/delete/media',['as'=>'delete.media','uses'=> 'AdminMediasController@deleteMedia']);



});

Route::group(['middleware'=>'auth'], function(){

Route::post('comment/reply', 'CommentRepliesController@createReply');


});