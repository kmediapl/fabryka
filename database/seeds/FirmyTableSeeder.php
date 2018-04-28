<?php

use Illuminate\Database\Seeder;
use App\Firma;

class FirmyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0;$i<99;$i++){
        $firma = new Firma();
    
          $firma ->nazwa_firmy = $faker->company;
          $firma ->nip = $faker->numberBetween(1,30);
          $firma ->miejscowosc = $faker->city;
          $firma ->kod_pocztowy = $faker->postcode;
          $firma ->wojewodztwo = $faker->city;
          $firma ->poczta = $faker->city;
          $firma ->ulica = $faker->streetName;
          $firma ->nr_domu = $faker->numberBetween(1,20);
          $firma ->nr_lokalu = $faker->numberBetween(1,20);
          
          
           
          $firma ->save();
    
    }
    }
}
