<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('sinopse');
            $table->unsignedBigInteger('id_diretor');
            $table->unsignedBigInteger('id_class');
            $table->timestamps();
            $table->foreign('id_diretor')
                ->references('id')
                ->on('diretors')
                ->onDelete('cascade');
            $table->foreign('id_class')
                ->references('id')
                ->on('classifications')
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
    }
}
