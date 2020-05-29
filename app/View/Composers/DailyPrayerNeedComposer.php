<?php

namespace App\View\Composers;

use App\Models\DailyPrayerNeed;
use Illuminate\View\View;

/**
 * Class DailyPrayerNeedComposer
 * @package App\View\Composers
 */
class DailyPrayerNeedComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $need = DailyPrayerNeed::where([
            ['day_number', date('N')]
        ])->first();

        $view->with('biblePrayerNeed', $need);
    }
}
