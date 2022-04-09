@extends('Template.index')

@section('title','Form Pengeluaran Kas')
@section('sapaan','Pengeluaran Kas')
@section('submenu','Form Pengeluaran Kas')
@section('container')
<div class="card-title">
    <h4>Edit Form Pengeluaran Kas</h4>
</div>
<div class="card-body">
    <br>
    <div class="basic-form">
        @foreach ($keuangan as $n)
        <form action="{{route('update-kas-keluar',[$n->id])}}" method="POST" enctype="multipart/form-data">
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