
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
<div class="bootstrap-data-table-panel">
    <div class="table-responsive">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
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
                            if ($view->ket_kategori == 'kas masuk'){
                                echo $view->jumlah_pembayaran;
                            } 
                            else{
                                echo '-';
                            }                                    
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($view->ket_kategori == 'kas keluar'){
                                echo $view->jumlah_pembayaran;
                            } 
                            else{
                                echo '-';
                            }                                    
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($view->ket_kategori == 'kas masuk'){
                                $total += $view->jumlah_pembayaran;
                                echo $total;
                            } 
                            else if ($view->ket_kategori == 'kas keluar'){
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