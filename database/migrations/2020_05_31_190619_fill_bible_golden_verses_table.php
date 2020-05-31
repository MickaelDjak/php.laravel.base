<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleGoldenVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            'jhn' => [
                '1:12',
                '3:3',
                '3:16',
                '3:36',
                '6:37',
                '10:28',
                '14:6',
            ]
        ];

        $sql = 'INSERT INTO bible_golden_verses (created_at, updated_at, book_code, fragment) VALUES (\'2021-05-31 00:00:00\', null, :book, :verse);';
        foreach ($list as $book => $verses) {
            foreach ($verses as $verse) {
                DB::insert($sql, [
                    ':book' => $book,
                    ':verse' => $verse,
                ]);
            }
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('DELETE FROM bible_golden_verses;');
    }
}
