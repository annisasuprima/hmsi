@extends('Template.index')

@section('title','Divisi')
@section('sapaan','Divisi')
@section('submenu','Divisi')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Data Divisi HMSI</h2>
        </div>
        <div class="float-right">
            <a href="{{route('create-divisi')}}" class="color-success">
                <button type="button" class="btn btn-success btn-outline m-b-10 m-l-5">+ Divisi</button>
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
                    <th>Kode Divisi</th>
                    <th>Nama Divisi</th>
                    <th>Jumlah Anggota</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtDivisi as $tampil)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$tampil->kode_divisi}}</td>
                    <td>{{$tampil->nama_divisi}}</td>
                    <td>-</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm m-b-10 m-l-5"><i class="ti-eye"></i></a>
                        <a href="{{url('edit-divisi',$tampil->id)}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>  
                        <a href="{{url('delete-divisi',$tampil->id)}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection