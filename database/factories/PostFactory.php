<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words(7, true),
        'preview_text' => $faker->text(350),
        'detail_text' => $faker->paragraph(10, true),
        'image' => 'img/posts/fall-autumn-red-season.jpg',
        'author_id' => null,
        'status' => 1,
        'slug' => 'slag',
    ];
});
