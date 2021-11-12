@extends('Template.index')

@section('title','Absensi')
@section('sapaan','Take Absensi')
@section('submenu','Absensi')
@section('container')
<div class="card-title">
    <a href="{{url('pengurus')}}"><i class="ti-arrow-left"></i> Back</a><br><br>
    <h4>Form Penambahan Anggota</h4>
</div>
<div class="card-body">
    <br>
    <div class="table-responsive">
        <form action="" method="POST">
            {{csrf_field()}}
            <table cellpadding="7">
                @foreach ($dtrapat as $dt)
                <tr>
                    <td>
                        <label>Tanggal</label>
                    </td>
                    <td>
                        <input type="text" name="nama" value="{{$dt->tanggal}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Topik</label>
                    </td>
                    <td>
                        <input type="text" name="nim" value="{{$dt->topik}}" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor Himpunan</label>
                    </td>
                    <td>
                        <input type="text" name="no_himpunan" placeholder="Input No.Himpunan" class="form-control input-default ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Status</label>
                    </td>
                    <td>
                        <input type='radio' name='jenis_kelamin' value='Hadir' /> Hadir
                        <input type='radio' name='jenis_kelamin' value='Izin' /> Izin
                        <input type='radio' name='jenis_kelamin' value='Terlambat' /> Terlambat
                        <input type='radio' name='jenis_kelamin' value='Tidak ada keterangan' />Tidak ada keterangan
                    </td>
                </tr>
                @endforeach
            </table><br>
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
        </form>
    </div>
</div>
@endsection