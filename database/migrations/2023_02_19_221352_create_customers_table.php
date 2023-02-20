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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('prefix');
            $table->string('fname');
            $table->string('lname');
            $table->string('en_fname');
            $table->string('en_lname');
            $table->date('birthdate');
            $table->string('birth_location');
            $table->string('passport_name');
            $table->date('passport_start');
            $table->date('passport_end');
            $table->string('room');
            $table->string('note');
            $table->integer('trip_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('customers');
    }
};
