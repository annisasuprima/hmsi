<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{asset('focus/assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('focus/assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('focus/assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('focus/assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('focus/assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('focus/assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('focus/assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('focus/assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('focus/assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('focus/assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('focus/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>HMSI Unand</span>
                        </a>
                    </div>
                    @if (Str::length(Auth::guard('user')->user()) > 0)
                    <li class="label">Main</li>
                    <li>
                        <a href="{{route('dashboard')}}"><i class="ti-home"></i> Dashboard</a>
                    </li>
                    <li class="label">Apps</li>
                    <li>
                        <a href="{{route('divisi')}}"><i class="ti-view-list-alt"></i> Divisi</a>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-plus"></i> Open Recruitment <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <!-- <li><a href="chart-flot.html">Form OR</a></li> -->
                            <li><a href="{{route('lihat-peserta')}}">Daftar Peserta OR</a></li>
                            <li><a href="{{route('laporan-peserta')}}">Laporan Hasil OR</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-id-badge"></i> Akun Anggota <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('anggota')}}">Daftar Anggota</a></li>
                            <li><a href="{{route('create-anggota')}}">Tambah Akun</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-pencil-alt2"></i> Rapat <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('rapat')}}">List Notulensi</a></li>
                            <li><a href="{{route('create-rapat')}}">Tambah Notulensi</a></li>
                          
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-money"></i> Keuangan <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/kas-masuk">Kas Masuk</a></li>
                            <li><a href="/kas-keluar">Kas Keluar</a></li>
                            <li><a href="/laporan-kas">Laporan Kas</a></li>
                            
                        </ul>
                    </li>
                    @elseif(Str::length(Auth::guard('anggota')->user()) > 0)
                    <li>
                        <a href="{{route('profil')}}"><i class="ti-home"></i> Profil</a>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-money"></i> Keuangan <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/form-bayar">Form Pembayaran</a></li>
                            <li><a href="/riwayat-kas">Riwayat</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('pengurus')}}"><i class="ti-pencil-alt2"></i> Notulensi</a>
                    </li>
                    @endif
                    <li><a href="{{route('logout')}}"><i class="ti-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">
                                    @if (Str::length(Auth::guard('anggota')->user()) > 0)
                                    <a href="{{route('profil')}}">{{ Auth::guard('anggota')->user()->nama }}</a>
                                    @elseif (Str::length(Auth::guard('user')->user()) > 0)
                                    {{ Auth::guard('user')->user()->name }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Divisi</div>
                                        <div class="stat-digit">{{$jml_div}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Pengurus</div>
                                        <div class="stat-digit">{{$jml_agt}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-id-badge color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Peserta OR</div>
                                        <div class="stat-digit">{{$jml_ps}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-marker-alt color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Notulensi</div>
                                        <div class="stat-digit">{{$jml_rapat}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Task</h4>
                                </div>
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i></i><span>22,Dec Publish The Final
                                                            Exam Result</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i></i><span>First Jan Start Our
                                                            School</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i></i><span>Recently Our Maganement
                                                            Programme Start</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i></i><span>Check out some
                                                            Popular courses</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i></i><span>First Jan Start Our
                                                            School</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i></i><span>Connect with one new
                                                            person</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- /# column -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="year-calendar"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="testimonial-widget-one p-17">
                                    <div class="testimonial-widget-one owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> HMSI adalah Himpunan Mahasiswa Sistem Informasi yang berada
                                                    pada jurusan Sistem Informasi yang berfungsi sebagai wadah untuk
                                                    menyalurkan aspirasi, media komunikasi dan informasi, serta pembelajaran
                                                    organisasi untuk pengembangan diri bagi anggotanya. <i class="fa fa-quote-right"></i>
                                                </div>
                                                <img class="testimonial-author-img" src="{{asset('Hmsi/unand.png')}}" alt="" />
                                                <div class="testimonial-author">About HMSI</div>
                                                <div class="testimonial-author-position">hmsi unand
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Merupakan divisi yang bertanggung jawab atas segala kegiatan
                                                    mahasiswa sistem informasi universitas andalas. <i class="fa fa-quote-right"></i>
                                                </div>
                                                <img class="testimonial-author-img" src="{{asset('Hmsi/kms.png')}}" alt="" />
                                                <div class="testimonial-author">Divisi Kemahasiswaan</div>
                                                <div class="testimonial-author-position">Penjelasan Divisi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i>Merupakan divisi yang bertanggung jawab atas segala
                                                    kegiatan hubungan masayarakat sistem informasi universitas
                                                    andalas. <i class="fa fa-quote-right"></i>
                                                </div>
                                                <img class="testimonial-author-img" src="{{asset('Hmsi/humas.png')}}" alt="" />
                                                <div class="testimonial-author">Divisi Humas</div>
                                                <div class="testimonial-author-position">Penjelasan Divisi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Merupakan divisi yang bertanggung jawab atas segala
                                                    kegiatan di kesekretariatan himpunan mahasiswa
                                                    sistem informasi. <i class="fa fa-quote-right"></i>
                                                </div>
                                                <img class="testimonial-author-img" src="{{asset('Hmsi/rtk.png')}}" alt="" />
                                                <div class="testimonial-author">Divisi Rumah Tangga</div>
                                                <div class="testimonial-author-position">Penjelasan Divisi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Merupakan divisi yang bertanggung jawab atas segala
                                                    kegiatan keprofesian dan teknologi informasi pada himpunan
                                                    mahasiswa sistem infomrasi.<i class="fa fa-quote-right"></i>
                                                </div>
                                                <img class="testimonial-author-img" src="{{asset('Hmsi/profit.png')}}" alt="" />
                                                <div class="testimonial-author">Divisi Keprofesian dan IT</div>
                                                <div class="testimonial-author-position">Penjelasan Divisi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Merupakan divisi yang bertanggung jawab atas segala
                                                    kegiatan wirausaha pada himpunan mahasiswa sistem
                                                    informasi. <i class="fa fa-quote-right"></i>
                                                </div>
                                                <img class="testimonial-author-img" src="{{asset('Hmsi/kwu.png')}}" alt="" />
                                                <div class="testimonial-author">Divisi Kewirausahaan</div>
                                                <div class="testimonial-author-position">Penjelasan Divisi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2022 ?? HMSI. </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="{{asset('focus/assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{asset('focus/assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->

    <script src="{{asset('focus/assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/scripts.js')}}"></script>
    <!-- bootstrap -->

    <script src="{{asset('focus/assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/calendar-2/pignose.init.js')}}"></script>

    <script src="{{asset('focus/assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('focus/assets/js/dashboard2.js"></script>
</body>

</html>