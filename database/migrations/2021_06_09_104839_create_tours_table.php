<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('tour_categories');
            $table->string('title');
            $table->string('how_many_days');
            $table->string('hotel_name');
            $table->string('what_is_have');
            $table->string('price');
            $table->text('description');
            $table->text('program_for_tour');
            $table->text('what_is_included');
            $table->string('img');
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
        Schema::dropIfExists('tours');
    }
}
