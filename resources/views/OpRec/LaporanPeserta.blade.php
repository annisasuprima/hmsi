@extends('Template.index')

@section('title','Laporan Kelulusan Peserta OR')
@section('sapaan','Laporan Kelulusan')
@section('submenu','Laporan Kelulusan')
@section('container')
<div class="bootstrap-data-table-panel">
    <div class="table-responsive">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Himpunan</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Divisi Terpilih</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $dt)
                <?php $no = 1; ?>
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$dt->no_himpunan}}</td>
                    <td>{{$dt->nim}}</td>
                    <td>{{$dt->nama}}</td>
                    <td>{{$dt->status_or}}</td>
                    <td>{{$dt->nama_divisi}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection