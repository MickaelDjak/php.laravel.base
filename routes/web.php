<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/posts', 'posts')->name('posts');
Route::view('/posts/page', 'posts/page')->name('post_page');
Route::view('/podcasts', 'podcasts')->name('podcasts');
Route::view('/podcasts/page', 'posts/page')->name('podcast_page');
Route::view('/news', 'news')->name('news');
Route::view('/news/page', 'posts/page')->name('news_page');
Route::view('/events', 'events')->name('events');
Route::view('/events/page', 'posts/page')->name('event_page');
Route::view('/about', 'about')->name('about');

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
