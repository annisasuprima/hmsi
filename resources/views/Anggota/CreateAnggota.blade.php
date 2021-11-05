@extends('Template.index')

@section('title','Tambah Anggota')
@section('sapaan','Tambah Anggota')
@section('submenu','Tambah Anggota')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Tambah Anggota HMSI</h2>
        </div>
        <div class="float-right">
            <a href="{{route('list-anggota')}}">
                <button type="button" class="btn btn-success m-b-10 m-l-5">List Anggota</button>
            </a>
        </div>

    </div>


<div class="col-lg-12">
        <form action="#" method="post">
        @csrf
            <select name="id_pesertaor" class="form-select form-select-md" aria-label=".form-select-md example"> 
            <option value="" hidden>-- Pilih Peserta OR --</option>
            @forelse ($non_anggota as $agt)
                <option value="{{$agt->id}}">{{$agt->nim}} - {{$agt->nama}}</option>
            @empty
                <option value="" disabled>Seluruh Mahasiswa Telah Terdaftar</option>
            @endforelse
            </select>
            <button class="btn btn-primary ml-2" type="submit">Tambah Anggota</button>
        </form>

        <div class="col-sm">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Himpunan</th>
                    <th>NIM</th>
                    <th>Nama Anggota</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
                @foreach ($data_agt as $agt)
                <tbody>
                    <tr style="font-size: 16px;">
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $agt->no_himpunan }}</td>
                        <td>{{ $agt->nim }}</td>
                        <td>{{ $agt->nama }}</td>
                        <td>{{ $agt->email }}</td>
                        <td class="text-center">
                        <a href="#" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus {{$agt->nama}} dari anggota?')" data-target="#ModalDelete{{$agt->id_pesertaor}}"><i class="ti-trash"></i></a>                            </td>
                    </tr>
                @include('Anggota.DeleteAnggota')
                </tbody>
                @endforeach
        </table>
    </div>

</div>
@endsection