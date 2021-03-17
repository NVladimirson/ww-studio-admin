<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionImageTextModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_image_text_models', function (Blueprint $table) {
            $table->id();
            $table->text('title')->default('Vertriebsleiter-Ausbildung IHK oder CEA');
        $table->text('subtitle')->default('Nutzen Sie Ihre Chance');
            // $table->text('subtitle');
            $table->text('image')->default('/img/index1.jpg');
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
        Schema::dropIfExists('section_image_text_models');
    }
}
