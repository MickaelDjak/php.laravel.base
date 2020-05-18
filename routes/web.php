<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'pages.home')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('posts');
Route::view('/posts/page', 'posts.page')->name('post_page');

Route::get('/preachings', 'PreachingController@index')->name('preachings');
Route::view('/preachings/page', 'preachings.page')->name('preaching_page');

Route::get('/events', 'EventController@index')->name('events');
Route::view('/events/page', 'events.page')->name('event_page');

Route::view('/about', 'pages.about')->name('about');
Route::view('/subscribe', 'pages.subscribe')->name('subscribe');
Route::view('/gallery', 'pages.gallery')->name('gallery_list');
Route::view('/contact', 'pages.contacts')->name('contacts');
Route::view('/ministry', 'pages.ministry')->name('ministry');
Route::view('/credo', 'pages.credo')->name('credo');
Route::view('/calendar', 'pages.calendar')->name('calendar');


//
//Route::get('/post/{id}/{name?}', function ($id, $name ='undefined') {
//
//    return response()->json([
//        $id,
//        $name
//    ]);
//    $data =  [
//        null => [
//            'title' => 'hello undefined'/img/banners/preachings-1.png
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

Route::get('/home', 'HomeController@home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
