@extends('Template.index')

@section('title','List Rapat')
@section('sapaan','Take Absensi')
@section('submenu','Absensi')
@section('container')

@php
$is_alreadyabsensi = count($absen);

@endphp
<div class="row" >
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Data Notulensi rapat</h2>
        </div>
    </div>
</div>

@if($is_alreadyabsensi==0)
<div class="card text-center" style="min-height:48vh;background-color:#6D85FB;">
<div class="card-body" style="display: flex;
justify-content: center;
align-items: center;">
    <p class="card-text" style="font-size: 28px;color:white">Anda Sudah Absen Secara Keseluruhan </p>
</div>
</div>

@else
<div class="row">
    <div class="col-lg-10">
        <div class="table-responsive">
            <table id="row-select" class="display table table-borderd table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Divisi</th>
                        <th>Topik</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($absen as $tampil)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$tampil->tanggal)->format('d-m-Y')}}</td>
                        <td>{{$tampil->nama_divisi}}</td>
                        <td>{{$tampil->topik}}</td>
                        <td>
                            <a href="{{route('absen',[$tampil->id_rapat])}}" class="btn btn-primary btn-rounded btn-sm m-b-5 m-l-5">Absensi</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Divisi</th>

                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


@endif
    @include('sweetalert::alert')
</div>
@endsection