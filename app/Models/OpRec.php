<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpRec extends Model
{
    use HasFactory;
    protected $table = "peserta_or"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'nim', 'email', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'angkatan', 'alamat', 'divis1', 'alasan1', 'divis2', 'alasan2', 'foto', 'cv', 'nilai', 'status_or'
    ];

}
