<?php

/** @var Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(7),
        'overview' => $faker->text(200),
        'text' => $faker->paragraphs(10, true),

        'author_id' => null,
        'status' => 1,
    ];
});

$factory->state(Article::class, 'post', [
    'type' => 'post',
    'image' => 'img/posts/fall-autumn-red-season.jpg',
]);

$factory->state(Article::class, 'event', [
    'type' => 'event',
    'image' => 'img/events/image-2.jpg',
]);

$factory->state(Article::class, 'preaching', [
    'type' => 'preaching',
    'image' => 'img/banners/podcast-1.png',
    'audio' => 'audio/song.mp3',
]);
