<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Anggota extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "anggota"; //cek
    protected $primaryKey = "id"; //cek
    protected $fillable = [
        'id_divisi','id_pesertaor','no_himpunan', 'nama', 'password','jabatan',
        'jenis_kelamin', 'alamat',  'tempat_lahir', 'tgl_lahir', 'email','nim',
        'no_hp', 'angkatan', 'foto', 'cv','tahun_jabatan', 'jenis_keanggotaan'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
