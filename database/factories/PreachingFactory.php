<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Preaching;
use Faker\Generator as Faker;

$factory->define(Preaching::class, function (Faker $faker) {
    return [
        'title' => $faker->words(7, true),
        'preview_text' => $faker->text(200),
        'detail_text' => $faker->text(1500),
        'image' => 'img/banners/podcast-1.png',
        'audio_url' => 'audio/song.mp3',
        'author_id' => null,
        'status' => 1,
    ];
});
