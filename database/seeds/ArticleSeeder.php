<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::all()->first();

        $saver = function (\App\Models\Article $article) use ($user) {
            $article->author_id = $user->id;
            $article->save();
            $article->tag(getTags());
        };

        factory(\App\Models\Article::class, 100)->state('event')->make()->each($saver);
        factory(\App\Models\Article::class, 100)->state('post')->make()->each($saver);
        factory(\App\Models\Article::class, 100)->state('preaching')->make()->each($saver);
    }
}
