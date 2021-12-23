<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar HMSI</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('Regist/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

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
                    <input type="text" name="nama" id="title" placeholder="Masukkan Nama" required />
                    <input type="text" name="nim" id="name" placeholder="Masukkan NIM" maxlength="10" required />
                    <input type="text" name="no_himpunan" id="no_himpunan" placeholder="Nomor Himpunan" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="text" name="no_hp" id="phone_number" maxlength="12" placeholder="No. HP" required />
                    <div class="select-list">
                        <select name="jenis_kelamin">
                            <option disabled selected>-Jenis Kelamin-</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat" required />
                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" required />
                    <table>
                        <tr>
                            <td><input type="text" placeholder="Tanggal Lahir :" readonly /></td>
                            <td><input type="date" name="tgl_lahir" id="tgl_lahir" required /></td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="form-group-2">
                    <h3>Pemilihan Divisi</h3>
                    <div class="select-list">
                        <select name="angkatan">
                            <option slected value="">-Angkatan-</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>
                    <table>
                        <tr>
                            <td width="150px">
                                <div class="select-list">
                                    <select name="divis1">
                                        <option seleected value="">-Pilihan Divisi 1-</option>
                                        @foreach ($listdiv as $dt)
                                        <option value="{{$dt->nama_divisi}}">{{$dt->nama_divisi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <textarea name="alasan1" id="alamat" cols="35" rows="5" style="resize:none;" placeholder="Tuliskan alasannya Anda memilih divisi tersebut.."></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="select-list">
                                    <select name="divis2">
                                        <option seleected value="">-Pilihan Divisi 2-</option>
                                        @foreach ($listdiv as $dt)
                                        <option value="{{$dt->nama_divisi}}">{{$dt->nama_divisi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <textarea name="alasan2" id="alamat" cols="35" rows="5" style="resize:none;" placeholder="Tuliskan alasannya Anda memilih divisi tersebut.."></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Upload Foto" readonly required /></td>
                            <td><input type="file" name="foto" id="foto" required accept="image/*" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Upload cv" readonly required /></td>
                            <td><input type="file" name="cv" id="cv" required accept="image/*" /></td>
                        </tr>
                    </table>
                </div>
                <div class="form-submit">
                    <table>
                        <tr>
                            <td><input type="submit" class="submit" value="Kirim Form Pendaftaran" /></td>
                            <td><input type="reset" class="submit" value="reset"></td>
                        </tr>
                    </table>
                    <a href="{{route('home')}}">Back to Home</a>
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