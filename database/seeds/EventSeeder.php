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
        $user = \App\User::all()->first();
        factory(\App\Models\Event::class, 10)->make()->each(function (\App\Models\Event $event, $key) use ($user) {
            $event->author_id = $user->id;
            $event->slug .= $key;

            $event->save();
        });
    }
}
