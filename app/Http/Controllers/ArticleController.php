<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * @param string $type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(string $type)
    {
        $articles = Article::with('tags')
            ->where('type', $type)
            ->paginate(5)
            ->onEachSide(2);

        $map = [
            'event' => [
                'img' => ' /img/undraw/undraw_events_2p66.svg',
                'name' => 'Події',
                'description' => 'Стрічка подій, які відбувалися в ІБЦ та матеріалів у даній категорії.'
            ],
            'post' => [
                'img' => '/img/undraw/undraw_blog_anyj.svg',
                'name' => 'Блог',
                'description' => 'Стрічка статей, конспекты проповедей.'
            ],
            'preaching' => [
                'img' => '/img/undraw/undraw_podcast_q6p7.svg',
                'name' => 'Проповеди',
                'description' => 'Стрічка проповедей в текстовом, аудио и видео формате.'
            ]
        ];

        return view('articles.index', [
            'articles' => $articles,
            'meta' => $map[$type]
        ]);
    }

    /**
     * @param string $type
     * @param string $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $type, string $slug)
    {
        $article = Article::with('tags')
            ->where('type', $type)
            ->where('slug', $slug)
            ->firstOrFail();

        return view('articles.page', ['article' => $article]);
    }
}
