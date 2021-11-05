<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Peserta_or;


class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
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
=======
        $dtAnggota = Anggota::all();
        $non_anggota = Peserta_or::all();
        return view('Anggota.ListAnggota',compact('dtAnggota', 'non_anggota'));
>>>>>>> f5e4a5b84c7288e9e0ed9ccc88fb20d5ec2bf57e
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $non_anggota = Peserta_or::all();
        $data_agt = Anggota::all();
        return view('Anggota.CreateAnggota', compact('non_anggota', 'data_agt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function store($id)
    {
<<<<<<< HEAD
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
=======
        $non_anggota = Peserta_or::all();
        return view('Anggota.CreateAnggota',compact('non_anggota'));
>>>>>>> f5e4a5b84c7288e9e0ed9ccc88fb20d5ec2bf57e
    }

    //  public function store_peserta(Request $request, $id){
    //     // $non_anggota = Peserta_or::findorfail($id);
    //     $request->validate([
    //         'id_pesertaor' => 'required',
    //     ], [
    //         'id_pesertaor.required' => 'Pilih Nama Peserta OR',
       
    //     ]);

    //     if($request->isMethod('post')){
    //     $request->request->add(['id' => $id]);
    //     Krs::create([
    //         'id' => $request->id,
    //         'id_pesertaor' => $request->id_pesertaor,
    //     ]);
    //     return redirect()->back();
    //     // return view('Anggota.CreateAnggota',compact('non_anggota'));
    //     }
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        $data_anggota = Anggota::findorfail($id);
        return view('Anggota.DetailAnggotaInfo1', compact('data_anggota'));
    }

    public function show2($id)
    {
        $data_anggota = Anggota::findorfail($id);
        return view('Anggota.DetailAnggotaInfo2', compact('data_anggota'));
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
       
        // $krs = Krs::where('id','=',$id, 'AND', 'mahasiswa_id', '=', $mahasiswa_id)->delete();
        // return redirect()->back();
        // $krs =Krs::where('kelas_id', $kelas_id)
        // ->where('mahasiswa_id', $mahasiswa_id)->get();

        // foreach($krs as $krs)
        // {
        // $krs->delete();
        // }
        Anggota::where('id_pesertaor', $id_pesertaor)
        ->delete();
        return redirect()->back();
    }
}
