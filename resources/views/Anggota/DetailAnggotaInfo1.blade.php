@extends('Template.index')

@section('title','Detail Anggota')
@section('sapaan','Detail Anggota')
@section('submenu','Detail Anggota')
@section('container')


    <div class="card-title">
        <h4>Informasi Pribadi</h4>
    <form action="{{route('detail-anggota1',$data_anggota->id)}}" method="post"></form>
    <div class="card-body">
        <div class="basic-form">
            <ol class="list-group list-group-numbered">

            <div class="row">
                <div class="col-9">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Email</b></div>
                            {{$data_anggota->email}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Nama Lengkap</b></div>
                            {{$data_anggota->nama}}
                        </div>
                    </li>
                </div>
                <div class="col-3">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"></div>
                           <img src="public\focus\focus\images\avatar\1.png" class="img-thumbnail" alt="profil">
                        </div>
                    </li>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Nomor Himpunan</b></div>
                            {{$data_anggota->no_himpunan}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Jenis Kelamin</b></div>
                            {{$data_anggota->jenis_kelamin}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Tempat Lahir</b></div>
                            {{$data_anggota->tempat_lahir}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Tanggal Lahir</b></div>
                            {{ date('d M Y', strtotime($data_anggota->tgl_lahir)) }}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>No.Handphone</b></div>
                            {{$data_anggota->no_hp}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Angkatan</b></div>
                            {{$data_anggota->angkatan}}
                        </div>
                    </li>
                </div>
            </div>
            </ol>
        </div>
        <div class="float-right">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        </form>
    </div>
@endsection