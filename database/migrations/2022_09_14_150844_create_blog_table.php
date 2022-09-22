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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();

            $table->integer('staff_id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('image');
            $table->string('image1');
            $table->string('image2');
            $table->text('content1');
            $table->text('content2');
            $table->text('content3');
            $table->text('content4');
            $table->string('tag');

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
        Schema::dropIfExists('blog');
    }
};
