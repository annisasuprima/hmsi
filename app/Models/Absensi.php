<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = "absensi"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'id_anggota', 'id_rapat', 'status_kehadiran'
    ];
}
