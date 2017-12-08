<?php

use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('diseases')->insert([
        //     'disease_name' => $faker->unique()->randomElement($array = array ('Liver','Nose', 'Eye','Hand', 'Blood','Leg', 'Heart','Kidney')),
        // ]);
        $faker = Faker\Factory::create();
        
        DB::table('diseases')->insert([
             'disease_name' => $faker->unique()->randomElement($array = array ('Liver')),
        ]);
    }
}
