<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar HMSI</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('Regist/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Selecao/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('Regist/css/style.css')}}">
</head>

<body>

    <div class="main">
        <div class="container">
            <form action="{{route('save-peserta')}}" method="POST" class="appointment-form" id="appointment-form" enctype="multipart/form-data">
                {{csrf_field()}}
                <h2>Pendaftaran OR HMSI 2021/2022</h2>
                <div class="form-group-1">

                    <div class="mb-3">
                        <label for="nama" class="form-label" style="color: black;">Nama</label>
                        <input type="text" name="nama" id="title" class="form-control input-default " style="font-size: unset;margin-bottom:unset" placeholder="Masukkan Nama" required />


                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label" style="color: black;">NIM</label>
                        <input type="text" name="nim" id="name" class="form-control input-default " style="font-size: unset;margin-bottom:unset" placeholder="Masukkan NIM" maxlength="10" required />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: black;">Email</label>
                        <input type="email" name="email" id="email" class="form-control input-default " style="font-size: unset;margin-bottom:unset" placeholder="Email" required />
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label" style="color: black;">No HP</label>
                        <input type="text" name="no_hp" id="phone_number" class="form-control input-default " style="font-size: unset;margin-bottom:unset" maxlength="12" placeholder="No. HP" required />
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label" style="color: black;">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" style="font-size: unset;margin-bottom:unset">
                            <option disabled selected>-Pilih Jenis Kelamin-</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label" style="color: black;">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control input-default " style="font-size: unset;margin-bottom:unset" placeholder="Alamat" required />
                    </div>

                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label" style="color: black;">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control input-default " style="font-size: unset;margin-bottom:unset" placeholder="tempat_lahir" required />
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label" style="color: black;">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control input-default " style="font-size: unset;margin-bottom:unset" required />

                    </div>



                    <!-- <input type="text" name="no_himpunan" id="no_himpunan" placeholder="Nomor Himpunan" required /> -->

                </div>
                <hr style="color: black;">
                <div class="form-group-2">
                    <h3>Pemilihan Divisi</h3>

                    <div class="mb-3">
                        <label for="angkatan" class="form-label" style="color: black;">Pilih Angkatan</label>
                        <select name="angkatan" class="form-control" style="font-size: unset;margin-bottom:unset">
                            <option disabled selected>-Pilih Angkatan-</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="divis1" class="form-label" style="color: black;">Pilih Divisi 1</label>
                        <select name="divis1" class="form-control" style="font-size: unset;margin-bottom:unset">
                            <option disabled selected>-Pilihan Divisi 1-</option>
                            @foreach ($listdiv as $dt)
                            <option value="{{$dt->nama_divisi}}">{{$dt->nama_divisi}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="alasan1" class="form-label" style="color: black;">Alasan Memilih Divisi 1</label>
                        <textarea type="text" name="alasan1" id="alamat" rows="5" placeholder="Tuliskan alasannya Anda memilih divisi tersebut.." class="form-control input-default " style="font-size: unset;margin-bottom:unset;resize:none" required></textarea>

                    </div>

                    <div class="mb-3">
                        <label for="divis2" class="form-label" style="color: black;">Pilih Divisi 2</label>
                        <select name="divis2" class="form-control" style="font-size: unset;margin-bottom:unset">
                            <option disabled selected>-Pilihan Divisi 2-</option>
                            @foreach ($listdiv as $dt)
                            <option value="{{$dt->nama_divisi}}">{{$dt->nama_divisi}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="alasan2" class="form-label" style="color: black;">Alasan Memilih Divisi 2</label>
                        <textarea type="text" name="alasan2" id="alamat" rows="5"  class="form-control input-default " style="font-size: unset;margin-bottom:unset;resize:none" placeholder="Tuliskan alasannya Anda memilih divisi tersebut.."  required></textarea>

                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label" style="color: black;">Upload Foto</label>
                        <input type="file" name="foto" id="foto" required accept="image/*" class="form-control input-default " style="font-size: unset;margin-bottom:unset" />
                       

                    </div>

                    <div class="mb-3">
                        <label for="cv" class="form-label" style="color: black;">Upload CV</label>
                        <input type="file" name="cv" id="cv" required accept="image/*" class="form-control input-default " style="font-size: unset;margin-bottom:unset"/>

                    </div>

                </div>
                <div class="form-submit">
                    <table>
                        <tr>
                            <td><input type="submit" class="submit" value="Kirim Form Pendaftaran" /></td>
                            <td><input type="reset" class="submit" value="reset"></td>
                        </tr>
                    </table>
                    <a href="{{route('home')}}" class="btn btn-warning btn-rounded m-b-10 m-l-5" style="color:white;background-color: #fc7c1f;">Back to Home</a>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('Regist/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Regist/js/main.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>