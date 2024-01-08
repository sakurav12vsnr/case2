<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeTableSeeder extends Seeder
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
            'shop_id' => 281
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 2,
            'shop_id' => 285,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 3,
            'shop_id' => 292,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 4,
            'shop_id' => 299,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 5,
            'shop_id' => 290,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 6,
            'shop_id' => 284,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 7,
            'shop_id' => 292,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 8,
            'shop_id' => 297,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 9,
            'shop_id' => 292,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 40,
            'shop_id' => 281
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 40,
            'shop_id' => 300
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 40,
            'shop_id' => 299
        ];
        DB::table('likes')->insert($param);
    }
}
