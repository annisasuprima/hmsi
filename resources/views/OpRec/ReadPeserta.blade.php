@extends('Template.index')

@section('title','Daftar Peserta OR')
@section('sapaan','Daftar Peserta OR')
@section('submenu','Daftar Peserta OR')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Daftar Peserta OR</h2>
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
            <a href="{{route('create-divisi')}}" class="color-success">
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
                    <th>NIM</th>
                    <th>Nama Anggota</th>
                    <th>Total Nilai</th>
                    <th>Terima/Tolak</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtOr as $view)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$view->nim}}</td>
                    <td>{{$view->nama}}</td>
                    <td>-</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-check"></i></a>
                        <a href="" class="btn btn-danger btn-sm m-b-10 m-l-5"><i class="ti-close"></i></a>
                    </td>
                    <td>
                        <a href="" class="text-warning"><i class="ti-eye"></i></a>
                        <a href="" class="text-success"><i class="ti-pencil"></i></a>
                        <a href="" class="text-danger" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection