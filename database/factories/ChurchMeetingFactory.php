<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ChurchMeeting;
use Faker\Generator as Faker;

$factory->define(ChurchMeeting::class, function (Faker $faker) {
    return [
        'meeting_time' => $faker->dateTimeBetween('-1 month')->format('Y-m-d H:i:s'),
        'duration' => Arr::random(['2 часа', '1.5 часа', '1 часа']),
        'description' => Arr::random(['Утренее собрание', 'Вечернее собрание', 'Спевка', 'Молитвенное собрание']),

    ];
});
