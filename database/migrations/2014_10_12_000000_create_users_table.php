<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_verified_at')->nullable();


            $table->string('tel_no')->nullable();
            $table->string('sex')->nullable();
            $table->string('datebirth')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('blood_type')->nullable();



            $table->string('password');
            $table->string('role')->default('patient');
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
