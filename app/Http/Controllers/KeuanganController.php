<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Anggota;
use App\Models\Kat_keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            ->join('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
            ->join('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
            ->where('kat_keuangan.ket_kategori', 'kas masuk')
            ->get([
                'keuangan.id', 'anggota.no_himpunan', 'anggota.nama', 'keuangan.tanggal_pembayaran',
                'keuangan.jumlah_pembayaran', 'keuangan.status_konfirmasi'
            ]);
        // $dtKasMasuk = DB::table('keuangan')
        //                 -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
        //                 -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'status_konfirmasi')
        //                 -> where('id_kategori', '1')
        //                 -> orWhere('id_kategori', '2')
        //                 -> orWhere('id_kategori', '5')
        //                 -> get();

        return view('Keuangan.LihatKasMasuk', compact('dtKasMasuk'));
    }

    //TAMPIL KAS KELUAR
    public function index1()
    {
        $dtKasKeluar = DB::table('keuangan')
            ->where('id_kategori', '3')
            ->orWhere('id_kategori', '4')
            ->get();

        return view('Keuangan.LihatKasKeluar', compact('dtKasKeluar'));
    }

    //TAMPIL RIWAYAT KAS DI ANGGOTA
    public function show_riwayat()
    {
        $dtRiwayat = DB::table('keuangan')
            ->join('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
            ->select('keuangan.id', 'anggota.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'status_konfirmasi')
            ->where('anggota.id', '=', Auth::guard('anggota')->user()->id)
            ->get();

        return view('Keuangan.LihatPembayaran', compact('dtRiwayat'));
    }

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
            ->where('id', '=', Auth::guard('anggota')->user()->id)
            ->get();

        $kategori = DB::table('kat_keuangan')
            ->where('ket_kategori', '=', 'kas masuk')
            ->get();


        return view('Keuangan.CreatePembayaran', compact('anggota', 'kategori'));
    }

    //SIMPAN DATA KAS MASUK
    public function store(Request $request)
    {

        $filefoto= cloudinary()->upload($request->file('bukti_pembayaran')->getRealPath())->getSecurePath();
      
        Keuangan::create([
            'id_anggota' => $request->id_anggota,
            'id_kategori' => $request->id_kategori,
            'tanggal_pembayaran' => $request->tanggal,
            'jumlah_pembayaran' => $request->jumlah,
            'bukti_pembayaran' => $filefoto,
            'keterangan' => $request->ket,
            'status_konfirmasi' => $request->status,
        ]);

        return redirect('/kas-masuk');
    }

    //SIMPAN DATA KAS KELUAR
    public function store1(Request $request)
    {
        $foto = $request->foto;
        $bukti = $foto->getClientOriginalName();

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
        // $bukti = "Belum";
        $foto = $request->foto;
        $bukti = $foto->getClientOriginalName();
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

    //MENAMPILKAN LAPORAN KAS
    public function show(Keuangan $keuangan)
    {
        $dtLaporan = DB::table('keuangan')
            ->join('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
            ->select('ket_kategori', 'keterangan', 'tanggal_pembayaran', 'jumlah_pembayaran')
            // -> where ('id_kategori','=', '1' )
            ->get();
        // $dtLaporan = DB::table('keuangan')
        //                 // ->where('id_kategori', '=', '1')
        //                 ->get(); 
        return view('Keuangan.LaporanKas', compact('dtLaporan'));
    }

    public function edit($id)
    {
        $keuangan = DB::table('keuangan')
            ->join('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
            ->select('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'bukti_pembayaran', 'keterangan', 'status_konfirmasi')
            ->where('keuangan.id', '=', $id)
            ->get();

        $kt = DB::table('keuangan')
            ->join('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
            ->select('keuangan.id', 'nama_kategori')
            ->where('keuangan.id', '=', $id)
            ->get();

        return view('Keuangan.EditKasMasuk', compact('keuangan', 'kt'));
    }

    public function edit1($id)
    {
        $keuangan = DB::table('keuangan')
            ->join('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
            ->select('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'bukti_pembayaran', 'keterangan', 'status_konfirmasi')
            ->where('keuangan.id', '=', $id)
            ->get();

        $kt = DB::table('keuangan')
            ->join('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
            ->select('keuangan.id', 'nama_kategori')
            ->where('keuangan.id', '=', $id)
            ->get();

        return view('Keuangan.EditKasKeluar', compact('keuangan', 'kt'));
    }

    public function update(Request $request, $id)
    {
        $anggota = DB::table('anggota')
            ->where('no_himpunan', '=', $request->no_himpunan)
            ->get(['id']);

        foreach ($anggota as $dt) {
            $data = $dt->id;
        }

        $kategori = DB::table('kat_keuangan')
            ->where('nama_kategori', '=', $request->kategori)
            ->get(['id']);

        foreach ($kategori as $kt) {
            $dt_kategori = $kt->id;
        }

        if ($request->bukti_pembayaran) {

            $newfoto = $request->bukti_pembayaran;
            $updated = [
                'id_anggota' => $data,
                'id_kategori' => $dt_kategori,
                'tanggal_pembayaran' => $request->tanggal,
                'jumlah_pembayaran' => $request->jumlah,
                'keterangan' => $request->ket,
                'status_konfirmasi' => $request->status,
            ];
            if ($request->bukti_pembayaran) {

                $filefoto = cloudinary()->upload($request->file('bukti_pembayaran')->getRealPath())->getSecurePath();

                $updated['bukti_pembayaran'] = $filefoto;
            }

            $update = DB::table('keuangan')
                ->where('id', '=', $id)
                ->update($updated);
        } else {
            $update = DB::table('keuangan')
                ->where('id', '=', $id)
                ->update([
                    'id_anggota' => $data,
                    'id_kategori' => $dt_kategori,
                    'tanggal_pembayaran' => $request->tanggal,
                    'jumlah_pembayaran' => $request->jumlah,
                    'keterangan' => $request->ket,
                    'status_konfirmasi' => $request->status,
                ]);
        }
        return redirect('/kas-masuk');
    }

    public function update1(Request $request, $id)
    {
        $bukti = "Cash";

        $anggota = DB::table('anggota')
            ->where('no_himpunan', '=', $request->no_himpunan)
            ->get(['id']);

        foreach ($anggota as $dt) {
            $data = $dt->id;
        }

        $kategori = DB::table('kat_keuangan')
            ->where('nama_kategori', '=', $request->kategori)
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

    //TAMPIL KAtegori Keuangan
    public function kategori()
    {
        $dtKasMasuk = DB::table('keuangan')
            ->join('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
            ->join('kat_keuangan', 'keuangan.id_kategori', '=', 'kat_keuangan.id')
            ->where('kat_keuangan.ket_kategori', 'kas masuk')
            ->get([
                'keuangan.id', 'anggota.no_himpunan', 'anggota.nama', 'keuangan.tanggal_pembayaran',
                'keuangan.jumlah_pembayaran', 'keuangan.status_konfirmasi'
            ]);
        // $dtKasMasuk = DB::table('keuangan')
        //                 -> join ('anggota', 'keuangan.id_anggota', '=', 'anggota.id')
        //                 -> select ('keuangan.id', 'no_himpunan', 'nama', 'tanggal_pembayaran', 'jumlah_pembayaran', 'status_konfirmasi')
        //                 -> where('id_kategori', '1')
        //                 -> orWhere('id_kategori', '2')
        //                 -> orWhere('id_kategori', '5')
        //                 -> get();

        return view('Keuangan.LihatKasMasuk', compact('dtKasMasuk'));
    }

    //Kategori Keuangan
    //TAMPIL FORM TAMBAH KAS KELUAAR
    public function indexkat()
    {
        $dtKategori = DB::table('kat_keuangan')
            ->get([
                'id', 'kategori', 'nama_kategori', 'ket_kategori'
            ]);
        return view('Keuangan.LihatKategori', compact('dtKategori'));
    }

    public function createkat()
    {
        $kategori = DB::table('kat_keuangan')
            ->get('id', 'kategori', 'nama_kategori', 'ket_kategori');

        return view('Keuangan.CreateKategori', compact('kategori'));
    }

    public function storekat(Request $request)
    {
        Kat_keuangan::create([
            'kategori' => $request->kategori,
            'nama_kategori' => $request->nama_kategori,
            'ket_kategori' => $request->ket_kategori,

        ]);

        return redirect('/kat-keuangan');
    }

    public function editkat($id)
    {
        $keuangan = DB::table('kat_keuangan')
            ->where('id', '=', $id)
            ->get();


        return view('Keuangan.EditKategori', compact('keuangan'));
    }

    public function updatekat(Request $request, $id)
    {
        $kategori = Kat_keuangan::findorfail($id);
        $kategori->update($request->all());
        return redirect('kat-keuangan')->with('success', 'kategori berhasil diedit!');
    }

    public function destroykat($id)
    {
        $kategori = Kat_keuangan::findorfail($id);
        $kategori->delete();
        return redirect('kat-keuangan')->with('success', 'Rapat berhasil dihapus!');
    }
}
