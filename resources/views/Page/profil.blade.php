@extends('Template.index')

@section('title','Tambah Rapat')
@section('sapaan','Penambahan Notulensi Rapat')
@section('submenu','Rapat')
@section('container')
<div class="card-body">
    <!-- Nav tabs -->
    <div class="vtabs customvtab">
        <ul class="nav nav-tabs tabs-vertical" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Pribadi</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Himpunan</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cv" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">CV</span></a> </li>
        </ul>
        <!-- Tab panes -->
        @foreach ($dtAnggota as $detail)
        <div class="tab-content">
            <div class="tab-pane active" id="home3" role="tabpanel">
                <div class="p-20">
                    <div class="row">
                        <div class="col-lg-9">
                            <div role="tabpanel" class="tab-pane active" id="1">
                                <div class="contact-information">
                                    <h4>Informasi Pribadi</h4>
                                    <div class="website-content">
                                        <span class="contact-title">Nomor Himpunan</span>
                                        <span class="contact-website">{{$detail->no_himpunan}}</span>
                                    </div>
                                    <div class="phone-content">
                                        <span class="contact-title">Nama Lengkap</span>
                                        <span class="phone-number">{{$detail->nama}}</span>
                                    </div>
                                    <div class="address-content">
                                        <span class="contact-title">Nim</span>
                                        <span class="mail-address">{{$detail->nim}}</span>
                                    </div>
                                    <div class="email-content">
                                        <span class="contact-title">Email</span>
                                        <span class="contact-email">{{$detail->email}}</span>
                                    </div>
                                    <div class="skype-content">
                                        <span class="contact-title">Nomor Handphone</span>
                                        <span class="contact-skype">{{$detail->no_hp}}</span>
                                    </div>
                                    <div class="skype-content">
                                        <span class="contact-title">Jenis Kelamin</span>
                                        <span class="contact-skype">{{$detail->jenis_kelamin}}</span>
                                    </div>
                                    <div class="skype-content">
                                        <span class="contact-title">Tempat Lahir</span>
                                        <span class="contact-skype">{{$detail->tempat_lahir}}</span>
                                    </div>
                                    <div class="skype-content">
                                        <span class="contact-title">Tanggal Lahir</span>
                                        <span class="contact-skype">{{$detail->tgl_lahir}}</span>
                                    </div>
                                    <div class="skype-content">
                                        <span class="contact-title">Angkatan</span>
                                        <span class="contact-skype">{{$detail->angkatan}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="user-photo m-b-30">
                                <img class="img-fluid" src="{{asset('Hmsi/foto/'. $detail->foto)}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  p-20" id="profile3" role="tabpanel">
                <div class="row">
                    <div class="col-lg-9">
                        <div role="tabpanel" class="tab-pane active" id="1">
                            <div class="contact-information">
                                <h4>Informasi Himpunan</h4>
                                <div class="phone-content">
                                    <span class="contact-title">Nomor Himpunan</span>
                                    <span class="phone-number">{{$detail->no_himpunan}}</span>
                                </div>
                                <div class="address-content">
                                    <span class="contact-title">Nama Lengkap</span>
                                    <span class="mail-address">{{$detail->nama}}</span>
                                </div>
                                <div class="email-content">
                                    <span class="contact-title">Divisi</span>
                                    <span class="contact-email">{{$detail->nama_divisi}}</span>
                                </div>
                                <div class="website-content">
                                    <span class="contact-title">Jabatan</span>
                                    <span class="contact-website">{{$detail->jabatan}}</span>
                                </div>
                                <div class="skype-content">
                                    <span class="contact-title">Keanggotaan</span>
                                    <span class="contact-skype">{{$detail->jenis_keanggotaan}}</span>
                                </div>
                                <div class="skype-content">
                                    <span class="contact-title">Tahun Jabatan</span>
                                    <span class="contact-skype">{{$detail->tahun_jabatan}}</span>
                                </div>
                                <div class="skype-content">
                                    <span class="contact-title">CV</span>
                                    <span class="contact-skype"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="user-photo m-b-30">
                            <img class="img-fluid" src="{{asset('Hmsi/foto/'. $detail->foto)}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  p-20" id="cv" role="tabpanel">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-photo m-b-30">
                            <img class="img-fluid" src="{{asset('Hmsi/cv/'. $detail->cv)}}" width="500px" height="1000px" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection