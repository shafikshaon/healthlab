<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('fname', 50);
        $table->string('lname', 50);
        $table->string('uname', 50);
        $table->string('email')->unique();
        $table->string('gender');
        $table->string('dob');
        $table->string('account_type');
        $table->string('password');
        $table->rememberToken();
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
      Schema::dropIfExists('users');
    }
}
