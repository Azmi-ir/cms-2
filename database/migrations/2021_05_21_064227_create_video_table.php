<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori')->unsigned();
            $table->bigInteger('id_playlist')->unsigned();
            $table->string('judul_vid');
            $table->string('deskripsi');
            $table->string('video');
            $table->timestamps();
        });

        Schema::table('video', function (Blueprint $table){
            $table->foreign('id_kategori')->references('id')->on('kategori_vid')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_playlist')->references('id')->on('playlist')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
}
