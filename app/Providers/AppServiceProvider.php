<?php

namespace App\Providers;

use App\Models\DailyBibleReadingFragment;
use App\MOdels\DailyPrayerNeed;
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

        View::share('dailyBibleReadingFragments', DailyBibleReadingFragment::where([
            ['month_number',5],
            ['day_number', 23]
        ])->get());

        View::share('biblePrayerNeed', DailyPrayerNeed::where([
            ['day_number', 5]
        ])->first());
    }
}
