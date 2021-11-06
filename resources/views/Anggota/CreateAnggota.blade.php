@extends('Template.index')

@section('title','Tambah Anggota')
@section('sapaan','Penambahan Anggota')
@section('submenu','Tambah Anggota')
@section('container')
<div class="card-title">
    <h4>Form Penambahan Anggota</h4>
</div>
<div class="card-body">
    <br>
    <div class="basic-form">
        <form action="{{route('save-divisi')}}" method="POST">
            {{csrf_field()}}
            <table>
                <tr>
                    <td width="150px">
                        <label>Pilih Divisi</label>
                    </td>
                    <td>
                        <select class="form-control" name="id_divisi">
                            <option disabled>-Divisi-</option>
                            @foreach ($divisi as $dt)
                            <option value="{{ $dt->id }}">{{$dt->nama_divisi}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tanggal</label>
                    </td>
                    <td>
                        <input type="date" name="tanggal" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Waktu Mulai</label>
                    </td>
                    <td>
                        <input type="time" name="waktu_mulai" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Waktu Selesai</label>
                    </td>
                    <td>
                        <input type="time" name="waktu_selesai" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Topik</label>
                    </td>
                    <td>
                        <input type="text" name="topik" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Hasil Rapat</label>
                    </td>
                    <td></td>
                </tr>
            </table>
            <div class="form-group">
                <label>Pilih Divisi</label>
                <div class="col-sm-4">
                    <select class="form-control" name="id_divisi">
                        <option disabled>-Pilih Divisi-</option>
                        @foreach ($divisi as $dt)
                        <option value="{{ $dt->id }}">{{$dt->nama_divisi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Nama Divisi</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control input-focus" name="nama_divisi" placeholder="Input nama divisi">
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <textarea class="form-control input-focus" rows="3" name="ket_divisi" placeholder="Keterangan divisi"></textarea>
                </div>
            </div>
            <a href="{{url('divisi')}}" class="btn btn-default btn-rounded m-b-10">Back</a>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
</div>
@endsection