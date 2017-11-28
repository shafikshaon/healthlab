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

      for($i = 0; $i < 15; $i++) {
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

      DB::table('users')->insert([
          [
            'fname' => 'Shafik',
            'lname' => 'Shaon',
            'uname' => 'shafikshaon',
            'email' => 'shafikshaon@gmail.com',
            'gender' => 'Male',
            'dob' => '1993-09-08',
            'account_type' => 'Admin',
            'password' => bcrypt('shafikshaon'),
            'remember_token' => bcrypt(str_random(100)),
          ],
          [
            'fname' => 'Sadia',
            'lname' => 'Sadia',
            'uname' => 'sadiasabnaj',
            'email' => 'sadiasabnaj@gmail.com',
            'gender' => 'Female',
            'dob' => '1995-01-11',
            'account_type' => 'Admin',
            'password' => bcrypt('sadiasabnaj'),
            'remember_token' => bcrypt(str_random(100)),
          ],
          [
            'fname' => 'Ponkaj',
            'lname' => 'Deb Nath',
            'uname' => 'ponkajn',
            'email' => 'ponkajn@gmail.com',
            'gender' => 'Male',
            'dob' => '1994-06-01',
            'account_type' => 'Admin',
            'password' => bcrypt('ponkajdebnath'),
            'remember_token' => bcrypt(str_random(100)),
          ]
      ]);

      DB::table('users')->insert([
        [
          'fname' => 'Shafik',
          'lname' => 'Shaon',
          'uname' => 'shafikshaon2',
          'email' => 'shafikshaon2@gmail.com',
          'gender' => 'Male',
          'dob' => '1993-09-08',
          'account_type' => 'Developer',
          'password' => bcrypt('shafikshaon'),
          'remember_token' => bcrypt(str_random(100)),
        ],
        [
          'fname' => 'Sadia',
          'lname' => 'Sadia',
          'uname' => 'sadiasabnaj2',
          'email' => 'sadiasabnaj95@gmail.com',
          'gender' => 'Female',
          'dob' => '1995-01-11',
          'account_type' => 'Developer',
          'password' => bcrypt('sadiasabnaj'),
          'remember_token' => bcrypt(str_random(100)),
        ],
        [
          'fname' => 'Ponkaj',
          'lname' => 'Deb Nath',
          'uname' => 'ponkajdebnath',
          'email' => 'ponkajdebnath@gmail.com',
          'gender' => 'Male',
          'dob' => '1994-06-01',
          'account_type' => 'Developer',
          'password' => bcrypt('ponkajdebnath'),
          'remember_token' => bcrypt(str_random(100)),
        ]
      ]);
    }
}
