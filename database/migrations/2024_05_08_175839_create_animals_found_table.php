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
            $table->strign('animal_color', 69);
            $table->string('animal_image', 200);
            $table->string('gender', 1);
            $table->string('status', 1);
            $table->integer('animal_breed');
            $table->string('animal_size', 50);
            $table->integer('animal_specie');
            $table->integer('location_id');
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
