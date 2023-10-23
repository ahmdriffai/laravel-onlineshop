<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CouriersTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(RekeningTableSeeder::class);
        ini_set('memory_limit', '-1');
        // DB::unprepared(file_get_contents(__dir__ . '/source/dump_file/query.sql'));
        DB::unprepared(file_get_contents(__dir__ . '/source/dump_file/products.sql'));

        // $this->call(OrderSeeder::class);

    }
}
