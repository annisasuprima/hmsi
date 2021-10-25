<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaOrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_or', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10); // CPK - anggota
            $table->string('email', 50);
            $table->string('nama', 50);
            $table->string('jenis_kelamin', 10);
            $table->string('tempat_lahir', 30);
            $table->date('tgl_lahir');
            $table->string('no_hp', 15);
            $table->integer('angkatan')->unsigned();
            $table->text('alamat');
            $table->string('divis1', 30);
            $table->text('alasan1');
            $table->string('divis2', 30);
            $table->text('alasan2');
            $table->string('foto');
            $table->string('cv');
            $table->integer('nilai')->unsigned();
            $table->string('status_or', 30);
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
        Schema::dropIfExists('peserta_or');
    }
}
