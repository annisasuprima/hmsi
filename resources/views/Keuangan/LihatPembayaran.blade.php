
@extends('Template.index')

@section('title','Riwayat Pembayaran')
@section('sapaan','Riwayat Pembayaran')
@section('submenu','Riwayat Pembayaran')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Riwayat Pembayaran</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtRiwayat as $view)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$view->tanggal_pembayaran}}</td>
                    <td>{{$view->jumlah_pembayaran}}</td>
                    <td>{{$view->status_konfirmasi}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection