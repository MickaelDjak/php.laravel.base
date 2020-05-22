<?php

use Illuminate\Database\Seeder;

class ChurchMeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\ChurchMeeting::class, 12)->create();
    }
}
