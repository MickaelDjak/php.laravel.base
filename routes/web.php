<?php

use App\Services\Locale\Locale;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => Locale::get()
], static function () {

    Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

    Route::get('/resource/{type}', [\App\Http\Controllers\ArticleController::class, 'index'])->name('resource_list');
    Route::get('/resource/{type}/{slug}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('resource_page');

    Route::get('/bible/{translation}/{book}/{chapter?}', [\App\Http\Controllers\BibleController::class, 'chapter'])->name('bible_page');
    Route::get('/bible/{translation?}', [\App\Http\Controllers\BibleController::class, 'index'])->name('bible');

    Route::get('/tag/{teg_id}', [\App\Http\Controllers\TagController::class, 'show'])->name('tag_page');

    Route::get('/calendar', [\App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');

    Route::view('/about', 'pages.about')->name('about');
    Route::view('/subscribe', 'pages.subscribe')->name('subscribe');
    Route::view('/gallery', 'pages.gallery')->name('gallery_list');
    Route::view('/contact', 'pages.contacts')->name('contacts');
    Route::view('/ministry', 'pages.ministry')->name('ministry');
    Route::view('/credo', 'pages.credo')->name('credo');
    Route::view('/prayer_list', 'pages.prayer_list')->name('prayer_list');

    Auth::routes(['verify' => true]);

    Route::livewire('/search', 'search')->layout('layouts.catalog')->section('content')->name('search');
});

Route::get('setlocale/{lang}', [\App\Http\Controllers\LocaleController::class, 'index'])->name('setlocale');

Route::get('/', function () {
    return redirect('/' . App\Services\Locale\Locale::$mainLanguage);
});

