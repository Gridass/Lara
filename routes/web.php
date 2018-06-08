<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
});


Route::get('/', function () {
    return view('topmenu');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');
*/

Route::get('/', "PostsController@index");

Route::get('/posts/create', "PostsController@create");

Route::get('/posts/{post}', "PostsController@show");

Route::post('/post', "PostsController@store");

Route::get('/posts/{post}/edit', "PostsController@edit");

Route::patch('/posts/{post}', "PostsController@update");

Route::delete('/posts/{post}', "PostsController@destroy");

/*
 * GET /posts
 * GET /posts/created
 * POST /posts
 * GET /posts/{id}/edit
 * PATCH /posts/{id}
 * GET /posts/{id}
 * DELETE /posts/{ID}
 *
 */



