<?php

namespace App\Http\Controllers;

use App\Models\OpRec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\OpRecController;

class OpRecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPeserta = OpRec::all();
        return view('OpRec.ReadPeserta',compact('dtPeserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpRec  $opRec
     * @return \Illuminate\Http\Response
     */
    public function show(OpRec $opRec)
    {
        $dtPeserta = OpRec::all();
        return view('OpRec.LaporanHasil',compact('dtPeserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpRec  $opRec
     * @return \Illuminate\Http\Response
     */
    public function edit(OpRec $opRec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpRec  $opRec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpRec $opRec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpRec  $opRec
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpRec $opRec)
    {
        //
    }
}
