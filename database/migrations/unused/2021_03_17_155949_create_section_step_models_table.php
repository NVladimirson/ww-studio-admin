<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionStepModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_step_models', function (Blueprint $table) {
            $table->id();
            $table->text('image_1')->default('icon-home_big_icon_1');
            $table->text('step_1')->default('Beratungsgespräch');
            $table->text('image_2')->default('icon-home_big_icon_2');
            $table->text('step_2')->default('Auswahl des geeigneten Kurses');
            $table->text('image_3')->default('icon-home_big_icon_3');
            $table->text('step_3')->default('Abschluss');
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
        Schema::dropIfExists('section_step_models');
    }
}
