@extends('Template.index')

@section('title','Tambah Rapat')
@section('sapaan','Penambahan Notulensi Rapat')
@section('submenu','Rapat')
@section('container')
<div class="card-title">
    <h4>Edit Data Divisi</h4>
</div>
<div class="card-body">
    <div class="basic-form">
        <form action="{{route('update-divisi',$divisi->id)}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Kode Divisi</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control input-focus" name="kode_divisi" value="{{$divisi->kode_divisi}}">
                </div>
            </div>
            <div class="form-group">
                <label>Nama Divisi</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control input-focus" name="nama_divisi" value="{{$divisi->nama_divisi}}">
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <textarea class="form-control input-focus" rows="3" name="ket_divisi">{{$divisi->ket_divisi}}</textarea>
                </div>
            </div>
            <a href="{{url('divisi')}}" class="btn btn-default btn-rounded m-b-10">Back</a>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
    @endsection