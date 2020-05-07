<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/posts', 'pages.posts')->name('posts');
Route::view('/posts/page', 'pages.page')->name('post_page');
Route::view('/podcasts', 'pages.podcasts')->name('podcasts');
Route::view('/podcasts/page', 'pages.page')->name('podcast_page');
Route::view('/events', 'pages.events')->name('events');
Route::view('/events/page', 'pages.page')->name('event_page');
Route::view('/about', 'pages.about')->name('about');

//
//Route::get('/post/{id}/{name?}', function ($id, $name ='undefined') {
//
//    return response()->json([
//        $id,
//        $name
//    ]);
//    $data =  [
//        null => [
//            'title' => 'hello undefined'
//        ],
//        1 => [
//            'title' => 'hello 1'
//        ],
//        2 => [
//            'title' => 'hello 22'
//        ],
//    ];
//
//    return view('blog', [
//        'data' => $data[$id]
//    ]);
//});
//

//Route::resource('/news', 'News');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
