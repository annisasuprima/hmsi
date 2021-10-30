@extends('Template.index')

@section('title','Tambah Akun Anggota')
@section('sapaan','Tambah Akun Anggota')
@section('submenu','Tambah Akun Anggota')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Tambah Akun Anggota HMSI</h2>
        </div>
        <div class="float-right">
            <a href="{{route('list-akun')}}">
                <button type="button" class="btn btn-success m-b-10 m-l-5">List Anggota</button>
            </a>
        </div>

    </div>
    <div>
            <!-- <form action=" ..... " method="post"> -->
                @csrf
                <select name="mahasiswa_id" class="form-select form-select-md" aria-label=".form-select-md example"> 
                <option value="" hidden>-- Pilih Peserta OR --</option>
                </select>
                <button class="btn btn-primary ml-2" type="submit">Tambah Peserta</button>
            <!-- </form> -->
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