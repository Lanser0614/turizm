<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_details', function (Blueprint $table) {
            $table->id();
            $table->string('mail')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('addres')->nullable();
            
            $table->string('instagram_link')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('fasebook_link')->nullable();
            $table->string('google_link')->nullable();
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
        Schema::dropIfExists('site_details');
    }
}
