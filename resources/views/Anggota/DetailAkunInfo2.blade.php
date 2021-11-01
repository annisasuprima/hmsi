@extends('Template.index')

@section('title','Detail Akun Anggota')
@section('sapaan','Detail Akun Anggota')
@section('submenu','Detail Akun Anggota')
@section('container')


    <div class="card-title">
        <h4>Informasi Himpunan</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <ol class="list-group list-group-numbered">

            <div class="row">
                <div class="col-12">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Nomor Himpunan</b></div>
                            Content.............
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Divisi</b></div>
                            Content.............
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Jabatan</b></div>
                            Content.............
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Keanggotaan</b></div>
                            Content.............
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Tahun Jabatan</b></div>
                            Content.............
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>CV</b></div>
                            Content.............
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><b>Status</b></div>
                            Content.............
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
    </div>
@endsection