<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = "divisi"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'kode_divisi', 'nama_divisi', 'ket_divisi'
    ];

}
