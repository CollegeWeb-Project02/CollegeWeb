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
        Schema::create('register', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('dob');
            $table->string('address');
            $table->string('achieve');
            $table->string('description');
            $table->string('phone');
            $table->string('email');
            $table->string('avatar')->nullable();
            $table->string('password')->nullable();
            $table->integer('level')->nullable();
            $table->string('social_link')->nullable();
            $table->integer('class_id')->nullable();
            $table->integer('course_id');
            $table->integer('status')->default(0);



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
        Schema::dropIfExists('register');
    }
};
