<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SD NURISH</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
    /* Gaya umum untuk mobile nav */
    #mobile-nav {
        display: none;
        /* Sembunyikan secara default */
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

    /* Media query untuk resolusi kecil (mobile view) */
    @media (max-width: 1024px) {
        #navmenu {
            display: none;
            /* Sembunyikan navbar desktop */
        }

        #mobile-nav {
            display: block;
            /* Tampilkan navbar mobile */
            background: #f8f9fa;
            /* Warna latar belakang */
            padding: 0.5rem;
            position: absolute;
            top: 100%;
            /* Posisi di bawah header */
            left: 0;
            right: 0;
            z-index: 1000;
            /* Pastikan di atas elemen lain */
        }

        #mobile-nav ul {
            list-style: none;
            padding-left: 0;
            flex-direction: column;
            /* Susun item secara vertikal */
            align-items: flex-start;
        }

        #mobile-nav ul li {
            padding: 10px 14px;
            /* Sesuaikan padding untuk item daftar */
            width: 100%;
        }

        #mobile-nav ul ul {
            display: none;
            /* Sembunyikan dropdown secara default */
        }

        #mobile-nav ul .dropdown:hover ul {
            display: block;
            /* Tampilkan dropdown saat hover */
        }
    }

    /* Media query untuk tampilan landscape pada semua jenis iPad */
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

    /* Media query untuk tampilan portrait pada semua jenis iPad */
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

    /* Tambahan gaya untuk tampilan tablet (misal antara 768px - 1024px) */
    @media (min-width: 768px) and (max-width: 1024px) {
        #navmenu {
            display: none;
            /* Sembunyikan navbar desktop */
        }

        #mobile-nav {
            display: block;
            /* Tampilkan navbar mobile */
        }
    }

    /* Media query untuk resolusi lebih besar dari 1024px */
    @media (min-width: 1025px) {
        #navmenu {
            display: block;
            /* Tampilkan navbar desktop */
        }

        #mobile-nav {
            display: none;
            /* Sembunyikan navbar mobile */
        }
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
                    <h1 class="sitename">SD NU NURUL ISHLAH GRESIK</h1>
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
                        <h4>Sekolah Prestasi, Mengaji Pasti!</h4>
                        <br></br>
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
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h2>Sambutan Kepala Sekolah</h2>
                        <h5>Nama Kepala sekolah</h5>
                        <p>isi sambutan</p>

                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- <section id="services" class="services section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Video Sekolah</h2>
            </div>

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <x-embed url="https://www.youtube.com/watch?v=On2hMuv8QXY" class="img-fluid"
                            style="max-width: 100%; max-height: 200px; width: auto; height: auto;" />
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <x-embed url="https://www.youtube.com/watch?v=b_NeEkp0jlU" class="img-fluid"
                            style="max-width: 100%; max-height: 200px; width: auto; height: auto;" />
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <x-embed url="https://www.youtube.com/watch?v=Z0GJ1ebtIl4" class="img-fluid"
                            style="max-width: 100%; max-height: 200px; width: auto; height: auto;" />
                    </div>

                </div>

            </div>

        </section> -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Profil Fasilitas Sekolah</h2>
                </div><!-- End Section Title -->
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div class="stats-item">
                            <span>{{ $gcount }}</span>
                            <p>Guru</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-baseball"></i>
                        <div class="stats-item">
                            <span>{{ $ecount }}</span>
                            <p>Ekstrakurikuler</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-people-arrows"></i>
                        <div class="stats-item">
                            <span>{{ $mcount }}</span>
                            <p>Kerjasama Mitra</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span>{{ $pcount }}</span>
                            <p>Prestasi Tahunan</p>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section><!-- /Stats Section -->

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
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 31-3984456 </span></p>
                        <p><strong>Email:nurulishlahsdnu@gmail.com</strong></p>
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
    </script>

</body>

</html>