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
        Schema::create('student_register', function (Blueprint $table) {
            $table->id();

            $table->integer('register_id');
            $table->string('register_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('gender');
            $table->string('address');

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
        Schema::dropIfExists('student_register');
    }
};
