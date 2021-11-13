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
        <form action="{{route('create-kas-masuk')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <table cellpadding="7">
                <tr>
                    <td width="150px">
                        <label>No Himpunan</label>
                    </td>
                    <td>
                        <select class="form-control" name="id_anggota">
                            <option disabled selected>-No Himpunan-</option>
                            @foreach ($anggota as $dt)
                            <option value="{{ $dt->id }}">{{$dt->no_himpunan}}</option>
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
                        <label>Status</label>
                    </td>
                    <td>
                        <select class="form-control" name="status">
                            <option disabled selected>-Pilih Status-</option>
                            <option value="Konfirm">Terkonfirmasi</option>
                            <option value="Tolak">Ditolak</option>
                        </select>
                </tr>
            </table><br>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
</div>
@endsection