@extends('Template.index')

@section('title','Rapat')
@section('sapaan','Rapat')
@section('submenu','Rapat')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Data Notuolensi rapat</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Divisi</th>
                    <th>Topik</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtrapat as $tampil)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$tampil->tanggal)->format('d-m-Y')}}</td>
                    <td>{{$tampil->nama_divisi}}</td>
                    <td>{{$tampil->topik}}</td>
                    <td>
                        <a href="{{url('detail-rapat',$tampil->id_rapat)}}" class="btn btn-warning btn-sm m-b-10 m-l-5"><i class="ti-eye"></i></a>
                        <a href="{{url('delete-rapat',$tampil->id_rapat)}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection