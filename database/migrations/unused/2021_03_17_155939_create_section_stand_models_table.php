<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionStandModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_stand_models', function (Blueprint $table) {
            $table->id();
            $table->text('image')->default('/img/index-s2.jpg');
            $table->text('title')->default('Wo stehen Sie?');
            $table->text('content')->default('Der nächste Schritt in Ihrer Karriere ist eine Führungsposition im Vertrieb oder Sie sind bereits Vertriebsleiter und wollen einen qualifizierten Abschluss?
            <hr>
            Ein erfolgreicher Vertrieb ist der Motor eines jeden Unternehmens. Als Vertriebsleiter bewegen Sie sich jedoch oftmals auf dünnem Eis.');
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
        Schema::dropIfExists('section_stand_models');
    }
}
