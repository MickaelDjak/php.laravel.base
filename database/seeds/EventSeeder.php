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
        factory(\App\Models\Event::class, 100)->make()->each(function (\App\Models\Event $event) use ($user) {
            $event->author_id = $user->id;
            $event->save();
            $event->tag(getTags());
        });
    }
}
