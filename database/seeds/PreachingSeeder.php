<?php

use Illuminate\Database\Seeder;

class PreachingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = collect([
            'Иисус Навин',
            'Судьи',
            'Руфь',
            'Деяния',
            '1 Иоанна',
            'Иуда',
            '1 Коринфянам',
            '2 Фессалоникийцам',
            'Спасение',
            'Грех',
            'Прощение',
            'Ипытание',
            'Неудачи',
            'Соры',
            'Люовь',
        ]);
        $user = \App\User::all()->first();
        factory(\App\Models\Preaching::class, 30)->make()->each(function (\App\Models\Preaching $preaching, $key) use ($user, $collection) {
            $preaching->author_id = $user->id;
            $preaching->save();
            $preaching->tag($collection->shuffle()->splice($collection->count() - 1));
        });
    }
}
