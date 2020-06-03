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
        factory(\App\Models\Post::class, 100)->make()->each(function (\App\Models\Post $post) use ($user) {
            $post->author_id = $user->id;
            $post->save();
            $post->tag(getTags());
        });
    }
}
