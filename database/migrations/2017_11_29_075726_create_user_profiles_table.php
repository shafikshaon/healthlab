<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->string('img_path')->nullable();
          $table->string('blood_group')->nullable();
          $table->string('phone_number')->nullable();
          $table->string('educational_qualification')->nullable();
          $table->string('blood_pressure_systolic')->nullable();
          $table->string('blood_pressure_diastolic')->nullable();
          $table->string('height')->nullable();
          $table->string('weight')->nullable();
          $table->string('building')->nullable();
          $table->string('street')->nullable();
          $table->string('city')->nullable();
          $table->string('area')->nullable();
          $table->string('post_code')->nullable();
          $table->string('country')->nullable();
          $table->string('job_title')->nullable();
          $table->string('company_name')->nullable();
          $table->timestamp('created_at')->useCurrent();
          $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
