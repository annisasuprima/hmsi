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
        <form action="{{route('update-kas-masuk',[$n->id])}}" method="POST" enctype="multipart/form-data">

        @method('PUT')
            {{csrf_field()}}
            <table cellpadding="7">
                <tr>
                    <td width="150px">
                        <label>No Himpunan</label>
                    </td>
                    <td>
                        <input type="text" name="no_himpunan" value="{{$n->no_himpunan}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tanggal</label>
                    </td>
                    <td>
                        <input type="date" name="tanggal" value="{{$n->tanggal_pembayaran}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td width="150px">
                        <label>Kategori</label>
                    </td>
                    <td>
                        @foreach ($kt as $kategori)
                        <input type="text" name="kategori" value="{{$kategori->nama_kategori}}" class="form-control input-default ">
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jumlah</label>
                    </td>
                    <td>
                        <input type="number" name="jumlah" value="{{$n->jumlah_pembayaran}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bukti Pembayaran</label>
                    </td>
                    <td>
                        <img src="{{($n->bukti_pembayaran)}}" width="200px" />
                        <input type="file" name="bukti_pembayaran" placeholder="Input Foto" value="{{$n->bukti_pembayaran}}" class="form-control input-default " accept="image/*">
                        <input type="hidden" id="hidden_image" name="hidden_image_foto" value="{{$n->bukti_pembayaran}}">
                    </td>

                 
                </tr>
                <tr>
                    <td>
                        <label>Keterangan</label>
                    </td>
                    <td>
                        <input type="text" name="ket" value="{{$n->keterangan}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Status</label>
                    </td>
                    <td>
                        <select class="form-control" name="status">
                            <option selected  value="{{$n->status_konfirmasi}}">{{$n->status_konfirmasi}}</option>
                            <option value="Konfirm">Konfirm</option>
                            <option value="Tolak">Tolak</option>
                        </select>
                </tr>
            </table><br>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
        @endforeach
    </div>
</div>
@endsection