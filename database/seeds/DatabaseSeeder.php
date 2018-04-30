<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(FirmyTableSeeder::class);
         $this->call(WojTableSeeder::class);
         $this->call(KasyTableSeeder::class);
         $this->call(SerwisanciTableSeeder::class);
         $this->call(UsTableSeeder::class);
         $this->call(TypyTableSeeder::class);
    }
}
