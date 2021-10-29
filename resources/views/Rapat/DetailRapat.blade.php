@extends('Template.index')

@section('title','Tambah Rapat')
@section('sapaan','Penambahan Notulensi Rapat')
@section('submenu','Rapat')
@section('submenu2','Detail Rapat')
@section('container')
<div class="card-title">
    <h2>Detail Notulensi</h2>
</div>
<div class="row">
    <div class="col-lg-4">
        <table>
            @foreach ($detailrapat as $dt)
            <tr>
                <td width="100px"><strong>Divisi</strong></td>
                <td>:</td>
                <td>{{$dt->nama_divisi}}</td>
            </tr>
            <tr>
                <td><strong>Tanggal</strong></td>
                <td>:</td>
                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$dt->tanggal)->format('d-m-Y')}}</td>
            </tr>
            <tr>
                <td><strong>Waktu</strong></td>
                <td>:</td>
                <td>
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    ?>
                    {{$dt->waktu_mulai}} - {{$dt->waktu_selesai}} WIB
                </td>
            </tr>
            <tr>
                <td><strong>Topik</strong></td>
                <td>:</td>
                <td>{{$dt->topik}}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <br>
        <a href="{{url('rapat')}}" class="btn btn-default btn-rounded m-b-10">Back</a>
        <a href="{{url('edit-rapat',$dt->id_rapat)}}" class="btn btn-success btn-rounded m-b-10">Edit</a>
    </div>
    <div class="col-lg-8">
        <h4>Notulensi : </h4>
        {!! $dt->hasil !!}
    </div>
</div>
@endsection