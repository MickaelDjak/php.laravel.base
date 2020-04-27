<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contact', 'contact');

Route::get('/post/{id?}', function ($id = null) {
    $data =  [
        null => [
            'title' => 'hello undefined'
        ],
        1 => [
            'title' => 'hello 1'
        ],
        2 => [
            'title' => 'hello 22'
        ],
    ];

    return view('blog', [
        'data' => $data[$id]
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
