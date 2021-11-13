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
                        -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'status_konfirmasi')
                        -> where(
                            ['id_kategori' => '1'],
                            ['id_kategori' => '2'])
                        -> get();

        return view('Keuangan.LihatKasMasuk', compact('dtKasMasuk'));
    }

    public function index1()
    {
        $dtKasKeluar = DB::table('keuangan')
                        -> where(
                            ['id_kategori' => '3'],
                            ['id_kategori' => '4'])
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
        $anggota = DB::table('anggota')
        ->get(['id', 'no_himpunan']);

        return view('Keuangan.CreateKasMasuk', compact('anggota'));
    }

    public function create1()
    {
        return view('Keuangan.CreateKasKeluar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = "1";
        $bukti = "Cash";

        Keuangan::create([
            'id_anggota' => $request->id_anggota,
            'id_kategori' => $kategori,
            'tanggal_pembayaran' => $request->tanggal,
            'jumlah_pembayaran' => $request->jumlah,
            'bukti_pembayaran' => $bukti,
            'keterangan' => $request->ket,
            'status_konfirmasi' => $request->status,
        ]);

        return redirect('/kas-masuk');
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
                        -> join ('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
                        -> select ('ket_kategori', 'keterangan', 'tanggal_pembayaran', 'jumlah_pembayaran')
                        // -> where ('id_kategori','=', '1' )
                        -> get();
        // $dtLaporan = DB::table('keuangan')
        //                 // ->where('id_kategori', '=', '1')
        //                 ->get(); 
        return view('Keuangan.LaporanKas', compact('dtLaporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = DB::table('anggota')
        ->get(['id', 'no_himpunan']);

        $keuangan = DB::table('keuangan')
                        -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
                        -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'status_konfirmasi')
                        -> where('keuangan.id', '=', '2')
                        -> get();

        return view('Keuangan.EditKasMasuk', compact('keuangan', 'anggota'));
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
        // $kategori = "1";
        // $bukti = "Cash";

        // Keuangan::update([
        //     'id_anggota' => $request->id_anggota,
        //     'id_kategori' => $kategori,
        //     'tanggal_pembayaran' => $request->tanggal,
        //     'jumlah_pembayaran' => $request->jumlah,
        //     'bukti_pembayaran' => $bukti,
        //     'keterangan' => $request->ket,
        //     'status_konfirmasi' => $request->status,
        // ]);

        return redirect('/kas-masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasMasuk = keuangan::findorfail($id);
        $kasMasuk->delete();
        return redirect('/kas-masuk');
    }
}
