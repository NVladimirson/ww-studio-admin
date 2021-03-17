<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionContactModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_contact_models', function (Blueprint $table) {
            $table->id();
            $table->text('image')->default('/img/contact.jpg');   
            $table->text('contact_info')->default('Klaus Schwarz freut sich auf Ihren Anruf unter Telefon:'); 
            $table->text('contact_phone')->default('+49 6104 4099846'); 
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
        Schema::dropIfExists('section_contact_models');
    }
}
