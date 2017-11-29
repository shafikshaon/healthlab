<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UsersProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for($i = 0; $i < 21; $i++) {
        App\UserProfile::create([
            'user_id' => $faker->unique()->numberBetween($min = 1, $max = 21),
            'img_path' => $faker->image($dir = 'public/profile_img', $width = 640, $height = 480),
            'phone_number' => $faker->e164PhoneNumber     ,
            'building' => $faker->buildingNumber,
            'street' => $faker->streetName,
            'city' => $faker->city,
            'post_code' => $faker->postcode,
            'country' => $faker->country,
            'job_title' => $faker->jobTitle,
            'company_name' => $faker->company,
        ]);
      }
    }
}
