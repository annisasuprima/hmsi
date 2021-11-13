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
        <form action="/update-kas-masuk/{{$n->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <table cellpadding="7">
                <tr>
                    <td width="150px">
                        <label>No Himpunan</label>
                    </td>
                    <td>
                        <input type="text" name="tanggal" value="{{$n->no_himpunan}}" class="form-control input-default ">
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
                    <td>
                        <label>Jumlah</label>
                    </td>
                    <td>
                        <input type="number" name="jumlah" value="{{$n->jumlah_pembayaran}}" class="form-control input-default ">
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
        @endforeach
    </div>
</div>
@endsection