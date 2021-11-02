@extends('Template.index')

@section('title','Edit Data Anggota')
@section('sapaan','Edit Data Anggota')
@section('submenu','Edit Data Anggota')
@section('container')


    <div class="card-title">
        <h4>Edit Data Anggota</h4>
    <div class="card-body">
        <div class="basic-form">
        <form method="POST" action="{{route('update-anggota',$data_anggota->id)}}" >
        {{csrf_field()}}
            <ol class="list-group list-group-numbered">
            <div class="row">
                <div class="col-9">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Email</b></div>
                            <div class="col-sm">
                                <input type="text" class="form-control input-focus" name="email" value="{{$data_anggota->email}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Nama</b></div>
                            <div class="col-sm">
                                <input type="text" class="form-control input-focus" name="nama" value="{{$data_anggota->nama}}">
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-3">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"></div>
                           <img src="public\focus\focus\images\avatar\1.png" class="img-thumbnail" alt="profil">
                        </div>
                    </li>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>No. Himpunan</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="no_himpunan" value="{{$data_anggota->no_himpunan}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Jenis Kelamin</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="jenis_kelamin" value="{{$data_anggota->jenis_kelamin}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Tempat Lahir</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="email" value="{{$data_anggota->tempat_lahir}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Tanggal Lahir</b></div>
                            <div class="col-sm-6">
                                <input type="date" class="form-control input-focus" name="tgl_lahir" value="{{ $data_anggota->tgl_lahir }}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>No. Handphone</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="no_hp" value="{{$data_anggota->no_hp}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Divisi</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="divisi" value="{{$data_anggota->id_divisi}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Jabatan</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="jabatan" value="{{$data_anggota->jabatan}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Keanggotaan</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="jenis_keanggotaan" value="{{$data_anggota->jenis_keanggotaan}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Tahun Jabatan</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="tahun_jabatan" value="{{$data_anggota->tahun_jabatan}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>Foto</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="foto" value="{{$data_anggota->foto}}">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-sm">
                        <div class="fw-bold"><b>CV</b></div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-focus" name="cv" value="{{$data_anggota->cv}}">
                            </div>
                        </div>
                    </li>
                </div>
            </div>
            </ol>
        </div>  
            <br>
            <a href="{{url('list-anggota')}}" class="btn btn-default btn-rounded m-b-10">Back</a>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
@endsection