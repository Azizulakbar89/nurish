<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{asset('assets1/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets1/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets1/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets1/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/admin " class="logo d-flex align-items-center">
                <img src="{{asset('assets1/img/logo.png')}}" alt="">
                <span class="d-none d-lg-block">NurishAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Informasi Sekolah</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/ekstra">
                            <i class="bi bi-circle"></i><span>Ekstrakurikuler</span>
                        </a>
                    </li>
                    <li>
                        <a href="/fas">
                            <i class="bi bi-circle"></i><span>Fasilitas Sekolah</span>
                        </a>
                    </li>
                    <li>
                        <a href="/guru">
                            <i class="bi bi-circle"></i><span>Guru</span>
                        </a>
                    </li>
                    <li>
                        <a href="/mitra">
                            <i class="bi bi-circle"></i><span>Mitra Sekolah</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prestasi">
                            <i class="bi bi-circle"></i><span>Prestasi Siswa</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>e-Learning</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/vide">
                            <i class="bi bi-circle"></i><span>Video</span>
                        </a>
                    </li>
                    <li>
                        <a href="/bok">
                            <i class="bi bi-circle"></i><span>e-Book</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Kegiatan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/keg">
                            <i class="bi bi-circle"></i><span>Video</span>
                        </a>
                    </li>
                    <li>
                        <a href="/fo">
                            <i class="bi bi-circle"></i><span>Foto Kegiatan</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="nav-link collapsed">logout</button>
                </form>
                </a>
            </li><!-- End Profile Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets1/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets1/vendor/chart.js')}}/chart.umd.js')}}"></script>
    <script src="{{asset('assets1/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets1/vendor/quill/quill.js')}}"></script>
    <script src="{{asset('assets1/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets1/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets1/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets1/js/main.js')}}"></script>


</body>

</html>