<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtAnggota = DB::table('anggota')
        ->join('divisi', 'divisi.id', '=', 'anggota.id_divisi')
        ->get([
            'divisi.id AS id_divisi', 'divisi.nama_divisi', 'anggota.id_pesertaor',
            'anggota.nim', 'anggota.nama', 'anggota.password',
            'anggota.jabatan', 'anggota.jenis_kelamin', 'anggota.alamat', 
            'anggota.tempat_lahir','anggota.tgl_lahir', 'anggota.email', 'anggota.angkatan',
            'anggota.no_hp','anggota.foto','anggota.cv', 'anggota.no_himpunan',
            'anggota.tahun_jabatan','anggota.jenis_keanggotaan', 'anggota.id  AS id_anggota'
        ]);
        return view('Anggota.ReadAnggota', compact('dtAnggota'));
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
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
