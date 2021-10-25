<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_anggota')->unsigned(); // FK - (id) anggota [no_himpunan]
            $table->bigInteger('id_kategori')->unsigned(); // FK - (id) kat_keuangan
            $table->date('tanggal_pembayaran');
            $table->integer('jumlah_pembayaran');
            $table->string('bukti_pembayaran');
            $table->text('keterangan');
            $table->string('status_konfirmasi', 10);
            $table->timestamps();
        });

        Schema::table('keuangan', function (Blueprint $table) {
            $table->foreign('id_anggota')->references('id')->on('anggota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kategori')->references('id')->on('kat_keuangan')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keuangan');
    }
}
