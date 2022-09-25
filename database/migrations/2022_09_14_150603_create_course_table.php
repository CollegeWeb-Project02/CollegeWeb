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
        Schema::create('course', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description');
            $table->string('title');
            $table->text('subtitle');
            $table->string('image');
            $table->integer('time');
            $table->integer('subject_id');
            $table->integer('price');
            $table->integer('status');
            $table->integer('discount')->nullable();

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
        Schema::dropIfExists('course');
    }
};
