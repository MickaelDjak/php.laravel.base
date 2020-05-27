<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDailyPrayerNeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            "INSERT INTO daily_prayer_needs (id, day_number, text, created_at, updated_at) VALUES (1, 1, 'Сьогодні молимось одне за одного: за благословення у праці, духовне зростання, здоров’я. ', '2020-05-23 16:35:47', '2020-05-23 16:35:47');",
            "INSERT INTO daily_prayer_needs (id, day_number, text, created_at, updated_at) VALUES (2, 2, 'Сьогодні молимось за сім’ї: за міцність християнських родин, відновлення стосунків, відповідальне батьківство. ', '2020-05-23 16:35:47', '2020-05-23 16:35:47');",
            "INSERT INTO daily_prayer_needs (id, day_number, text, created_at, updated_at) VALUES (3, 3, 'Сьогодні молимось за місію і місіонерів: за утворення нових церков, за місіонерів у небезпеці, за особисте благовістя. ', '2020-05-23 16:35:47', '2020-05-23 16:35:47');",
            "INSERT INTO daily_prayer_needs (id, day_number, text, created_at, updated_at) VALUES (4, 4, 'Сьогодні молимось за розширення можливостей для служіння: кошти для завершення будівництва церковної споруди, гімназії.', '2020-05-23 16:35:47', '2020-05-23 16:35:47');",
            "INSERT INTO daily_prayer_needs (id, day_number, text, created_at, updated_at) VALUES (5, 5, 'Сьогодні молимось за Україну та Ірпінь: за богошукання і добробут народу, за мудрість тих, хто при владі, за найближчі вибори.', '2020-05-23 16:35:47', '2020-05-23 16:35:47');",
            "INSERT INTO daily_prayer_needs (id, day_number, text, created_at, updated_at) VALUES (6, 6, 'Сьогодні молимось за усіх служителів: за Боже благословення і натхнення для братів і сестер, які вкладають себе у служіння іншим, за нових відповідальних служителів.', '2020-05-23 16:35:47', '2020-05-23 16:35:47');",
            "INSERT INTO daily_prayer_needs (id, day_number, text, created_at, updated_at) VALUES (7, 7, 'Сьогодні дякуємо Ісусові за подароване спасіння.', '2020-05-23 16:35:47', '2020-05-23 16:35:47');",
        ];

        foreach ($list as $item) {
            DB::insert($item);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
