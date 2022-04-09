
@extends('Template.index')

@section('title','Kas Keluar')
@section('sapaan','Kas Keluar')
@section('submenu','Kas Keluar')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Kas Keluar</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="float-right">
            <a href="{{route('create-kas-keluar')}}" class="color-success">
                <button type="button" class="btn btn-success btn-outline m-b-10 m-l-5">+ Pengeluaran</button>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtKasKeluar as $view)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$view->keterangan}}</td>
                    <td>{{$view->tanggal_pembayaran}}</td>
                    <td>{{$view->jumlah_pembayaran}}</td>
                    <td>
                    <a href="{{route('ubah-kas-keluar',[$view->id])}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>
                        <a href="{{route('delete-kas-keluar',[$view->id])}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                     </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection