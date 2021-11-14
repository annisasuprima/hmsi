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

    //TAMPIL KAS MASUK
    public function index()
    {
        $dtKasMasuk = DB::table('keuangan')
                        -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
                        -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'status_konfirmasi')
                        -> where('id_kategori', '1')
                        -> orWhere('id_kategori', '2')
                        -> orWhere('id_kategori', '5')
                        -> get();

        return view('Keuangan.LihatKasMasuk', compact('dtKasMasuk'));
    }

    //TAMPIL KAS KELUAR
    public function index1()
    {
        $dtKasKeluar = DB::table('keuangan')
                        -> where('id_kategori', '3')
                        -> orWhere('id_kategori', '4')
                        -> get();

        return view('Keuangan.LihatKasKeluar', compact('dtKasKeluar'));
    }

    //TAMPIL RIWAYAT KAS DI ANGGOTA
    public function show_riwayat()
    {
        $dtRiwayat = DB::table('keuangan')
                        -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
                        -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'status_konfirmasi')
                        // -> where('id_kategori', '1')
                        -> get();

        return view('Keuangan.LihatPembayaran', compact('dtRiwayat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //TAMPIL FORM TAMBAH KAS MASUK
    public function create()
    {
        $anggota = DB::table('anggota')
        ->get(['id', 'no_himpunan']);

        $kategori = DB::table('kat_keuangan')
                    ->where('ket_kategori', '=', 'kas masuk')
                    ->get();

        return view('Keuangan.CreateKasMasuk', compact('anggota', 'kategori'));
    }

    //TAMPIL FORM TAMBAH KAS KELUAAR
    public function create1()
    {
        $anggota = DB::table('anggota')
        ->get(['id', 'no_himpunan']);

        $kategori = DB::table('kat_keuangan')
                    ->where('ket_kategori', '=', 'kas keluar')
                    ->get();

        return view('Keuangan.CreateKasKeluar', compact('anggota', 'kategori'));
    }

    //TAMPIL FORM TAMBAH PEMBAYARAN DI ANGGOTA
    public function create2()
    {
        $anggota = DB::table('anggota')
        ->get(['id', 'no_himpunan']);

        $kategori = DB::table('kat_keuangan')
                    ->get();

        return view('Keuangan.CreatePembayaran', compact('anggota', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //SIMPAN DATA KAS MASUK
    public function store(Request $request)
    {
        $bukti = "Cash";

        Keuangan::create([
            'id_anggota' => $request->id_anggota,
            'id_kategori' => $request->id_kategori,
            'tanggal_pembayaran' => $request->tanggal,
            'jumlah_pembayaran' => $request->jumlah,
            'bukti_pembayaran' => $bukti,
            'keterangan' => $request->ket,
            'status_konfirmasi' => $request->status,
        ]);

        return redirect('/kas-masuk');
    }

    //SIMPAN DATA KAS KELUAR
    public function store1(Request $request)
    {
        $bukti = "Belum";

        Keuangan::create([
            'id_anggota' => $request->id_anggota,
            'id_kategori' => $request->id_kategori,
            'tanggal_pembayaran' => $request->tanggal,
            'jumlah_pembayaran' => $request->jumlah,
            'bukti_pembayaran' => $bukti,
            'keterangan' => $request->ket,
            'status_konfirmasi' => $request->status,
        ]);

        return redirect('/kas-keluar');
    }

    //SIMPAN DATA PEMBAYARAN
    public function store2(Request $request)
    {
        $bukti = "Belum";
        $status = "Belum";

        Keuangan::create([
            'id_anggota' => $request->id_anggota,
            'id_kategori' => $request->id_kategori,
            'tanggal_pembayaran' => $request->tanggal,
            'jumlah_pembayaran' => $request->jumlah,
            'bukti_pembayaran' => $bukti,
            'keterangan' => $request->ket,
            'status_konfirmasi' => $status,
        ]);

        return redirect('/riwayat-kas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */

     //MENAMPILKAN LAPORAN KAS
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
        $keuangan = DB::table('keuangan')
                        -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
                        -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'keterangan', 'status_konfirmasi')
                        -> where('keuangan.id', '=', $id)
                        -> get();

        $kt = DB::table('keuangan')
                        -> join ('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
                        -> select ('keuangan.id', 'nama_kategori')
                        -> where('keuangan.id', '=', $id)
                        -> get();                

        return view('Keuangan.EditKasMasuk', compact('keuangan', 'kt'));
    }

    public function edit1($id)
    {
        $keuangan = DB::table('keuangan')
                        -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
                        -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'keterangan', 'status_konfirmasi')
                        -> where('keuangan.id', '=', $id)
                        -> get();

        $kt = DB::table('keuangan')
                        -> join ('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
                        -> select ('keuangan.id', 'nama_kategori')
                        -> where('keuangan.id', '=', $id)
                        -> get();                

        return view('Keuangan.EditKasMasuk', compact('keuangan', 'kt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bukti = "Cash";

        $anggota = DB::table('anggota')
                    ->where('no_himpunan','=', $request->no_himpunan)
                    ->get(['id']);

        foreach ($anggota as $dt) {
            $data = $dt->id;
        }

        $kategori = DB::table('kat_keuangan')
                    ->where('nama_kategori','=', $request->kategori)
                    ->get(['id']);

        foreach ($kategori as $kt) {
            $dt_kategori = $kt->id;
        }

        $update = DB::table('keuangan')
        ->where('id', '=', $id)
        ->update([
            'id_anggota' => $data,
            'id_kategori' => $dt_kategori,
            'tanggal_pembayaran' => $request->tanggal,
            'jumlah_pembayaran' => $request->jumlah,
            'bukti_pembayaran' => $bukti,
            'keterangan' => $request->ket,
            'status_konfirmasi' => $request->status,
        ]); 

        return redirect('/kas-masuk');
    }

    public function update1(Request $request, $id)
    {
        $bukti = "Cash";

        $anggota = DB::table('anggota')
                    ->where('no_himpunan','=', $request->no_himpunan)
                    ->get(['id']);

        foreach ($anggota as $dt) {
            $data = $dt->id;
        }

        $kategori = DB::table('kat_keuangan')
                    ->where('nama_kategori','=', $request->kategori)
                    ->get(['id']);

        foreach ($kategori as $kt) {
            $dt_kategori = $kt->id;
        }

        $update = DB::table('keuangan')
        ->where('id', '=', $id)
        ->update([
            'id_anggota' => $data,
            'id_kategori' => $dt_kategori,
            'tanggal_pembayaran' => $request->tanggal,
            'jumlah_pembayaran' => $request->jumlah,
            'bukti_pembayaran' => $bukti,
            'keterangan' => $request->ket,
            'status_konfirmasi' => $request->status,
        ]); 

        return redirect('/kas-keluar');
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

    public function destroy1($id)
    {
        $kasKeluar = keuangan::findorfail($id);
        $kasKeluar->delete();
        return redirect('/kas-keluar');
    }
}
