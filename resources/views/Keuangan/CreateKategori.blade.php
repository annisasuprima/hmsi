@extends('Template.index')

@section('title','Form Kategori Keuangan')
@section('sapaan','Kategori Keuangan')
@section('submenu','Form Kategori Keuangan')
@section('container')
<div class="card-title">
    <h4>Form Kategori Keuangan</h4>
</div>
<div class="card-body">
    <br>
    <div class="basic-form">
        <form action="{{route('save-kat-keuangan')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <table cellpadding="7">
            <tr>
                    <td width="150px">
                        <label>Kode Kategori</label>
                    </td>
                    <td>
                        <input type="text" name="kategori" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama Kategori</label>
                    </td>
                    <td>
                        <input type="text" name="nama_kategori" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td width="150px">
                        <label>Keterangan Kategori</label>
                    </td>
                    <td>
                        <select class="form-control" name="ket_kategori">
                            <option disabled selected>-Pilih Kategori-</option>
                           
                            <option value="kas masuk">Kas Masuk</option>
                            <option value="kas keluar">Kas Keluar</option>
                     
                        </select>
                    </td>
                </tr>
              
                
            
            </table><br>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
</div>
@endsection