<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    use HasFactory;
    protected $table = "rapat"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'id_divisi', 'tanggal', 'waktu_mulai', 'waktu_selesai', 'topik', 'hasil'
    ];
}
