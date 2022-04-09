<?php

namespace App\Http\Controllers;

use App\Models\Rapat;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RapatController extends Controller
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
            'rapat.hasil','rapat.id  AS id_rapat'
        ]);
        return view('Rapat.ReadRapat', compact('dtrapat'));
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
        return view('Rapat.CreateRapat', compact('divisi'));
    }

    public function store(Request $request)
    {
        Rapat::create([
            'id_divisi'     => $request->id_divisi,
            'tanggal'       => $request->tanggal,
            'waktu_mulai'   => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'topik'         => $request->topik,
            'hasil'         => $request->hasil
        ]);
        return redirect('rapat')->with('success', 'Notulensi berhasil ditambahkan');
    }


    public function show($id)
    {
        $detailrapat = DB::table('rapat')
        ->join('divisi', 'divisi.id', '=', 'rapat.id_divisi')
        ->where('rapat.id','=',$id)
        ->get([
            'divisi.id','divisi.nama_divisi', 'rapat.tanggal',
            'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
            'rapat.hasil','rapat.id  AS id_rapat',
        ]);

        $kehadiran = DB::table('absensi')
        ->join('anggota','anggota.id','=','absensi.id_anggota')
        ->join('rapat','rapat.id','=','absensi.id_rapat')
        ->where('rapat.id','=',$id)
        ->get([
            'anggota.nama','absensi.status_kehadiran'
        ]);

        return view('Rapat.DetailRapat',compact('detailrapat','kehadiran'));

    }

    public function edit($id)
    {
        $rapat = DB::table('rapat')
        ->rightJoin('divisi', 'divisi.id', '=', 'rapat.id_divisi')
        ->where('rapat.id', '=', $id)
        ->get([
            'divisi.id AS id_divisi', 'divisi.nama_divisi', 'rapat.tanggal',
            'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
            'rapat.hasil', 'rapat.id  AS id_rapat'
        ]);
        $divisi = DB::table('divisi')
        ->get(['id', 'nama_divisi']);
        return view ('Rapat.EditRapat',compact('rapat','divisi'));
    }

    public function update(Request $request, $id)
    {
        $rapat = Rapat::findorfail($id);
        $rapat->update($request->all());
        return redirect('rapat')->with('success', 'Rapat berhasil diedit!');
    }

    public function destroy($id)
    {
        $rapat = Rapat::findorfail($id);
        $rapat->delete();
        return redirect('rapat')->with('success', 'Rapat berhasil dihapus!');
    }
}
