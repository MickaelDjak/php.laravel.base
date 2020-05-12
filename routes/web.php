<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/posts', 'pages.posts')->name('posts');
Route::view('/posts/page', 'pages.page')->name('post_page');
Route::view('/preachings', 'pages.preachings')->name('preachings');
Route::view('/preachings/page', 'pages.page')->name('preaching_page');
Route::view('/events', 'pages.events')->name('events');
Route::view('/events/page', 'pages.page')->name('event_page');
Route::view('/about', 'pages.about')->name('about');
Route::view('/subscribe', 'pages.subscribe')->name('subscribe');
Route::view('/gallery', 'pages.gallery')->name('gallery_list');
Route::view('/contact', 'pages.contacts')->name('contacts');
Route::view('/ministry', 'pages.ministry')->name('ministry');

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
