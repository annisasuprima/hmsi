<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtrapat = DB::table('rapat')
        ->join('divisi', 'divisi.id', '=', 'rapat.id_divisi')
        ->get([
            'divisi.id', 'divisi.nama_divisi', 'rapat.tanggal',
            'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
            'rapat.hasil', 'rapat.id  AS id_rapat'
        ]);
        return view('Pengurus.ListDivisi',compact('dtrapat'));
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
        return view('Pengurus.TakeAbsensi',compact('dtrapat'));
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
