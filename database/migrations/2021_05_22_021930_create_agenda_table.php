<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('nama_agenda');
            $table->text('isi_agenda')->nullable();;
            $table->string('tempat')->nullable();
            $table->string('pengirim')->nullable();
            $table->string('gambar');
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->time('jam')->nullable();
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
        Schema::dropIfExists('agenda');
    }
}
