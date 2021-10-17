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


Route::get('/','homeController@index');

Route::get('single-post/{id}', [
    "uses" => 'singlePostController@index',
    "as" => 'single-post'
]);


Route::get('single-post/share/{id}', 'singlePostController@share')->name('single-post.share');

Route::get('single-post/shared', 'singlePostController@shared')->name('single-post.shared');

Route::get('/news','newsController@index');

Route::get('/economics','economicsController@index');

Route::get('/opinions','opinionsController@index');

Route::get('/sports','sportsController@index');

Route::get('/collections','collectionsController@index');

Route::get('/twitbook','twitbookController@index');

Route::get('contact','contactController@index');

Route::post('contact/insert','contactController@insertform')->name('contact');

Route::post('/addComment/{id}','singlePostController@addComment')->name('addComment');

// Route::get('/replies/{id}','singlePostController@replies')->name('replies');

// Route::post('/addReply/{id}','singlePostController@addReply')->name('addReply');

// Route::post('/addٌReply/{id}','singlePostController@addٌReply')->name('addٌReply');

Route::post('search-result', 'homeController@search')->name('search');
