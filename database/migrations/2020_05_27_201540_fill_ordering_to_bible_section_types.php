<?php

use Illuminate\Database\Migrations\Migration;

class FillOrderingToBibleSectionTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $list = [
            "UPDATE bible_section_types SET ordering =  1 WHERE code = 'pentateuch';",
            "UPDATE bible_section_types SET ordering =  2 WHERE code = 'historical';",
            "UPDATE bible_section_types SET ordering =  3 WHERE code = 'educational';",
            "UPDATE bible_section_types SET ordering =  4 WHERE code = 'big_prophets';",
            "UPDATE bible_section_types SET ordering =  5 WHERE code = 'small_prophets';",
            "UPDATE bible_section_types SET ordering =  6 WHERE code = 'gospels_and_acts';",
            "UPDATE bible_section_types SET ordering =  7 WHERE code = 'catholic_epistles';",
            "UPDATE bible_section_types SET ordering =  8 WHERE code = 'paul_epistles';",
            "UPDATE bible_section_types SET ordering =  9 WHERE code = 'prophetic';",
        ];

        foreach ($list as $item) {
            DB::update($item);
        }
    }
}
