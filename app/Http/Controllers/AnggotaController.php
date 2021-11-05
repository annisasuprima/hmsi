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
        ->join('peserta_or','peserta_or.id','=','anggota.id_pesertaor')
        ->get([
            'divisi.id AS id_divisi', 'divisi.nama_divisi','peserta_or.id AS id_pesertaor', 'anggota.id_pesertaor',
            'anggota.nama', 'anggota.password', 'anggota.angkatan',
            'anggota.jabatan', 'anggota.jenis_kelamin', 'anggota.alamat', 
            'anggota.tempat_lahir','anggota.tgl_lahir', 'anggota.email', 
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
        // dd($request->all());
        $div = DB::table('divisi')
        ->where('nama_divisi','=',$request->nama_divisi)
        ->get(['id']);

        foreach ($div as $divisi_id) {
            $data = $divisi_id->id;
        }

        $password = "12345";
        Anggota::create([
            'id_divisi' => $data,
            'id_pesertaor' => $request->id_pesertaor,
            'no_himpunan' => $request->no_himpunan,
            'nama' => $request->nama,
            'password' => $password,
            'jabatan' => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email'  => $request->email,
            'no_hp' => $request->no_hp,
            'angkatan' => $request->angkatan,
            'foto' => $request->foto,
            'cv' => $request->cv,
            'tahun_jabatan' => $request->tahun_jabatan,
            'jenis_keanggotaan' => $request->jenis_keanggotaan,
        ]);

        $status = "lulus";
        $update = DB::table('peserta_or')
        ->where('id', '=', $request->id_pesertaor)
        ->update([
            'status_or' => $status
        ]);
        return redirect('anggota');
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
