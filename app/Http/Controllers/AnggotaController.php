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
        $dtAnggota = Anggota::all();
        $non_anggota = Peserta_or::all();
        return view('Anggota.ListAnggota',compact('dtAnggota', 'non_anggota'));
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
        $non_anggota = Peserta_or::all();
        return view('Anggota.CreateAnggota',compact('non_anggota'));
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
