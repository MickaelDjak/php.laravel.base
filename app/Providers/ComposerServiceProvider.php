<?php

namespace App\Providers;

use App\Models\BibleGoldenVerse;
use App\View\Composers\BibleGoldenVerseComposer;
use App\View\Composers\DailyBibleReadingFragmentComposer;
use App\View\Composers\DailyPrayerNeedComposer;
use App\View\Composers\TagListComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        View::composer("blocks.sidebar.core", DailyBibleReadingFragmentComposer::class);
        View::composer("blocks.sidebar.core", DailyPrayerNeedComposer::class);
        View::composer("blocks.banners.verse_of_day", BibleGoldenVerseComposer::class);
        View::composer("blocks.tags.tag", TagListComposer::class);
    }
}
