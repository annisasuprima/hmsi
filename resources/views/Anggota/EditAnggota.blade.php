@extends('Template.index')

@section('title','Edit Data Anggota')
@section('sapaan','Edit Data Anggota')
@section('submenu','Edit Data Anggota')
@section('container')
<div class="row">
    <a href="{{url('anggota')}}"><i class="ti-arrow-left"></i> Back</a><br>
</div>
<div class="card-title">
    <br>
    <h4>Form Edit Anggota</h4>
</div>
<div class="card-body">
    <br>
    <div class="basic-form">
        @foreach ($anggota as $agt)
        <form action="{{route('update-anggota',$agt->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <table cellpadding="7">
                <tr>
                    <td width="150px">
                        <label>Pilih Divisi</label>
                    </td>
                    <td>
                        <select class="form-control" name="id_divisi">
                            <option disabled>-Divisi-</option>
                            @foreach ($divisi as $dt)
                            <option value="{{ $dt->id }}">{{$dt->nama_divisi}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama</label>
                    </td>
                    <td>
                        <input type="text" name="nama" placeholder="Input Nama" value="{{$agt->nama}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nim</label>
                    </td>
                    <td>
                        <input type="text" name="nim" placeholder="Input Nim" value="{{$agt->nim}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor Himpunan</label>
                    </td>
                    <td>
                        <input type="text" name="no_himpunan" placeholder="Input No.Himpunan" value="{{$agt->no_himpunan}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Angkatan</label>
                    </td>
                    <td>
                        <input type="text" name="angkatan" placeholder="Input Angkatan (2***)" value="{{$agt->angkatan}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jabatan</label>
                    </td>
                    <td>
                        <select class="form-control" name="jabatan">
                            <option disabled>-Pilih Jabatan-</option>
                            <option value="Ketua Hima">Ketua Hima</option>
                            <option value="Wakil Ketua Hima">Wakil Ketua Hima</option>
                            <option value="Bendahara Umum">Bendahara Umum</option>
                            <option value="Sekretaris Umum">Sekretaris Umum</option>
                            <option value="Ketua Divisi">Ketua Divisi</option>
                            <option value="Sekretaris Divisi">Sekretaris Divisi</option>
                            <option value="Bendahara Divisi">Bendahara Divisi</option>
                            <option value="Anggota Divisi">Anggota Divisi</option>
                        </select>
                </tr>
                <tr>
                    <td>
                        <label>Jenis Keanggotaan</label>
                    </td>
                    <td>
                        <select class="form-control" name="jenis_keanggotaan">
                            <option disabled>-Pilih Keanggotaan-</option>
                            <option value="Anggota Biasa">Anggota Biasa</option>
                            <option value="Anggota Luar Biasa">Anggota Luar Biasa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jenis Kelamin</label>
                    </td>
                    <td>
                        <select class="form-control" name="jenis_kelamin">
                            <option disabled>-Pilih-</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Alamat</label>
                    </td>
                    <td>
                        <input type="text" name="alamat" placeholder="Input Alamat" value="{{$agt->alamat}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tempat Lahir</label>
                    </td>
                    <td>
                        <input type="text" name="tempat_lahir" placeholder="Input Tempat Lahir" value="{{$agt->tempat_lahir}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tanggal Lahir</label>
                    </td>
                    <td>
                        <input type="date" name="tgl_lahir" value="{{$agt->tgl_lahir}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>E-mail</label>
                    </td>
                    <td>
                        <input type="text" name="email" placeholder="Input e-mail" value="{{$agt->email}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor Hp</label>
                    </td>
                    <td>
                        <input type="text" name="no_hp" placeholder="Input No.Handphone (WA)" value="{{$agt->no_hp}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Foto</label>
                    </td>
                    <td>
                        <input type="file" name="foto" placeholder="Input Foto" value="{{$agt->foto}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Upload CV</label>
                    </td>
                    <td>
                        <input type="file" name="cv" value="{{$agt->cv}}" class="form-control input-default ">
                    </td>
                </tr>
                <?php
                $tahun = date('Y');
                ?>
                <input type="text" name="tahun_jabatan" value="{{$tahun}}" hidden>
            </table><br>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
        @endforeach
    </div>
</div>
@endsection