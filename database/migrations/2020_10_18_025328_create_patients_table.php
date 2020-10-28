<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('user_id');

            $table->string('p_dob');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('p_height');
            $table->string('p_weight');
            $table->string('gender');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
