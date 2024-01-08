<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'shop_id' => 281,
            'date' => '2023/01/23',
            'time' => '17:00',
            'number' => 4
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 2,
            'shop_id' => 285,
            'date' => '2023/02/04',
            'time' => '18:00',
            'number' => 2
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 3,
            'shop_id' => 292,
            'date' => '2023/02/21',
            'time' => '17:00',
            'number' => 3
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 4,
            'shop_id' => 299,
            'date' => '2023/03/01',
            'time' => '19:00',
            'number' => 6
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 5,
            'shop_id' => 290,
            'date' => '2023/03/15',
            'time' => '17:00',
            'number' => 4
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 6,
            'shop_id' => 284,
            'date' => '2023/04/11',
            'time' => '18:00',
            'number' => 2
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 7,
            'shop_id' => 292,
            'date' => '2023/05/03',
            'time' => '18:00',
            'number' => 10
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 8,
            'shop_id' => 297,
            'date' => '2023/05/22',
            'time' => '17:00',
            'number' => 4
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 9,
            'shop_id' => 292,
            'date' => '2023/06/10',
            'time' => '20:00',
            'number' => 2
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 10,
            'shop_id' => 300,
            'date' => '2023/07/13',
            'time' => '17:00',
            'number' => 3
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 11,
            'shop_id' => 289,
            'date' => '2023/07/07',
            'time' => '19:00',
            'number' => 5
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 12,
            'shop_id' => 293,
            'date' => '2023/08/15',
            'time' => '18:00',
            'number' => 6
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 13,
            'shop_id' => 285,
            'date' => '2023/08/25',
            'time' => '20:00',
            'number' => 4
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 14,
            'shop_id' => 292,
            'date' => '2023/09/16',
            'time' => '21:00',
            'number' => 2
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 15,
            'shop_id' => 282,
            'date' => '2023/10/21',
            'time' => '17:00',
            'number' => 8
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 16,
            'shop_id' => 286,
            'date' => '2023/10/23',
            'time' => '19:00',
            'number' => 3
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 17,
            'shop_id' => 288,
            'date' => '2023/11/17',
            'time' => '17:00',
            'number' => 3
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 18,
            'shop_id' => 287,
            'date' => '2023/12/12',
            'time' => '18:00',
            'number' => 6
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 19,
            'shop_id' => 295,
            'date' => '2023/12/24',
            'time' => '18:00',
            'number' => 4
        ];
        DB::table('bookings')->insert($param);
        $param = [
            'user_id' => 20,
            'shop_id' => 290,
            'date' => '2023/12/31',
            'time' => '17:00',
            'number' => 9
        ];
        DB::table('bookings')->insert($param);
    }
}
