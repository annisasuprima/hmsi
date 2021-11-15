@extends('Template.index')

@section('title','Detail Peserta')
@section('sapaan','Detail Peserta Recruitment')
@section('submenu','Detail peserta')
@section('container')
<div class="card-body">
    <a href="{{url('lihat-peserta')}}"><i class="ti-arrow-left"></i> Back</a><br><br>
    <!-- Nav tabs -->
    <div class="vtabs customvtab">
        <ul class="nav nav-tabs tabs-vertical" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Pribadi</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cv" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">CV</span></a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home3" role="tabpanel">
                @foreach ($peserta as $ps)
                <div class="row">
                    <div class="col-lg-8">
                        <div class="user-profile-name">{{$ps->nama}}</div>
                        <div class="user-Location">
                            <i class="ti-user"></i> {{$ps->nim}}
                        </div>
                        <div class="custom-tab user-profile-tab">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="1">
                                    <div class="contact-information">
                                        <h4>Contact information</h4>
                                        <div class="phone-content">
                                            <span class="contact-title">No. Himpunan:</span>
                                            <span class="phone-number">{{$ps->no_himpunan}}</span>
                                        </div>
                                        <div class="phone-content">
                                            <span class="contact-title">Email:</span>
                                            <span class="phone-number">{{$ps->email}}</span>
                                        </div>
                                        <div class="skype-content">
                                            <span class="contact-title">No Hp:</span>
                                            <span class="contact-skype">{{$ps->no_hp}}</span>
                                        </div>
                                        <div class="address-content">
                                            <span class="contact-title">Jenis Kelamin:</span>
                                            <span class="mail-address">{{$ps->jenis_kelamin}}</span>
                                        </div>
                                        <div class="email-content">
                                            <span class="contact-title">Tempat, Tgl Lahir:</span>
                                            <span class="contact-email">{{$ps->tempat_lahir}}, {{$ps->tgl_lahir}}</span>
                                        </div>
                                        <div class="website-content">
                                            <span class="contact-title">Alamat:</span>
                                            <span class="contact-website">{{$ps->alamat}}</span>
                                        </div>
                                    </div>
                                    <div class="basic-information">
                                        <h4>Pilihan Divisi</h4>
                                        <div class="birthday-content">
                                            <span class="contact-title">Divisi 1:</span>
                                            <span class="birth-date">{{$ps->divis1}} </span>
                                        </div>
                                        <div class="gender-content">
                                            <span class="contact-title">Alasan:</span>
                                            <span class="gender">{{$ps->alasan1}}</span>
                                        </div>
                                        <div class="birthday-content">
                                            <span class="contact-title">Divisi 2:</span>
                                            <span class="birth-date">{{$ps->divis2}} </span>
                                        </div>
                                        <div class="gender-content">
                                            <span class="contact-title">Alasan:</span>
                                            <span class="gender">{{$ps->alasan2}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                            <img class="img-fluid" width="200px" height="250px" src="{{asset('Hmsi/foto/'. $ps->foto)}}" alt="" />
                        </div>
                        <div class="user-work">
                            <form action="{{route('nilai-peserta',$ps->id)}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td width="50px"><label>Nilai</label></td>
                                            <td><input type="text" name="id" value="{{$ps->id}}" hidden></td>
                                            <td><textarea name="nilai" class="form-control" style="resize:none;width:60px;height:40px;">{{$ps->nilai}}</textarea></td>
                                            <td><button type="submit" class="btn btn-success btn-sm m-b-10 m-l-5">Input</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  p-20" id="cv" role="tabpanel">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-photo m-b-30">
                            <img class="img-fluid" src="{{asset('Hmsi/cv/'. $ps->cv)}}" width="500px" height="1000px" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('sweetalert::alert')
</div>
@endsection