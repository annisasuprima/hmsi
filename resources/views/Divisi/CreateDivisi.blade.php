@extends('Template.index')

@section('title','Tambah Divisi')
@section('sapaan','Penambahan Divisi')
@section('submenu','Divisi')
@section('container')
<div class="card-title">
    <h4>Form Penambahan Divisi</h4>
</div>
<div class="card-body">
    <div class="basic-form">
        <form>
            <div class="form-group">
                <label>Kode Divisi</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control input-focus" placeholder="Input kode divisi">
                </div>
            </div>
            <div class="form-group">
                <label>Nama Divisi</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control input-focus" placeholder="Input nama divisi">
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <textarea class="form-control input-focus" rows="3" placeholder="Keterangan divisi"></textarea>
                </div>
            </div>
            <div class="row">

            </div>
            <a href="{{url('divisi')}}" class="btn btn-default btn-rounded m-b-10">< Back</a>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
    @endsection