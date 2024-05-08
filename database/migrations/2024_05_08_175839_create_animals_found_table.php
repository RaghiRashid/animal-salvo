<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsFoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals_found', function (Blueprint $table)
        {
            $table->id();
            $table->integer('animal_color');
            $table->string('animal_image', 50);
            $table->integer('animal_breed');
            $table->string('animal_size', 50);
            $table->integer('animal_specie');
            $table->integer('found_localization_id');
            $table->integer('user_id');
            $table->string('description', 200);
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
        Schema::dropIfExists('animals_found');
    }
}
