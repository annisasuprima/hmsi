<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kat_keuangan extends Model
{
    use HasFactory;
    protected $table = "kat_keuangan"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'kategori', 'nama_kategori', 'ket_kategori'
    ];
}
