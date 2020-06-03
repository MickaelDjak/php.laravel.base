<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
        factory(\App\Models\Post::class, 30)->make()->each(function (\App\Models\Post $post, $key) use ($user, $collection) {
            $post->author_id = $user->id;
            $post->save();
            $post->tag($collection->shuffle()->splice($collection->count() - 1));
        });
    }
}
