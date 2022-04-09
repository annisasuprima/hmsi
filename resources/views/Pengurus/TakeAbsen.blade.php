
@extends('Template.index')

@section('title','Absensi')
@section('sapaan','Take Absensi')
@section('submenu','Absensi')
@section('container')



<div class="card-title">
  <a href="{{url('pengurus')}}"><i class="ti-arrow-left"></i> Back</a><br><br>
  <h4>Form Take Absensi</h4>
</div>
<div class="card-body">
  <br>
  <div class="table-responsive">
    <form action="{{route('simpanabsen')}}" method="POST">

      {{csrf_field()}}

      <table cellpadding="7">

        <tr>
          <td>
            <label>Tanggal</label>
          </td>
          <td>
            <input type="text" name="nama" value="{{$current}}" disabled class="form-control input-default ">

          </td>
        </tr>
        <tr>
          <td>
            <label>Topik</label>
          </td>
          <td>
            <select name="id_rapat" class="form-control" >
              <option selected>Pilih Topik</option>
              @foreach ($dtrapat as $dtk)
              <option value="{{$dtk->id_rapat}}">{{$dtk->topik}}</option>
              @endforeach
            </select>

        
          </td>
        </tr>
        <tr >
          <td>
            <label>Nomor Himpunan</label>
          </td>
          <td >
            @foreach ($dtanggota as $agt)
            <input type="text" name="no_himpunan" value="{{$agt->no_himpunan}}" class="form-control input-default ">
            <input type="text" name="id_anggota" value="{{$agt->id}}" class="form-control input-default" hidden>
            @endforeach
          </td>

        </tr>
        <tr>
          <td>
            <label>Status</label>
          </td>
          <td style="text-align:unset;"> 
            <input type='radio' name='status_kehadiran' value='Hadir' /> Hadir
            <input type='radio' name='status_kehadiran' value='Izin' /> Izin
            <input type='radio' name='status_kehadiran' value='Tidak Hadir' /> Terlambat
          </td>
        </tr>

      </table><br>
      <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
    </form>
  </div>
</div>
@endsection