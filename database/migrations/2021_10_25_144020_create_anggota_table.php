<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_divisi')->unsigned();    // FK - (id) divisi [kode_divisi]
            $table->string('nim', 10); 
            $table->string('no_himpunan', 30);  // CPK - keuangan
            $table->string('nama', 50);
            $table->string('password', 30);
            $table->string('jabatan', 15);
            $table->string('jenis_kelamin', 10);
            $table->text('alamat');
            $table->string('tempat_lahir', 30);
            $table->date('tgl_lahir');
            $table->string('email', 50)->unique();
            $table->string('no_hp', 15);
            $table->string('angkatan', 4);
            $table->string('foto');
            $table->string('cv');
            $table->string('tahun_jabatan', 4);
            $table->string('jenis_keanggotaan', 30);
            $table->timestamps();
        });

        Schema::table('anggota', function (Blueprint $table) {
            $table->foreign('id_divisi')->references('id')->on('divisi')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
