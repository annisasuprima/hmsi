<?php

namespace App\Http\Controllers;
use App\Models\Divisi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Page.login');
    }

    public function daftar()
    {
        $listdiv = DB::table('divisi')
        ->get([
            'id', 'nama_divisi'
        ]);
        return view('Page.daftar', compact('listdiv'));
    }

    public function home()
    {
        return view('Page.homepage');
    }
}
