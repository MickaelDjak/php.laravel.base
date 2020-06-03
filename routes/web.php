<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'pages.home')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/{slug}', 'PostController@show')->name('post_page');

Route::get('/preachings', 'PreachingController@index')->name('preachings');
Route::get('/preaching/{slug}', 'PreachingController@show')->name('preaching_page');

Route::get('/events', 'EventController@index')->name('events');
Route::get('/event/{slug}', 'EventController@show')->name('event_page');

Route::get('/bible/{translation}/{book}/{chapter?}', 'BibleController@chapter')->name('bible_page');
Route::get('/bible/{translation?}', 'BibleController@index')->name('bible');

Route::get('/tag/{teg_id}', 'TagController@show')->name('tag_page');

Route::get('/calendar', 'CalendarController@index')->name('calendar');

Route::view('/about', 'pages.about')->name('about');
Route::view('/subscribe', 'pages.subscribe')->name('subscribe');
Route::view('/gallery', 'pages.gallery')->name('gallery_list');
Route::view('/contact', 'pages.contacts')->name('contacts');
Route::view('/ministry', 'pages.ministry')->name('ministry');
Route::view('/credo', 'pages.credo')->name('credo');
Route::view('/prayer_list', 'pages.prayer_list')->name('prayer_list');


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
