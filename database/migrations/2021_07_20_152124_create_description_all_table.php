<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('description_all', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('number_of_seats')->nullable();
            $table->tinyInteger('bar')->nullable();
            $table->tinyInteger('self_service')->nullable();
            $table->tinyInteger('reservation')->nullable();
            $table->string('map')->nullable();
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
        Schema::dropIfExists('description_all');
    }
}
