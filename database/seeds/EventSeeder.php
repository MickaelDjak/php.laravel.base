<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
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
        factory(\App\Models\Event::class, 30)->make()->each(function (\App\Models\Event $event, $key) use ($user,$collection) {
            $event->author_id = $user->id;
            $event->save();
            $event->tag($collection->shuffle()->splice($collection->count() - 1));
        });
    }
}
