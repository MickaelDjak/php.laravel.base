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
        $user = \App\User::all()->first();
        factory(\App\Models\Post::class, 10)->make()->each(function (\App\Models\Post $post, $key) use ($user) {
            $post->author_id = $user->id;
            $post->slug .= $key;
            $post->save();
        });
    }
}
