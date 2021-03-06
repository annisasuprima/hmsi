<?php

namespace App\Http\Controllers;

use App\Models\Peserta_or;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Peserta_orController extends Controller
{
    public function index()
    {
        $status = "lulus";
        $status2 = "Tidak lulus";
        $lulus = DB::table('peserta_or')
        ->where('status_or', '=', $status)
        ->orWhere('status_or', '=', $status2)
        ->get(['id AS id_pesertaor']);

        $jml = count(collect($lulus));
        if($jml>0){
            foreach ($lulus as $peserta_lulus) {
                $pt_lulus[] = $peserta_lulus->id_pesertaor;
            }
            
            $dtOr = DB::table('peserta_or')
            ->whereNotIn('id',$pt_lulus)
            ->get([
                'id', 'nim', 'email', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir',
                'no_hp', 'angkatan', 'alamat', 'divis1', 'alasan1', 'divis2', 'alasan2', 'foto', 'cv',
                'nilai', 'status_or', 'no_himpunan', 'created_at'
            ]);
        } else {
            $dtOr = Peserta_or::all();
        }
        return view('OpRec.ReadPeserta', compact('dtOr'));
    }

    public function laporan()
    {
        $laporan = DB::table('peserta_or')
        ->leftJoin('anggota','anggota.id_pesertaor','=','peserta_or.id')
        ->leftjoin('divisi','divisi.id','=','anggota.id_divisi')
        ->where('status_or','=','lulus')
        ->orWhere('status_or','=','tidak lulus')
        ->get([
            'peserta_or.no_himpunan','peserta_or.nim','peserta_or.nama',
            'peserta_or.status_or','divisi.nama_divisi'
        ]);
        return view('OpRec.LaporanPeserta', compact('laporan'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $cv = $request->cv;
        $foto = $request->foto;
        // $filecv = $cv->getClientOriginalName();
        // $filefoto = $foto->getClientOriginalName();

        $filefoto= cloudinary()->upload($request->file('foto')->getRealPath())->getSecurePath();
        $filecv= cloudinary()->upload($request->file('cv')->getRealPath())->getSecurePath();

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
            'no_himpunan' => $request->no_himpunan,
            'foto' => $filefoto,
            'cv' => $filecv,
            
        ]);
        // $cv->move(public_path().'/Hmsi/cv',$filecv);
        // $foto->move(public_path() . '/Hmsi/foto', $filefoto);
        
        return back()->with('success', 'Anda sudah berhasil mendaftar');

    }

    public function show($id)
    {
        $peserta = DB::table('peserta_or')
        ->where('id', '=', $id)
        ->get([
            'id', 'nim', 'email', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir',
            'no_hp', 'angkatan', 'alamat', 'divis1', 'alasan1', 'divis2', 'alasan2', 'foto', 'cv',
            'nilai', 'status_or','no_himpunan','created_at'
        ]);

        return view('OpRec.DetailPeserta', compact('peserta'));
    }

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

        return back()->with('success', 'Nilai Berhasil diinputkan!');
    }

    public function tolak(Request $request, $id)
    {
        // dd($request->all());

        $status = "Tidak lulus";
        $update = DB::table('peserta_or')
        ->where('id', '=', $id)
        ->update([
            'status_or' => $status
        ]);
        return back()->with('success', 'Peserta berhasil DITOLAK!');
    }
}
