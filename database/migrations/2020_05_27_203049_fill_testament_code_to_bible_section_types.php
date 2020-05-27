<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillTestamentCodeToBibleSectionTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $list = [
            "UPDATE bible_section_types SET testament_code ='old' WHERE code IN ( 'pentateuch', 'historical','educational','big_prophets','small_prophets') ;",
            "UPDATE bible_section_types SET testament_code ='new' WHERE code IN ( 'gospels_and_acts', 'catholic_epistles','paul_epistles','prophetic') ;",
        ];

        foreach ($list as $item) {
            DB::update($item);
        }
    }

}
