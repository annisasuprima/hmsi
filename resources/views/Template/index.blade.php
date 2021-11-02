<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
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
    <link href="{{asset('focus/assets/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
                    <li class="label">Main</li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard</a>
                    </li>
                    <li class="label">Apps</li>
                    <li>
                        <a href="{{route('divisi')}}"><i class="ti-view-list-alt"></i> Divisi</a>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-plus"></i> Open Recruitment <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Form OR</a></li>
                            <li><a href="{{route('lihat-peserta')}}">Daftar Peserta OR</a></li>
                            <li><a href="/laporan-hasil">Laporan Hasil OR</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-id-badge"></i> Akun Anggota <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('create-anggota')}}">Tambah Akun</a></li>
                            <li><a href="{{route('list-anggota')}}">Daftar Akun</a></li>
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
                    <li><a><i class="ti-power-off"></i> Logout</a></li>

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
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                <h1>Hello, <span>Anda Berada di Halaman @yield('sapaan')</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">@yield('submenu')</li>
                                    <li class="breadcrumb-item active">@yield('submenu2')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                @yield('container')
                                <!-- Isi halaman website disisni -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- JS Grid Scripts Start-->
    <script src="{{asset('focus/assets/js/lib/jsgrid/db.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/jsgrid.core.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/jsgrid.load-indicator.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/jsgrid.load-strategies.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/jsgrid.sort-strategies.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/jsgrid.field.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/fields/jsgrid.field.text.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/fields/jsgrid.field.number.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/fields/jsgrid.field.select.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/fields/jsgrid.field.checkbox.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/fields/jsgrid.field.control.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/jsgrid/jsgrid-init.js')}}"></script>
    <!-- JS Grid Scripts End-->
    <!-- scripit init-->
    <script src="{{asset('focus/assets/js/dashboard2.js')}}"></script>
    <!-- scripit init data tabel FOCUS-->
    <script src="{{asset('focus/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/datatables-init.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <!-- DataTables  & Plugins Admin LTE -->
    <script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Sweet Alert -->
    <script src="{{asset('focus/assets/js/lib/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('focus/assets/js/lib/sweetalert/sweetalert.init.js')}}"></script>
    <!-- Page specific script -->

    <script>
        initSample();
    </script>
</body>

</html>