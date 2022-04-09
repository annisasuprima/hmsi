<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = DB::table('anggota')
        ->where('id','=', Auth::guard('anggota')->user()->id)
        ->get(
            'id_divisi'
        );

        foreach ($anggota as $divisi) {
            $dt_divisi = $divisi->id_divisi;
        }

        $dtrapat = DB::table('rapat')
        ->where('id_divisi','=',$dt_divisi)
        ->join('divisi', 'divisi.id', '=', 'rapat.id_divisi')
        ->get([
            'divisi.id', 'divisi.nama_divisi', 'rapat.tanggal',
            'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
            'rapat.hasil', 'rapat.id  AS id_rapat'
        ]);

        return view('Pengurus.ListDivisi',compact('dtrapat',));
    }

    public function listabsen()
    {
        $anggota = DB::table('anggota')
        ->where('id', '=', Auth::guard('anggota')->user()->id)
        ->get(
            'id_divisi',
        );
        foreach ($anggota as $dtAnggota) {
            $id_anggota = Auth::guard('anggota')->user()->id;
            $id_divisi = $dtAnggota->id_divisi;
        }

        // Data Rapat yang sudah aambil absen
        $rapat=DB::table('absensi')
        ->where('id_anggota','=',$id_anggota)
        ->get(['id_rapat']);

        $jml = count(collect($rapat));
        
        if($jml>0){
            foreach($rapat as $rapat2){
                $dtRapat[] = $rapat2->id_rapat;
            }
            $absen = DB::table('rapat')
            ->join('divisi','divisi.id','=','rapat.id_divisi')
            ->join('anggota','anggota.id_divisi','=','divisi.id')
            ->whereNotIn('rapat.id',$dtRapat)
            ->where('divisi.id','=',$id_divisi)
            ->distinct()
            ->get([
                'divisi.id', 'divisi.nama_divisi', 'rapat.tanggal',
                'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
                'rapat.hasil', 'rapat.id  AS id_rapat'
            ]);
        } else {
            $absen = DB::table('rapat')
            ->join('divisi', 'divisi.id', '=', 'rapat.id_divisi')
            ->join('anggota', 'anggota.id_divisi', '=', 'divisi.id')
            ->where('divisi.id', '=', $id_divisi)
            ->distinct()
            ->get([
                'divisi.id', 'divisi.nama_divisi', 'rapat.tanggal',
                'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
                'rapat.hasil', 'rapat.id  AS id_rapat'
            ]);
        }

        return view('Pengurus.ListAbsen', compact('absen', ));
    }

    public function store(Request $request)
    {
        Absensi::create([
            'id_anggota' => $request->id_anggota,
            'id_rapat' => $request->id_rapat,
            'status_kehadiran' => $request->status_kehadiran
        ]);
        return redirect('presensi')->with('success', 'Presensi berhasil disimpan!');;
    }

    public function show($id)
    {
        $dtrapat = DB::table('rapat')
        ->where('id','=',$id)
        ->get([ 
            'rapat.tanggal','rapat.topik','rapat.id  AS id_rapat'
        ]);
        $dtanggota = DB::table('anggota')
        ->where('id','=', Auth::guard('anggota')->user()->id)
        ->get([
            'id','no_himpunan'
        ]);
        
        return view('Pengurus.TakeAbsensi',compact('dtrapat','dtanggota'));
    }

    public function detail($id)
    {
        $detailrapat = DB::table('rapat')
            ->join('divisi', 'divisi.id', '=', 'rapat.id_divisi')
            ->where('rapat.id', '=', $id)
            ->get([
                'divisi.id', 'divisi.nama_divisi', 'rapat.tanggal',
                'rapat.waktu_mulai', 'rapat.waktu_selesai', 'rapat.topik',
                'rapat.hasil', 'rapat.id  AS id_rapat'
            ]);
        
        $kehadiran = DB::table('absensi')
        ->join('anggota','anggota.id','=','absensi.id_anggota')
        ->join('rapat','rapat.id','=','absensi.id_rapat')
        ->where('rapat.id','=',$id)
        ->get([
            'anggota.nama','absensi.status_kehadiran'
        ]);
        return view('Pengurus.DetailNotulen', compact('detailrapat','kehadiran'));
    }

    public function formabsen(Request $request)
    {

        $anggota = DB::table('anggota')
        ->where('id', '=', Auth::guard('anggota')->user()->id)
        ->get(
            'id_divisi',
        );
        foreach ($anggota as $dtAnggota) {
            $id_anggota = Auth::guard('anggota')->user()->id;
            $id_divisi = $dtAnggota->id_divisi;
        }


        // dd($request->all());
        $dtrapat = DB::table('rapat')
        ->where('id_divisi', '=', Auth::guard('anggota')->user()->id_divisi)
        ->get([ 
            'rapat.tanggal','rapat.topik','rapat.id  AS id_rapat'
        ]);

        $dtanggota = DB::table('anggota')
        ->where('id','=', Auth::guard('anggota')->user()->id)
        ->get([
            'id','no_himpunan'
        ]);

        $current = Carbon::now();


        return view('Pengurus.TakeAbsen',compact('dtrapat','dtanggota','current'));
    }

    public function simpanabsen(Request $request)
    {
        Absensi::create([
            'id_anggota' => $request->id_anggota,
            'id_rapat' => $request->id_rapat,
            'status_kehadiran' => $request->status_kehadiran
        ]);
        return redirect('presensi')->with('success', 'Presensi berhasil disimpan!');;
    }

}
