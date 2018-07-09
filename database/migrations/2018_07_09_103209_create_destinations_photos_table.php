<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('destination_id')->unsigned();
            $table->foreign('destination_id')->references('id')->on('destinations');
            $table->string('filename');
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
        Schema::dropIfExists('destinations_photos');
    }
}
