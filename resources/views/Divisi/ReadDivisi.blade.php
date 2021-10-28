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
            <a href="{{route('create-kelas')}}">
                <button type="button" class="btn btn-success m-b-10 m-l-5">+ Divisi</button>
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
                <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>C/A<sup>1</sup></td>
                </tr>
                <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    <td>C</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode Divisi</th>
                    <th>Nama Divisi</th>
                    <th>Jumlah Anggota</th>
                    <th>Opsi</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
@endsection