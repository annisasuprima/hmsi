<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use Illuminate\Support\Facades\DB;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kode_divisi = $request->kode_divisi;
        $div = DB::table('divisi')->where('kode_divisi','=',$kode_divisi)->get();
        $jml = count(collect($div));

        if($jml > 0){
            print("sudah ada kodenya");
        } else {
            Divisi::create([
                'kode_divisi' => $request->kode_divisi,
                'nama_divisi' => $request->nama_divisi,
                'ket_divisi'  => $request->ket_divisi
            ]);
            return redirect('divisi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $div = Divisi::findorfail($id);
        $div->update($request->all());
        return redirect('divisi')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rapat = Divisi::findorfail($id);
        $rapat->delete();
        return back();
    }
}
