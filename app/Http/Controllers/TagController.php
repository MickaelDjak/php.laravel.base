<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use App\Models\Preaching;
use Cviebrock\EloquentTaggable\Models\Tag;
use Cviebrock\EloquentTaggable\Services\TagService;

/**
 * Class TagController
 * @package App\Http\Controllers
 */
class TagController extends Controller
{

    /**
     * @var TagService
     */
    private $tagService;

    /**
     * TagController constructor.
     * @param TagService $tagService
     */
    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    /**
     * @param $tagId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($tagId)
    {

        $tag = Tag::find($tagId);


        $posts = Post::withAllTags($tag->name)
//            ->orderBy('created_at')
            ->get();
        $events = Event::withAllTags($tag->name)
//            ->orderBy('created_at')
            ->get();
        $preachings = Preaching::withAllTags($tag->name)
//            ->orderBy('created_at')
            ->get();

        $list = collect($posts)->merge($events)->merge($preachings)->sortBy('created_at');

        return view('tags.page', ['list' => $list, 'tagName' => $tag]);
    }
}
