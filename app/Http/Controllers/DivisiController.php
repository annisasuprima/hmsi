<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDivisi = Divisi::all();
        // $dtDivisi = DB::table('anggota')
        // ->join ('divisi','divisi.id','=','anggota.id_divisi')
        // ->groupBy('anggota.id_divisi')
        // ->get([
        //     'count (anggota.id) AS jumlah_anggota','divisi.kode_divisi',
        //     'divisi.nama_divisi','divisi.ket_divisi'
        // ]);
        return view('Divisi.ReadDivisi',compact('dtDivisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Divisi.CreateDivisi');
    }

    public function store(Request $request)
    {
        $kode_divisi = $request->kode_divisi;
        $div = DB::table('divisi')->where('kode_divisi','=',$kode_divisi)->get();
        $jml = count(collect($div));

        if($jml > 0){
            Alert::error('Error', 'Kode Divisi Sudah Ada');
            return back();
        } else {
            Divisi::create([
                'kode_divisi' => $request->kode_divisi,
                'nama_divisi' => $request->nama_divisi,
                'ket_divisi'  => $request->ket_divisi
            ]);
            return redirect('divisi')->with('success', 'Data berhasil ditambah!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisi = Divisi::findorfail($id);
        return view('Divisi.EditDivisi', compact('divisi'));
    }

    public function update(Request $request, $id)
    {
        $div = Divisi::findorfail($id);
        $div->update($request->all());
        return redirect('divisi')->with('success', 'Data berhasil diedit!');
    }


    public function destroy($id)
    {
        $rapat = Divisi::findorfail($id);
        $rapat->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
