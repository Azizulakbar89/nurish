<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HOME - SD NURISH</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{asset('assets1/img/favicon.jpg')}}" rel="icon">
    <link href="{{asset('assets1/img/apple-touch-icon.jpg')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
    /* Gaya umum untuk navbar mobile */
    #mobile-nav {
        display: none;
        /* Sembunyikan navbar mobile secara default */
    }

    .mobile-nav-toggle {
        display: inline-block;
        cursor: pointer;
        font-size: 1.5rem;
    }

    /* Gaya navbar desktop */
    #navmenu {
        display: block;
        /* Tampilkan navbar desktop secara default */
    }

    /* Media query untuk tampilan mobile (max-width 1024px) */
    @media (max-width: 1024px) {
        #navmenu {
            display: none;
            /* Sembunyikan navbar desktop pada layar kecil */
        }

        #mobile-nav {
            display: block;
            /* Tampilkan navbar mobile */
            background: #ffffff;
            /* Warna latar belakang */
            padding: 0.5rem;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 1000;
            /* Pastikan di atas elemen lain */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #mobile-nav ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            border: none;
            /* Hapus border */
        }

        #mobile-nav ul li {
            padding: 10px 14px;
            width: 100%;
            border: none;
            /* Hapus border */
        }

        /* Dropdown di navbar mobile */
        #mobile-nav ul ul {
            display: none;
            /* Sembunyikan submenu secara default */
        }

        #mobile-nav ul .dropdown:hover ul {
            display: block;
            /* Tampilkan submenu saat hover */
            padding-left: 10px;
        }

    }

    /* Media query untuk layar antara 1024px dan 1199px */
    @media (min-width: 1020px) and (max-width: 1199px) {
        #navmenu {
            display: block;
            /* Tampilkan navbar desktop */
        }

        #mobile-nav {
            display: none;
            /* Sembunyikan navbar mobile */
        }

        .navmenu ul {
            display: flex;
            list-style: none;
            position: static;
            padding: 10px 0;
            margin: 0;
            border-radius: 1px;
            background-color: var(--nav-mobile-background-color);
            border: none;
            /* Hapus border */
            overflow-y: auto;
            transition: 0.3s;
        }


    }

    /* Media query untuk layar desktop lebih besar dari 1199px */
    @media (min-width: 1200px) {
        #navmenu {
            display: block;
            /* Tampilkan navbar desktop */
        }

        #mobile-nav {
            display: none;
            /* Sembunyikan navbar mobile */
        }
    }

    /* Untuk iPad (max-width: 1366px, orientation: portrait) */
    @media (max-width: 1366px) and (orientation: portrait) {
        #navmenu {
            display: none;
            /* Sembunyikan navbar desktop */
        }

        #mobile-nav {
            display: block;
            /* Tampilkan navbar mobile */
        }
    }

    /* Untuk iPad (max-width: 1366px, orientation: landscape) */
    @media (max-width: 1366px) and (orientation: landscape) {
        #navmenu {
            display: block;
            /* Tampilkan navbar desktop */
        }

        #mobile-nav {
            display: none;
            /* Sembunyikan navbar mobile */
        }
    }

    /* Gaya untuk footer */


    .footer-top {
        padding: 20px;
        /* Padding untuk bagian atas footer */
    }

    .footer-about {
        margin-bottom: 20px;
        /* Margin bawah untuk footer-about */
    }

    .footer-contact p {
        margin: 5px 0;
        /* Margin untuk paragraf di footer contact */
        color: black;
        /* Pastikan warna teks di footer contact hitam */
    }

    .social-links a {
        color: darkgreen;
        /* Warna ikon sosial menjadi hitam */
        margin-right: 15px;
        /* Margin kanan untuk ikon sosial */
    }

    .social-links a:hover {
        color: #ffc107;
        /* Warna saat hover pada ikon sosial */
    }

    .social-links i {
        font-size: 14px;
        /* Mengatur ukuran ikon (opsional) */
        color: darkgreen;
    }

    .copyright {
        margin-top: 20px;
        /* Margin atas untuk bagian copyright */
        color: black;
        /* Warna teks copyright menjadi hitam */
    }

    .credits a {
        color: black;
        /* Warna tautan di bagian credits menjadi hitam */
    }

    .home {
        background-color: #f8f9fa;
        /* Ganti dengan warna latar belakang yang diinginkan */
    }

    .content h4 {
        font-size: 1.5rem;
        /* Ukuran font untuk subjudul */
        margin-top: 20px;
        /* Jarak atas subjudul */
    }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center flex-column flex-md-row">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:nurulishlahsdnu@gmail.com">nurulishlahsdnu@gmail.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-md-4 mt-2 mt-md-0"><span>+62
                            31-3984456</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center mt-2 mt-md-0">
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
                    <img src="{{asset('assets1/img/favicon.jpg')}}" alt="">
                    <div class="text-container">
                        <h1 class="sitename">SD NU NURUL ISHLAH GRESIK</h1>
                        <p class="caption">Sekolah Berprestasi Mengaji Pasti</p>
                    </div>
                </a>
                <nav id="navmenu" class="navmenu d-none d-lg-block">
                    <ul>
                        <li><a href="/" class="active">Home</a></li>
                        <li class="dropdown"><a href="#"><span>Informasi Sekolah</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="publik/ekstra">Ekstrakurikuler</a></li>
                                <li><a href="publik/fasilitas">Fasilitas Sekolah</a></li>
                                <li><a href="publik/guru">Profil Guru</a></li>
                                <li><a href="publik/mitra">Mitra Sekolah</a></li>
                                <li><a href="publik/prestasi">Prestasi Siswa</a></li>
                                <li><a href="publik/vismis" class="active">Visi Misi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>e-Learning</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="publik/video">Video</a></li>
                                <li><a href="publik/ebook">e-Book</a></li>
                            </ul>
                        </li>
                        <li><a href="publik/Vid">Video Kegiatan</a></li>
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
                        <li><a href="publik/ekstra">Ekstrakurikuler</a></li>
                        <li><a href="publik/fasilitas">Fasilitas Sekolah</a></li>
                        <li><a href="publik/guru">Profil Guru</a></li>
                        <li><a href="publik/mitra">Mitra Sekolah</a></li>
                        <li><a href="publik/prestasi">Prestasi Siswa</a></li>
                        <li><a href="publik/vismis" class="active">Visi Misi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>e-Learning</span></a>
                    <ul>
                        <li><a href="publik/video">Video</a></li>
                        <li><a href="publik/ebook">e-Book</a></li>
                    </ul>
                </li>
                <li><a href="publik/Vid">Video Kegiatan</a></li>
            </ul>
        </nav>

    </header>


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="">
                    <div class="container">
                        <h2>Selamat Datang, di SD NU Nurul Ishlah </h2>
                    </div>
                </div><!-- End Carousel Item -->
                @foreach ($fo->take(2) as $item)
                <div class="carousel-item">
                    <img src="{{ asset('storage/gambar/' . $item->gambar) }}" alt="">
                    <div class="container">
                        <h2>{{ $item->judulfo }}</h2>
                        <p>{{ $item->deskripsi }}</p>
                        <br></br>
                    </div>
                </div><!-- End Carousel Item -->
                @endforeach

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="home" class="home section">
            <div class="container">
                <div class="row gy-4 gx-5">
                    @foreach ($kepsek->take(1) as $p)
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('storage/gambar/'. $p->gambar) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h2>Sambutan Kepala Sekolah</h2>
                        <h5>{{$p->namakep}}</h5>
                        <p>{{$p->sambutan}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Profil Sekolah</h2>
                </div><!-- End Section Title -->
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div class="stats-item">
                            <span>{{ $gcount }}</span>
                            <h6>Guru</h6>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span>{{ $pcount }}</span>
                            <h6>Prestasi Tahunan</h6>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-baseball"></i>
                        <div class="stats-item">
                            <span>{{ $ecount }}</span>
                            <h6>Ekstrakurikuler</h6>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section><!-- /Stats Section -->

        <div class="chart-container">
            <div class="chart">
                {!! $chart1->container() !!}
                <!-- Ganti dengan kode chart Anda -->
            </div>
            <div class="chart">
                {!! $data->container() !!}
            </div>
            <div class="chart">
                {!! $chart3->container() !!}
            </div>
        </div>

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Location</h2>
            </div><!-- End Section Title -->

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://maps.google.com/maps?q=sd+nu+nurul+ishlah+gresik&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            </div>

        </section><!-- /Contact Section -->

        <script src="{{ $chart1->cdn() }}"></script>
        {{ $chart1->script() }}
        <script src="{{ $data->cdn() }}"></script>
        {{ $data->script() }}
        <script src="{{ $chart3->cdn() }}"></script>
        {{ $chart3->script() }}

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    </main>

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
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
    // Fungsi untuk mengubah visibilitas menu mobile
    function toggleMobileMenu() {
        var mobileNav = document.getElementById("mobile-nav");
        if (mobileNav.style.display === "block") {
            mobileNav.style.display = "none";
        } else {
            mobileNav.style.display = "block";
        }
    }

    // Fungsi untuk menyembunyikan navbar di mode portrait
    function checkOrientation() {
        var mobileNav = document.getElementById("mobile-nav");
        if (window.innerHeight > window.innerWidth) { // Portrait mode
            mobileNav.style.display = "none"; // Sembunyikan navbar
        } else {
            mobileNav.style.display = "none"; // Sembunyikan navbar di landscape
        }
    }

    // Memeriksa orientasi saat halaman dimuat
    window.onload = checkOrientation;

    // Menambahkan event listener untuk mendeteksi perubahan ukuran jendela
    window.addEventListener("resize", checkOrientation);

    // Fungsi untuk menangani klik pada item menu
    function handleMenuClick(event) {
        // Mencegah aksi klik yang akan mengalihkan fokus ke elemen lain
        event.stopPropagation();

        // Ambil semua submenu
        var allSubmenus = document.querySelectorAll("#mobile-nav ul ul");

        // Cari submenu dari item yang diklik
        var submenu = event.currentTarget.querySelector("ul");

        // Jika submenu yang diklik ada
        if (submenu) {
            // Tutup semua submenu terlebih dahulu
            allSubmenus.forEach(function(submenu) {
                submenu.style.display = "none"; // Tutup semua submenu
            });

            // Jika submenu yang diklik tidak terbuka, buka submenu tersebut
            if (submenu.style.display !== "block") {
                submenu.style.display = "block"; // Buka submenu yang diklik
            }
        }
    }

    // Menambahkan event listener untuk setiap item menu
    document.querySelectorAll("#mobile-nav ul > li").forEach(function(item) {
        item.addEventListener("click", handleMenuClick);
    });

    // Menutup semua submenu jika klik di luar menu
    document.addEventListener("click", function() {
        var allSubmenus = document.querySelectorAll("#mobile-nav ul ul");
        allSubmenus.forEach(function(submenu) {
            submenu.style.display = "none"; // Tutup semua submenu
        });
    });
    </script>



</body>

</html>