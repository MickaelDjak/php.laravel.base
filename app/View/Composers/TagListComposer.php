<?php

namespace App\View\Composers;

use App\Models\DailyPrayerNeed;
use Cviebrock\EloquentTaggable\Services\TagService;
use Illuminate\View\View;

/**
 * Class DailyPrayerNeedComposer
 * @package App\View\Composers
 */
class TagListComposer
{
    /**
     * @var TagService
     */
    private $tagService;

    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $tags = $this->tagService->getAllTags();;

        $view->with('tagList', $tags);
    }
}
