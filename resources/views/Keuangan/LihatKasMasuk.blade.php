@extends('Template.index')

@section('title','Kas Masuk')
@section('sapaan','Kas Masuk')
@section('submenu','Kas Masuk')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Kas Masuk</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="float-right">
            <a href="{{route('create-kas-masuk')}}" class="color-success">
                <button type="button" class="btn btn-success btn-outline m-b-10 m-l-5">+ Entry</button>
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
                    <th>No Himpunan</th>
                    <th>Nama Anggota</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtKasMasuk as $view)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$view->no_himpunan}}</td>
                    <td>{{$view->nama}}</td>
                    <td>{{$view->tanggal_pembayaran}}</td>
                    <td>{{$view->jumlah_pembayaran}}</td>
                    <td>{{$view->status_konfirmasi}}</td>
                    <td>
                        <a href="{{route('ubah-kas-masuk',[$view->id])}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>
                        <a href="{{route('delete-kas-masuk',[$view->id])}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection