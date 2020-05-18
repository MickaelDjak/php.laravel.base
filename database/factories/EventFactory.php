<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->words(7, true),
        'preview_text' => $faker->text(200),
        'detail_text' => $faker->paragraphs(3, true),
        'image' => 'img/events/image-2.jpg',
        'author_id' => null,
        'status' => 1,
        'slug' => 'slag',
    ];
});
