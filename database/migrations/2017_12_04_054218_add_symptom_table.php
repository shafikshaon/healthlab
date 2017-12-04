<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSymptomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('symptoms', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('disease_id');
          $table->string('symptom');
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
         Schema::dropIfExists('symptoms');
     }
}
