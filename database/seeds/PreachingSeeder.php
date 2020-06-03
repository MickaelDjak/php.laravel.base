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
        $user = \App\User::all()->first();
        factory(\App\Models\Preaching::class, 100)->make()->each(function (\App\Models\Preaching $preaching) use ($user) {
            $preaching->author_id = $user->id;
            $preaching->save();
            $preaching->tag(getTags());
        });
    }
}
