<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKasMasuk = DB::table('keuangan')
                        -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
                        -> select ('no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran')
                        -> where ('id_kategori','=', '1' )
                        -> get();

        return view('Keuangan.LihatKasMasuk', compact('dtKasMasuk'));
    }

    public function index1()
    {
        $dtKasKeluar = DB::table('keuangan')
                        -> where ('id_kategori','=', '2' )
                        -> get();

        return view('Keuangan.LihatKasKeluar', compact('dtKasKeluar'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function show(Keuangan $keuangan)
    {
        $dtLaporan = DB::table('keuangan')
                        // ->where('id_kategori', '=', '1')
                        ->get(); 
        return view('Keuangan.LaporanKas', compact('dtLaporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keuangan $keuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keuangan $keuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keuangan $keuangan)
    {
        //
    }
}
