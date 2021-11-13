
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
        <div class="float-left">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
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
                        <a href="/ubah-kas-masuk/{{$view->id}}" class="text-success"><i class="ti-pencil"></i></a>
                        <a href="/delete-kas-masuk/{{$view->id}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection