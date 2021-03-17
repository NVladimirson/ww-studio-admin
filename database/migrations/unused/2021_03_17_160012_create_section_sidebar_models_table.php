<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionSidebarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_sidebar_models', function (Blueprint $table) {
            $table->id();
            $table->text('category')->default('Seminare');  
            $table->text('title')->default('Lorem ipsum dolor sit amet');
            $table->text('description')->default('Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.
            ');  
            $table->text('category')->default('Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.
            '); 
            $table->timestamp('data')->default(now());
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
        Schema::dropIfExists('section_sidebar_models');
    }
}
