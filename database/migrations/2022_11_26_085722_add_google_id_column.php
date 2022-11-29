<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function ($table) {
          $table->string('fname')->nullable();
          $table->string('lname')->nullable();
          $table->string('dob')->nullable();
          $table->string('job')->nullable();
          $table->string('gender')->nullable();
          $table->string('income')->nullable();
          $table->string('occupation')->nullable();
          $table->string('familytype')->nullable();
          $table->string('mangilik')->nullable();
          $table->integer('role_id')->nullable();
          $table->string('google_id')->nullable();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
 };
