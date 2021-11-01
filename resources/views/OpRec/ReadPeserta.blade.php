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
                        <a href="#" data-toggle="modal" data-target="#terima" class="btn btn-success btn-sm m-b-10 m-l-5">
                            <i class="ti-check"></i>
                        </a>
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
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <label class="control-label">Pilih Peletakan Divisi</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="nama_divisi">
                                            <option value="{{$view->divis1}}">{{$view->divis1}}</option>
                                            <option value="{{$view->divis2}}">{{$view->divis2}}</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
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