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
                        <button type="button" class="btn btn-success btn-sm m-b-10 m-l-5" data-toggle="modal" data-target="#terima"><i class="ti-check"></i></button>
                        <a href="" class="btn btn-danger btn-sm m-b-10 m-l-5"><i class="ti-close"></i></a>
                    </td>
                </tr>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="terima">
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
                                    <div class="row">
                                        <label class="control-label">Pilih Peletakan Divisi</label>
                                        <select class="form-control form-white" name="nama_divisi">
                                            <option slected value="" disabled>-Peletakan Divisi-</option>
                                            <option value="{{$view->divis1}}">{{$view->divis1}}</option>
                                            <option value="{{$view->divis2}}">{{$view->divis2}}</option>
                                        </select>
                                    </div>
                                    <!-- Tahun masuk, dan password (default), jenis_keanggotaan-->
                                    <?php
                                    $daftar = $view->created_at;
                                    $tahun = substr($daftar, 0, 4);
                                    ?>
                                    <input type="text" name="id_pesertaor" value="{{$view->id}}" hidden>
                                    <input type="text" name="no_himpunan" value="{{$view->no_himpunan}}" hidden>
                                    <input type="text" name="nama" value="{{$view->nama}}" hidden>
                                    <input type="text" name="jabatan" value="anggota" hidden>
                                    <input type="text" name="jenis_kelamin" value="{{$view->jenis_kelamin}}" hidden>
                                    <input type="text" name="alamat" value="{{$view->alamat}}" hidden>
                                    <input type="text" name="tempat_lahir" value="{{$view->tempat_lahir}}" hidden>
                                    <input type="text" name="tgl_lahir" value="{{$view->tgl_lahir}}" hidden>
                                    <input type="text" name="email" value="{{$view->email}}" hidden>
                                    <input type="text" name="no_hp" value="{{$view->no_hp}}" hidden>
                                    <input type="text" name="foto" value="{{$view->foto}}" hidden>
                                    <input type="text" name="angkatan" value="{{$view->angkatan}}" hidden>
                                    <input type="text" name="cv" value="{{$view->cv}}" hidden>
                                    <input type="text" name="tahun_jabatan" value="{{$tahun}}" hidden>
                                    <input type="text" name="alamat" value="{{$view->alamat}}" hidden>
                                    <input type="text" name="nim" value="{{$view->nim}}" hidden>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light save-category">Terima</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection