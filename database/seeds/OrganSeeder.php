<?php

use Illuminate\Database\Seeder;

class OrganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $faker = Faker\Factory::create();
         for($i = 0; $i < 9; $i++) {
           App\Organ::create([
               'organ_name' => $faker->unique()->randomElement($array = array ('Head','Nose', 'Eye','Hand', 'Blood','Leg', 'Heart','Kidney', 'Liver')),
           ]);
         }
     }
}
