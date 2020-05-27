<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChurchMeeting
 * @package App\Models
 *
 * @property  $meeting_time
 * @property  $duration
 * @property  $description
 */
class ChurchMeeting extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'meeting_time',
    ];

    /**
     * @return mixed
     */
    public static function getLast()
    {
        $meetings = self::orderBy('meeting_time', 'ASC')->get();

        return $meetings->reduce(function ($result, $meeting) {
            $date = $meeting->meeting_time->format('d.m');
            $result[$date]['list'][] = $meeting;
            $result[$date]['date'] = $date;
            $result[$date]['name'] = $meeting->meeting_time->translatedFormat('l');


            return $result;
        }, []);
    }
}
