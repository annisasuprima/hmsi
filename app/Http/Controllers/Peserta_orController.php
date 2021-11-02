<?php

namespace App\Http\Controllers;

use App\Models\Peserta_or;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Peserta_orController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtOr = Peserta_or::all();
        return view('OpRec.ReadPeserta', compact('dtOr'));
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
        $cv = $request->cv;
        $foto = $request->foto;
        $filecv = $cv->getClientOriginalName();
        $filefoto = $foto->getClientOriginalName();

        Peserta_or::create([
            'nim' => $request->nim,
            'email'  => $request->email,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat,
            'divis1' => $request->divis1,
            'alasan1' => $request->alasan1,
            'divis2' => $request->divis2,
            'alasan2' => $request->alasan2,
            'foto' => $filefoto,
            'cv' => $filecv
        ]);
        // $dtPeserta = new Peserta_or;
        // $dtPeserta->nim = $request->nim;
        // $dtPeserta->email = $request->email;
        // $dtPeserta->jenis_kelamin = $request->jenis_kelamin;
        // $dtPeserta->tempat_lahir = $request->tempat_lahir;
        // $dtPeserta->tgl_lahir = $request->tgl_lahir;
        // $dtPeserta->no_hp = $request->no_hp;
        // $dtPeserta->angkatan = $request->angkatan;
        // $dtPeserta->alamat = $request->alamat;
        // $dtPeserta->divis1 = $request->divis1;
        // $dtPeserta->alasan1 = $request->alasan1;
        // $dtPeserta->divis2 = $request->divis2;
        // $dtPeserta->alasan2 = $request->alasan2;
        // $dtPeserta->cv = $filecv;
        // $dtPeserta->foto = $filefoto;

        $cv->move(public_path().'/PesertaOr/cv',$filecv);
        $foto->move(public_path() . '/PesertaOr/foto', $filefoto);
        
        print('Berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta_or  $peserta_or
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peserta = DB::table('peserta_or')
        ->where('id', '=', $id)
        ->get([
            'id', 'nim', 'email', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir',
            'no_hp', 'angkatan', 'alamat', 'divis1', 'alasan1', 'divis2', 'alasan2', 'foto', 'cv',
            'nilai', 'status_or'
        ]);

        return view('OpRec.DetailPeserta', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta_or  $peserta_or
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta_or $peserta_or)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta_or  $peserta_or
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $id = $request->id;
        $nilai = $request->nilai;
        $update = DB::table('peserta_or')
        ->where('id','=', $id)
        ->update([
            'nilai'=> $nilai
        ]);

        $peserta = DB::table('peserta_or')
        ->where('id', '=', $id)
        ->get([
            'id', 'nim', 'email', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir',
            'no_hp', 'angkatan', 'alamat', 'divis1', 'alasan1', 'divis2', 'alasan2', 'foto', 'cv',
            'nilai', 'status_or'
        ]);
        return view('OpRec.DetailPeserta', compact('peserta'));         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta_or  $peserta_or
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta_or $peserta_or)
    {
        //
    }
}
