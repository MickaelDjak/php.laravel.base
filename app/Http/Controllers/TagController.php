<?php

namespace App\Http\Controllers;

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
        return view('posts.page');
    }
}
