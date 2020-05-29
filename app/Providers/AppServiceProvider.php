<?php

namespace App\Providers;

use App\Models\DailyBibleReadingFragment;
use App\Models\DailyPrayerNeed;
use App\View\Composers\DailyBibleReadingFragmentComposer;
use App\View\Composers\DailyPrayerNeedComposer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
