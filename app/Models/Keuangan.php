<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = "keuangan"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'id_anggota', 'id_kategori', 'tanggal_pembayaran', 'jumlah_pembayaran', 'bukti_pembayaran', 'keterangan',
        'status_konfirmasi'
    ];
}
