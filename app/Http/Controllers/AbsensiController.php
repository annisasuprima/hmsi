<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = DB::table('anggota')
        ->where('id','=', Auth::guard('anggota')->user()->id)
        ->get(
            'id_divisi'
        );

        foreach ($anggota as $divisi) {
            $dt_divisi = $divisi->id_divisi;
        }

        $dtrapat = DB::table('rapat')
        ->where('id_divisi','=',$dt_divisi)
        ->orWhere('id_divisi','=','7')
        ->join('divisi', 'divisi.id', '=', 'rapat.id_divisi')
        ->get([
            'divisi.id', 'divisi.nama_divisi', 'rapat.tanggal',
            'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
            'rapat.hasil', 'rapat.id  AS id_rapat'
        ]);

        return view('Pengurus.ListDivisi',compact('dtrapat',));
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
        Absensi::create([
            'id_anggota' => $request->id_anggota,
            'id_rapat' => $request->id_rapat,
            'status_kehadiran' => $request->status_kehadiran
        ]);
        return redirect('pengurus')->with('success', 'Presensi berhasil disimpan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // dd($request->all());
        $dtrapat = DB::table('rapat')
        ->where('id','=',$request->id)
        ->get([ 
            'rapat.tanggal','rapat.topik','rapat.id  AS id_rapat'
        ]);

        $dtanggota = DB::table('anggota')
        ->where('id','=', Auth::guard('anggota')->user()->id)
        ->get([
            'id','no_himpunan'
        ]);
        return view('Pengurus.TakeAbsensi',compact('dtrapat','dtanggota'));
    }

    public function detail($id)
    {
        $detailrapat = DB::table('rapat')
            ->join('divisi', 'divisi.id', '=', 'rapat.id_divisi')
            ->where('rapat.id', '=', $id)
            ->get([
                'divisi.id', 'divisi.nama_divisi', 'rapat.tanggal',
                'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
                'rapat.hasil', 'rapat.id  AS id_rapat'
            ]);
        
        $kehadiran = DB::table('absensi')
        ->join('anggota','anggota.id','=','absensi.id_anggota')
        ->join('rapat','rapat.id','=','absensi.id_rapat')
        ->where('rapat.id','=',$id)
        ->get([
            'anggota.nama','absensi.status_kehadiran'
        ]);
        return view('Pengurus.DetailNotulen', compact('detailrapat','kehadiran'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
