
@extends('Template.index')

@section('title','Kategori Keuangan')
@section('sapaan','Kategori Keuangan')
@section('submenu','Kategori Keuangan')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Kategori Keuangan</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="float-right">
            <a href="{{route('create-kat-keuangan')}}" class="color-success">
                <button type="button" class="btn btn-success btn-outline m-b-10 m-l-5">+ kategori</button>
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
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan Kategori</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtKategori as $view)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$view->kategori}}</td>
                    <td>{{$view->nama_kategori}}</td>
                    <td>{{$view->ket_kategori}}</td>
                    <td>
                    <a href="{{route('ubah-kat-keuangan',[$view->id])}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>
                        <a href="{{route('delete-kat-keuangan',[$view->id])}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                     </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection