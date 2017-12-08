<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      $this->call(UsersProfileTableSeeder::class);
      $this->call(OrganSeeder::class);
      $this->call(AdminDeveloperSeeder::class);
      // $this->call(DiseaseSeeder::class);
    }
}
