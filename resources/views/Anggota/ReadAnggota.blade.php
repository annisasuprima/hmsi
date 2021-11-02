@extends('Template.index')

@section('title','Daftar Akun Anggota')
@section('sapaan','Daftar Akun Anggota')
@section('submenu','Daftar Akun Anggota')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Akun Anggota HMSI</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Himpunan</th>
                    <th>NIM</th>
                    <th>Nama Anggota</th>
                    <th>Divisi</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtAnggota as $list)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$list->no_himpunan}}</td>
                    <td>{{$list->nim}}</td>
                    <td>{{$list->nama}}</td>
                    <td>{{$list->nama_divisi}}</td>
                    <td>{{$list->email}}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm m-b-10 m-l-5"><i class="ti-eye"></i></a>
                        <a href="#" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection