<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori')->unsigned();
            $table->string('keterangan');
            $table->string('gambar');
            $table->timestamps();
        });

        Schema::table('galeri', function (Blueprint $table){
            $table->foreign('id_kategori')->references('id')->on('kategori_galeri')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri');
    }
}
