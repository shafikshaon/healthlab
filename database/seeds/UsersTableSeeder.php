<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for($i = 0; $i < 50; $i++) {
        App\User::create([
            'fname' => $faker->firstName,
            'lname' => $faker->lastName,
            'uname' => $faker->userName,
            'email' => $faker->freeEmail,
            'gender' => $faker->randomElement($array = array ('Male','Female','Others')),
            'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'account_type' => $faker->randomElement($array = array ('Patient','Doctor')),
            'password' => bcrypt('123456'),
            'remember_token' => bcrypt(str_random(100)),
        ]);
      }


    }
}
