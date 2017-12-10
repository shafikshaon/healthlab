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

      for($i = 0; $i < 100; $i++) {
        App\UserProfile::create([
            'user_id' => $faker->unique()->numberBetween($min = 1, $max = 100),
            'img_path' => $faker->image($dir = 'public/profile_img/', $width = 640, $height = 480),
            'phone_number' => $faker->e164PhoneNumber     ,
            'building' => $faker->buildingNumber,
            'street' => $faker->streetName,
            'city' => $faker->randomElement($array = array ('Dhaka','Khulna', 'Sylhet')),
            'post_code' => $faker->postcode,
            'country' => "Bangladesh",
            'job_title' => $faker->randomElement($array = array ('Medicine','Pediatrics', 'Surgery','Obstetrics & Gynaecology', 'Dentistry','Basic & Paraclinical Science', 'Preventive & Social Medicine','Gastroenterology', 'Neurology', 'Nephrology', 'Endocrinology & Metabolism', 'Cardiology', 'Pulmonology', 'Rheumatology', 'Infectious Disease & Tropical Medicine')),
            'educational_qualification' => $faker->randomElement($array = array ('M.B.B.S','FCPS')),
            'blood_pressure_systolic' => $faker->randomElement($array = array ('70','80', '90','100', '110')),
            'blood_pressure_diastolic' => $faker->randomElement($array = array ('100','110', '120','130', '140','150', '160','170', '180', '190', '200')),
            'weight' => $faker->numberBetween($min = 70, $max = 90),
            'height' => $faker->numberBetween($min = 155, $max = 190),
            'area' => $faker->city,
            'company_name' => $faker->company,
            'blood_group' => $faker->randomElement($array = array ('A+','A-', 'B+','B-', 'AB+','AB-', 'O+','O-')),
        ]);
      }
    }
}
