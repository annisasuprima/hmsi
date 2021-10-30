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
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SI.X.39.AB</td>
                    <td>1911522017</td>
                    <td>Miftah Mussaumi Adi</td>
                    <td>miftah@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-info">Detail</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SI.X.45.AB</td>
                    <td>1911521011</td>
                    <td>Mutiara Raudhatul Jannah</td>
                    <td>mutiara@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-info">Detail</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SI.X.45.AB</td>
                    <td>1911521011</td>
                    <td>Mutiara Raudhatul Jannah</td>
                    <td>mutiara@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-info">Detail</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nomor Himpunan</th>
                    <th>NIM</th>
                    <th>Nama Anggota</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
@endsection