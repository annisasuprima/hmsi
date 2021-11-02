
@extends('Template.index')

@section('title','Laporan Kas')
@section('sapaan','Laporan Kas')
@section('submenu','Laporan Kas')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Laporan Kas</h2>
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
        <div class="float-right">
            <a href="{{route('create-divisi')}}" class="color-success">
                <button type="button" class="btn btn-success btn-outline m-b-10 m-l-5">Print</button>
            </a>
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
                    <th>Kas Masuk</th>
                    <th>Kas Keluar</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; $total = 0; ?>
                @foreach($dtLaporan as $view)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$view->tanggal_pembayaran}}</td>
                    <td>
                        <?php
                            if ($view->id_kategori == '1'){
                                echo $view->jumlah_pembayaran;
                            } 
                            else{
                                echo '-';
                            }                                    
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($view->id_kategori == '2'){
                                echo $view->jumlah_pembayaran;
                            } 
                            else{
                                echo '-';
                            }                                    
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($view->id_kategori == '1'){
                                $total += $view->jumlah_pembayaran;
                                echo $total;
                            } 
                            else if ($view->id_kategori == '2'){
                                $total -= $view->jumlah_pembayaran;
                                echo $total;
                            }                                
                        ?>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection