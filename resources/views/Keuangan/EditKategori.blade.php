@extends('Template.index')

@section('title','Form Pembayaran Kas')
@section('sapaan','Pembayaran Kas')
@section('submenu','Form Pembayaran Kas')
@section('container')
<div class="card-title">
    <h4>Form Pembayaran Kas</h4>
</div>
<div class="card-body">
    <br>
    <div class="basic-form">
        @foreach ($keuangan as $n)
        <form action="{{route('update-kat-keuangan',[$n->id])}}" method="POST" enctype="multipart/form-data">

        @method('PUT')
            {{csrf_field()}}
            <table cellpadding="7">
                <tr>
                    <td width="150px">
                        <label>Kode Kategori</label>
                    </td>
                    <td>
                        <input type="text" name="kategori" value="{{$n->kategori}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama Kategori</label>
                    </td>
                    <td>
                        <input type="text" name="nama_kategori" value="{{$n->nama_kategori}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td width="150px">
                        <label>Keterangan Kategori</label>
                    </td>
                    <td>
                    <select class="form-control" name="ket_kategori">
                            <option selected value="{{$n->ket_kategori}}">{{$n->ket_kategori}}</option>
                           
                            <option value="kas masuk">Kas Masuk</option>
                            <option value="kas keluar">Kas Keluar</option>
                     
                        </select>
                       
                    </td>
                </tr>
               
              
            </table><br>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
        @endforeach
    </div>
</div>
@endsection