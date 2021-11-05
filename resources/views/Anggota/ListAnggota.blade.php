@extends('Template.index')

@section('title','Daftar Anggota')
@section('sapaan','Daftar Anggota')
@section('submenu','Daftar Anggota')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2> Anggota HMSI</h2>
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
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
                @foreach($dtAnggota as $tampil)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$tampil->no_himpunan}}</td>
                    <td>{{$tampil->id_pesertaor}}</td>
                    <td>{{$tampil->nama}}</td>
                    <td>{{$tampil->email}}</td>
                    <td>
                        <a href="{{url('detail-anggota1',$tampil->id)}}" class="btn btn-warning btn-sm m-b-10 m-l-5"><i class="ti-eye"></i></a>
                        <a href="{{url('edit-anggota',$tampil->id)}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>  
                        <a href="{{url('delete-anggota',$tampil->id)}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection