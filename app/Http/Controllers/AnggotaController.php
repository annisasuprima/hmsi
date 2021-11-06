<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Peserta_or;
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
            'divisi.id AS id_divisi', 'divisi.nama_divisi','anggota.nama', 'anggota.email',
            'anggota.no_himpunan','anggota.id  AS id_anggota'
        ]);
        return view('Anggota.ReadAnggota', compact('dtAnggota'));
        
        // $dtAnggota = Anggota::all();
        // $non_anggota = Peserta_or::all();
        // return view('Anggota.ListAnggota',compact('dtAnggota', 'non_anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi = DB::table('divisi')
        ->get(['id', 'nama_divisi']);
        return view('Anggota.CreateAnggota',compact ('divisi'));
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

        $keanggotaan = "Anggota Biasa";
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
            'jenis_keanggotaan' => $keanggotaan,
            'nim' => $request->nim
        ]);

        $status = "lulus";
        $update = DB::table('peserta_or')
        ->where('id', '=', $request->id_pesertaor)
        ->update([
            'status_or' => $status
        ]);

        return view('OpRec.ReadPeserta');
    }

     public function save(Request $request){

        $cv = $request->cv;
        $foto = $request->foto;
        $filecv = $cv->getClientOriginalName();
        $filefoto = $foto->getClientOriginalName();

        $keanggotaan = "Anggota Biasa";
        $password = "12345";

        Anggota::create([
            'id_divisi' => $request->id_divisi,
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
            'foto' => $filefoto,
            'cv' => $filecv,
            'tahun_jabatan' => $request->tahun_jabatan,
            'jenis_keanggotaan' => $keanggotaan,
            'nim' => $request->nim
        ]);

        $cv->move(public_path() . '/Hmsi/cv', $filecv);
        $foto->move(public_path() . '/Hmsi/foto', $filefoto);

        return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtAnggota = DB::table('anggota')
        ->join('divisi', 'divisi.id', '=', 'anggota.id_divisi')
        ->where('anggota.id','=',$id)
        ->get([
            'divisi.id AS id_divisi', 'divisi.nama_divisi', 'nim',
            'anggota.id_pesertaor', 'anggota.nama', 'anggota.password',
            'anggota.angkatan', 'anggota.jabatan', 'anggota.jenis_kelamin', 'anggota.alamat',
            'anggota.tempat_lahir', 'anggota.tgl_lahir', 'anggota.email',
            'anggota.no_hp', 'anggota.foto', 'anggota.cv', 'anggota.no_himpunan',
            'anggota.tahun_jabatan', 'anggota.jenis_keanggotaan', 'anggota.id  AS id_anggota'
        ]);
        return view('Anggota.DetailAnggota', compact('dtAnggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_anggota = Anggota::findorfail($id);
        return view('Anggota.EditAnggota', compact('data_anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_anggota = Anggota::findorfail($id);
        $data_anggota->update($request->all());
        return redirect('list-anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::findorfail($id);
        $anggota->delete();
        return back();
    }


    public function hapus_anggota($id_pesertaor)
    {
        Anggota::where('id_pesertaor', $id_pesertaor)
        ->delete();
        return redirect()->back();
    }
}
