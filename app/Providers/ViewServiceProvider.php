<?php

namespace App\Providers;

use App\View\Composers\DailyBibleReadingFragmentComposer;
use App\View\Composers\DailyPrayerNeedComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        View::composer("*", DailyBibleReadingFragmentComposer::class);
        View::composer("*", DailyPrayerNeedComposer::class);
    }
}
