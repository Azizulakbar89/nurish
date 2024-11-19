<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SD NURISH</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('/assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
    /* Hide the regular nav menu on smaller screens */
    @media (max-width: 2360px) {
        #navmenu {
            display: none;
        }

        /* Show the mobile nav toggle */
        .mobile-nav-toggle {
            display: inline-block;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* Mobile nav menu */
        #mobile-nav {
            display: none;
            background: #f8f9fa;
            padding: 1rem;
        }

        #mobile-nav ul {
            list-style: none;
            padding-left: 0;
        }

        #mobile-nav ul li {
            padding: 0.5rem 0;
        }

        #mobile-nav ul ul {
            display: none;
        }

        #mobile-nav ul .dropdown:hover ul {
            display: block;
        }
    }



    .embed_responsive-wrapper {
        position: relative;
        /* Memungkinkan posisi relatif untuk elemen di dalamnya */
        overflow: hidden;
        /* Menyembunyikan elemen yang melampaui batas */
        padding-bottom: 50%;
        /* Rasio 16:9, sesuaikan jika perlu */
        height: 0;
        /* Mengatur tinggi menjadi 0 untuk menjaga rasio */
    }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto: nurulishlahsdnu@gmail.com">nurulishlahsdnu@gmail.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 31-3984456</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="https://www.tiktok.com/@sd.nu.nurul.ishla?_t=8qe8IxEwnwI&_r=1" class="tiktok"><i
                            class="bi bi-tiktok"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100031928962326" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/sdnunurulishlah/" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/@sdnunurulishlah" class="youtube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center me-auto">
                    <h1 class="sitename">SD NU NURUL ISHLAH GRESIK</h1>
                </a>

                <nav id="navmenu" class="navmenu d-none d-lg-block">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="dropdown"><a href="#"><span>Informasi Sekolah</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="ekstra">Ekstrakurikuler</a></li>
                                <li><a href="fasilitas">Fasilitas Sekolah</a></li>
                                <li><a href="guru">Profil Guru</a></li>
                                <li><a href="mitra">Mitra Sekolah</a></li>
                                <li><a href="prestasi">Prestasi Siswa</a></li>
                                <li><a href="vismis" class="active">Visi Misi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>e-Learning</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="video">Video</a></li>
                                <li><a href="ebook">e-Book</a></li>
                            </ul>
                        </li>
                        <li><a href="Vid">Video Kegiatan</a></li>
                    </ul>
                </nav>

                <!-- Mobile Menu Toggle Button -->
                <i class="mobile-nav-toggle d-lg-none bi bi-list" onclick="toggleMobileMenu()"></i>
            </div>
        </div>

        <!-- Mobile Menu -->
        <nav id="mobile-nav" class="d-lg-none">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li class="dropdown"><a href="#"><span>Informasi Sekolah</span></a>
                    <ul>
                        <li><a href="ekstra">Ekstrakurikuler</a></li>
                        <li><a href="fasilitas">Fasilitas Sekolah</a></li>
                        <li><a href="guru">Profil Guru</a></li>
                        <li><a href="mitra">Mitra Sekolah</a></li>
                        <li><a href="prestasi">Prestasi Siswa</a></li>
                        <li><a href="vismis" class="active">Visi Misi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>e-Learning</span></a>
                    <ul>
                        <li><a href="video">Video</a></li>
                        <li><a href="ebook">e-Book</a></li>
                    </ul>
                </li>
                <li><a href="Vid">Video Kegiatan</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="">
                <div class="container">
                    <h2>Selamat Datang, di SD NU Nurul Ishlah </h2>
                    <h4>Sekolah Prestasi, Mengaji Pasti!</h4>
                    <br></br>
                </div>
            </div><!-- End Carousel Item -->
            @foreach ($fo ->take(2) as $item)
            <div class="carousel-item">
                <img src="{{ asset('storage/gambar/'. $item->gambar) }}" alt="">
                <div class="container">
                    <h2>{{$item->judulfo}}</h2>
                    <p>{{$item->deskripsi}}</p>
                    <br></br>
                </div>
            </div><!-- End Carousel Item -->
            @endforeach

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- /Hero Section -->

    <section id="gallery" class="gallery section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Video Kegiatan</h2>
            <p>Berikut adalah mitra yang bekerja sama dengan SD NURISH</p>
        </div><!-- End Section Title -->

        <div class="container mb-3">
            <form action="{{ route('vid') }}" method="GET" class="d-flex">
                <input type="text" name="cari" placeholder="Cari Judul Kegiatan" class="form-control me-2">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-100">
                @foreach ($vid as $item)
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="gallery-item text-center">
                        <!-- Menambahkan div wrapper untuk embed -->
                        <div class="embed_responsive-wrapper">
                            <x-embed url="{{$item->link}}" class="img-fluid"></x-embed>
                        </div>
                        <h5 class="gallery-title">{{ $item->judul }}</h5> <br>
                        <p class="gallery-description mb-0">{{ $item->deskripsi }}</p>
                    </div>
                </div><!-- End Gallery Item -->
                @endforeach
            </div>
        </div>

        <!-- Kontrol Pagination -->
        <div class="pagination mt-3">
            {{ $vid->links() }}
        </div>
    </section><!-- /Gallery Section -->

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-10 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">SD NU NURUL ISHLAH GRESIK</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>12, Jl. Dr. Wahidin Sudirohusodo No.24, Pedukuhan, Randuagung, Kec. Gresik, Kabupaten Gresik,
                            Jawa Timur 61121</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 31-3984456</span></p>
                        <p><strong>Email:</strong> <span>nurulishlahsdnu@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.tiktok.com/@sd.nu.nurul.ishla?_t=8qe8IxEwnwI&_r=1"><i
                                class="bi bi-tiktok"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100031928962326"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/sdnunurulishlah/"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/@sdnunurulishlah"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">SD NURISH</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://www.youtube.com/@sdnunurulishlah">SD NU NURUL ISHLAH</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
    function toggleMobileMenu() {
        const mobileNav = document.getElementById("mobile-nav");
        mobileNav.style.display = (mobileNav.style.display === "block") ? "none" : "block";
    }
    </script>

</body>

</html>