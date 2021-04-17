<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiderEklesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gider_ekles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gider_id')->unsigned();
            $table->integer('blok_id')->unsigned();
            $table->string('daire');
            $table->index(['gider_id','blok_id']);
            //$table->foreign('blok_id')->references('id')->on('bloks')->onDelete('cascade');
            //$table->foreign('gider_id')->references('id')->on('gider_kalemleris')->onDelete('cascade');
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
        Schema::dropIfExists('gider_ekles');
    }
}
