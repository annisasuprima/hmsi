<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_anggota')->unsigned(); // FK - (id) anggota [no_himpunan]
            $table->bigInteger('id_rapat')->unsigned();  // FK - (id) rapat
            $table->string('status_kehadiran', 15);
            $table->timestamps();
        });

        Schema::table('absensi', function (Blueprint $table) {
            $table->foreign('id_anggota')->references('id')->on('anggota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_rapat')->references('id')->on('rapat')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
