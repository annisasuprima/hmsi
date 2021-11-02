@extends('Template.index')

@section('title','Detail Anggota')
@section('sapaan','Detail Anggota')
@section('submenu','Detail Anggota')
@section('container')


    <div class="card-title">
        <h4>Informasi Himpunan</h4>
    </div>
    <div class="card-body">
    <form action="{{route('detail-anggota2',$data_anggota->id)}}" method="post"></form>
        <div class="basic-form">
            <ol class="list-group list-group-numbered">

            <div class="row">
                <div class="col-12">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Nama</b></div>
                            {{$data_anggota->nama}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>NIM</b></div>
                            {{$data_anggota->id_pesertaor}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Nomor Himpunan</b></div>
                            {{$data_anggota->no_himpunan}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Divisi</b></div>
                            {{$data_anggota->id_divisi}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Jabatan</b></div>
                            {{$data_anggota->jabatan}} 
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Keanggotaan</b></div>
                            {{$data_anggota->jenis_keanggotaan}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Tahun Jabatan</b></div>
                            {{$data_anggota->tahun_jabatan}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>CV</b></div>
                            {{$data_anggota->cv}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Status</b></div>
                            {{$data_anggota->status}}
                        </div>
                    </li>
                </div>
            </div>
            </ol>
        </div>
        <div class="float-right">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item ">
                    <a class="page-link" href="#" >Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item" disabled>
                    <a class="page-link">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </form>
    </div>
@endsection