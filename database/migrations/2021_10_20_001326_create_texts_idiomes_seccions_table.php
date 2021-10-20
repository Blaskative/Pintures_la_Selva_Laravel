<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsIdiomesSeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts_idiomes_seccions', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->timestamps();
            $table->foreignId('idioma_id')->references('id')->on('idiomes');
            $table->foreignId('seccio_id')->references('id')->on('seccions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texts_idiomes_seccions');
    }
}
