<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori')->unsigned();
            $table->string('judul_berita');
            $table->string('thumbnail');
            $table->bigInteger('publisher')->nullable();
            $table->string('alias')->nullable();
            $table->Longtext('isi_berita');
            $table->timestamps();
        });

        Schema::table('berita', function (Blueprint $table){
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
