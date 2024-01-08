<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShopTableSeeder::class);
        $this->call(LikeTableSeeder::class);
        $this->call(BookingTableSeeder::class);
    }
}
