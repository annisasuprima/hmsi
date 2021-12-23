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
        <form action="/form-bayar" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <table cellpadding="7">
                <tr>
                    <td width="150px">
                        <label>No Himpunan</label>
                    </td>
                    <td>
                        @foreach ($anggota as $dt)
                        <input type="text" name="no_himpunan" class="form-control input-default" value="{{$dt->no_himpunan}}">
                        <input type="hidden" name="id_anggota" class="form-control input-default" value="{{$dt->id}}">
                        @endforeach
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
                    <td width="150px">
                        <label>Kategori</label>
                    </td>
                    <td>
                        <select class="form-control" name="id_kategori">
                            <option disabled selected>-Pilih Kategori-</option>
                            @foreach ($kategori as $kat)
                            <option value="{{ $kat->id }}">{{$kat->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jumlah</label>
                    </td>
                    <td>
                        <input type="number" name="jumlah" placeholder="Input Jumlah" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Keterangan</label>
                    </td>
                    <td>
                        <input type="text" name="ket" placeholder="Input Keterangan" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bukti Pembayaran</label>
                    </td>
                    <td>
                        <input type="file" name="foto" placeholder="Input Foto" class="form-control input-default ">
                    </td>
                </tr>
            </table><br>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
</div>
@endsection