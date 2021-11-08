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
                    <td><a href="{{url('detail-anggota',$list->id_anggota)}}">{{$no++}}</a></td>
                    <td><a href="{{url('detail-anggota',$list->id_anggota)}}">{{$list->no_himpunan}}</a></td>
                    <td><a href="{{url('detail-anggota',$list->id_anggota)}}">{{$list->nama}}</a></td>
                    <td><a href="{{url('detail-anggota',$list->id_anggota)}}">{{$list->nama_divisi}}</a></td>
                    <td><a href="{{url('detail-anggota',$list->id_anggota)}}">{{$list->email}}</a></td>
                    <td>
                        <a href="{{url('edit-anggota',$list->id_anggota)}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>
                        <a href="{{url('delete-anggota',$list->id_anggota)}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection