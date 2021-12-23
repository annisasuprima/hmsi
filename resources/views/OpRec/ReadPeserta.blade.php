@extends('Template.index')

@section('title','Daftar Peserta OR')
@section('sapaan','Daftar Peserta OR')
@section('submenu','Daftar Peserta OR')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Daftar Peserta OR</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Anggota</th>
                    <th>Divisi 1</th>
                    <th>Divisi 2</th>
                    <th>Nilai</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtOr as $view)
                <tr>
                    <td>{{$no++}}</td>
                    <td><a href="{{url('detail-peserta',$view->id)}}">{{$view->nim}}</a></td>
                    <td>{{$view->nama}}</td>
                    <td>{{$view->divis1}}</td>
                    <td>{{$view->divis2}}</td>
                    <td>{{$view->nilai}}</td>
                    <td>
                        <a href="#" id="dtps" class="btn btn-success btn-sm m-b-10 m-l-5" data-toggle="modal" data-target="#terima-{{$view->id}}">
                            <i class="ti-check"></i>
                        </a>
                        <a href="{{url('tolak-peserta',$view->id)}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Tolak Peserta ini?')"><i class="ti-close"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @foreach ($dtOr as $dt)
        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="terima-{{ $dt->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">
                            <strong>Terima</strong>
                        </h4>
                    </div>
                    <form action="{{route('tambah-anggota')}}" method="POST">
                        <div class="modal-body">
                            {{csrf_field()}}
                            <h3>Pilih penempatan divisi</h3><br>
                            <input type="radio" name="nama_divisi" value="{{$dt->divis1}}"> {{$dt->divis1}} <br> <br>
                            <input type="radio" name="nama_divisi" value=" {{$dt->divis2}}"> {{$dt->divis2}}
                            <input type="text" name="id_pesertaor" value="{{$dt->id}}" hidden>
                            <input type="text" name="no_himpunan" value="{{$dt->no_himpunan}}" hidden>
                            <input type="text" name="nama" value="{{$dt->nama}}" hidden>
                            <input type="text" name="jenis_kelamin" value="{{$dt->jenis_kelamin}}" hidden>
                            <input type="text" name="alamat" value="{{$dt->alamat}}" hidden>
                            <input type="text" name="tempat_lahir" value="{{$dt->tempat_lahir}}" hidden>
                            <input type="text" name="tgl_lahir" value="{{$dt->tgl_lahir}}" hidden>
                            <input type="text" name="email" value="{{$dt->email}}" hidden>
                            <input type="text" name="no_hp" value="{{$dt->no_hp}}" hidden>
                            <input type="text" name="foto" value="{{$dt->foto}}" hidden>
                            <input type="text" name="angkatan" value="{{$dt->angkatan}}" hidden>
                            <input type="text" name="cv" value="{{$dt->cv}}" hidden>
                            <input type="text" name="nim" value="{{$dt->nim}}" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success waves-effect waves-light save-category">Terima</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <!-- END MODAL -->
    </div>
    @include('sweetalert::alert')
</div>
@include('sweetalert::alert')
@endsection