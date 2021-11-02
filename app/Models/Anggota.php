<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = "anggota"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'id_divisi', 'id_pesertaor', 'no_himpunan', 'nama', 'password', 'jabatan', 
        'jenis_kelamin', 'alamat', 'tempat_lahir', 'tgl_lahir', 'email', 'no_hp', 
        'angkatan', 'foto', 'cv', 'tahun_jabatan', 'jenis_keanggotaan'
    ];
}
