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
<<<<<<< HEAD
        'id','id_divisi','id_pesertaor','no_himpunan', 'nama', 'password','jabatan',
        'jenis_kelamin', 'alamat',  'tempat_lahir', 'tgl_lahir', 'email',
        'no_hp', 'angkatan', 'foto', 'cv','tahun_jabatan', 'jenis_keanggotaan'
=======
        'id', 'id_divisi', 'id_pesertaor', 'no_himpunan', 'nama', 'password', 'jabatan', 
        'jenis_kelamin', 'alamat', 'tempat_lahir', 'tgl_lahir', 'email', 'no_hp', 
        'angkatan', 'foto', 'cv', 'tahun_jabatan', 'jenis_keanggotaan'
>>>>>>> f5e4a5b84c7288e9e0ed9ccc88fb20d5ec2bf57e
    ];
}
