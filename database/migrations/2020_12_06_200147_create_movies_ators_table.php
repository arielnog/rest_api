<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesAtorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_ators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_movies');
            $table->unsignedBigInteger('id_ator');
            $table->timestamps();
            $table->foreign('id_movies')
                ->references('id')
                ->on('movies')
                ->onDelete('cascade');
            $table->foreign('id_ator')
                ->references('id')
                ->on('ators')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_ators');
    }
}
