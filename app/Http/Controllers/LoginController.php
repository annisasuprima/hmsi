<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/dashboard');
        } else if (Auth::guard('anggota')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/profil');
        }
        Alert::error('Error', 'Username dan Password tidak sesuai');
        return redirect ('/login');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('anggota')->check()) {
            Auth::guard('anggota')->logout();
        } else if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }
        return redirect('/login');
    }

    public function index()
    {
        return view('Page.login');
    }

    public function daftar()
    {
        $inti = DB::table('divisi')
        ->where('id','=', '7')
        ->get();

        foreach ($inti as $data){
            $pd[] = $data->id;
        }

        
        $listdiv = DB::table('divisi')
        ->whereNotIn('id',$pd)
        ->get([
            'id', 'nama_divisi'
        ]);
        return view('Page.daftar', compact('listdiv'));
    }

    public function home()
    {
        return view('Page.homepage');
    }

    public function dashboard()
    {
        $pengurus = DB::table('anggota')->get();
        $jml_agt = count(collect($pengurus));

        $divisi = DB::table('divisi')->get();
        $jml_div = count(collect($divisi));

        $status = null;
        $lulus = DB::table('peserta_or')
        ->where('status_or', '=', $status)
        ->get();
        $jml_ps = count(collect($lulus));

        $rapat = DB::table('rapat')->get();
        $jml_rapat = count(collect($rapat));
        return view('dashboard',compact('jml_agt','jml_ps','jml_rapat','jml_div'));
    }
}
