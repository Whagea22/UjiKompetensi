<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>See Planner</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('public/landingpage') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ url('public/landingpage') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('public/landingpage') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('public/landingpage') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public/landingpage') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('public/landingpage') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('public/landingpage') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('public/landingpage') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('public/landingpage') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('public/landingpage') }}/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h2 class="logo me-auto me-lg-0"><a href="index.html"><img
                        src="{{ url('public') }}/tempelate/dist/img/logo_sp_3.PNG" class="brand-image"
                        style="opacity: 1"> See Planner</a></h2>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">testimonial</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <style>
        .sidebar {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            background-color: #fff;
        }

        .nav-item {
            position: relative;
        }

        .nav-item:not(:last-child) {
            margin-bottom: 20px;
        }

        .nav-link {
            color: #414141;
            text-decoration: none;
            font-size: 25px;
            font-family: "Montserrat", sans-serif;
        }

        .nav-link .fas {
            color: #414141
        }

        .nav-link i {
            width: 70px;
            height: 70px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            transition: all 0.3s;
        }

        .nav-item:hover i {
            transform: scale(1.1);
            box-shadow: 10px 0 20px;
        }

        .nav-link .title {
            position: absolute;
            background-color: #fff;
            height: 100%;
            padding-right: 50px;
            padding-left: 20px;
            line-height: 70px;
            transform: translateX(-200%);
            z-index: -1;
            transition: all 0.3s;
        }

        .nav-link:hover .title {
            transform: translateX(0);
        }
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">

        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h2>Selamat Datang di Pelayanan Pernikahan Terbaik</h2>
                    <h1><u>See Planner</u></h1>
                    <h2>"Dengan bangga kami menyambut Anda ke dalam pelayanan pernikahan terbaik. Bersama-sama, kita
                        akan menciptakan pernikahan tak terlupakan."</h2>
                </div>
            </div>

            {{-- <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="">Foto Weddning</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3><a href="">Foto Pre Wedding</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="">Dacoration Wedding</a></h3>
                    </div>
                </div>
            </div> --}}
        </div>
    </section><!-- End Hero -->

    {{-- <ul class="sidebar">
        <li class="nav-item">
            <a href="#home" class="nav-link">
                <i class="fas fa-home"></i>
                <span class="title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#document" class="nav-link">
                <i class="fas fa-info"></i>
                <span class="title">Tentang</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#document" class="nav-link">
                <i class="fas fa-list"></i>
                <span class="title">Fitur</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#document" class="nav-link">
                <i class="fas fa-image"></i>
                <span class="title">Portofolio</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#document" class="nav-link">
                <i class="fas fa-clipboard"></i>
                <span class="title">Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#document" class="nav-link">
                <i class="fas fa-user"></i>
                <span class="title">Kontak</span>
            </a>
        </li>
    </ul> --}}

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ url('public/landingpage') }}/assets/img/bg_2.jpg" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>About Us.</h3>
                        <p class="fst-italic">
                            See Planner adalah pionir dalam industri pernikahan yang berkomitmen untuk mewujudkan impian
                            pasangan mempelai dengan sempurna. Sejak berdiri, perusahaan kami telah menjadi tonggak
                            penting dalam mengatur dan mengoordinasikan pernikahan yang tak terlupakan. Dengan dedikasi,
                            pengalaman, dan inovasi yang kami bawa selama bertahun-tahun, kami telah membangun reputasi
                            yang tak tertandingi dalam membawa kebahagiaan kepada pasangan yang akan menikah. Adapun
                            bidang-bidang yang kami kuasai :
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Foto wedding</li>
                            <li><i class="ri-check-double-line"></i> Desain dan Dekorasi: Keindahan adalah salah satu
                                fokus utama kami. Tim desain kami menciptakan tema dan konsep visual yang unik sesuai
                                dengan selera pasangan.</li>
                            <li><i class="ri-check-double-line"></i> Foto Pre wedding.</li>
                        </ul>
                        <p>
                            Perusahaan ini dibangun pada tahun 2018, dan sudah berjalan salam 5 tahun terakhir.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-4.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-5.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-6.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-7.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ url('public/landingpage') }}/assets/img/clients/client-8.png"
                                class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Features Section ======= -->
        {{-- <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="image col-lg-6"
                        style='background-image: url("{{ url('public/landingpage') }}/assets/img/portfolio/bg_18.jpg");'
                        data-aos="fade-right"></div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-receipt"></i>
                            <h4></h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Harum esse qui</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-images"></i>
                            <h4>Aut occaecati</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-shield"></i>
                            <h4>Beatae veritatis</h4>
                            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section --> --}}

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Check our Services</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">Dele cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">Divera don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section --> --}}

        <!-- ======= Cta Section ======= -->
        {{-- <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>

            </div>
        </section><!-- End Cta Section --> --}}

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Produk</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Wedding</li>
                            <li data-filter=".filter-card">Pre Wedding</li>
                            <li data-filter=".filter-web">Decoration</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_6.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Paket 1</h4>
                                <p>Wedding</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_6.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Foto Wedding 250x foto = Rp. 6.500.000,00"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_19.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Decoration 3</h4>
                                <p>Jl. DI.Penjaitan</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_19.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Rp. 8.200.000,00"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_17.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Paket 2</h4>
                                <p>Wedding</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_17.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="foto wedding + decorasi = Rp. 26.600.000,00"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_10.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Paket 4</h4>
                                <p>Pre Wedding</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/portfolio-4.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_15.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Decoration 2</h4>
                                <p>Jl. S.Parman</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_15.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Rp. 18.000.000,00"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_21.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Paket 3</h4>
                                <p>Wedding</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_21.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Rp. 5.550.000,00"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_12.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Paket 5</h4>
                                <p>Pre Wedding</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_12.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Rp. 6.600.000,00"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_20.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Paket 6</h4>
                                <p>Pre Wedding</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_20.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ url('public/landingpage') }}/assets/img/portfolio/bg_18.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Decoration 1</h4>
                                <p>Jl. Gatot subroto</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('public/landingpage') }}/assets/img/portfolio/bg_18.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Rp. 26.000.000,00"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        {{-- <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right" data-aos-delay="100"></div>
                    <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>Voluptatem dignissimos provident quasi</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="65"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam
                                            architecto ut.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="85"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium
                                            et quia dere tan</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="35"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam
                                            ducimus aut voluptate non vel</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="20"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et
                                            nemo pad der</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section --> --}}

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('public/landingpage') }}/assets/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Arman Maulana</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Saya merasa puas & senang telah menggunakan jasa See Planner
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('public/landingpage') }}/assets/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    jasa see planner ini sungguh sangat profesional dalam menangani Wedding orgenaizer,
                                    saya merasa sangat puas atas pelayanan dan hasil yang telah diberikan jasa see
                                    planner.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('public/landingpage') }}/assets/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('public/landingpage') }}/assets/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('public/landingpage') }}/assets/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Check our Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ url('public/landingpage') }}/assets/img/team/whagea.jpg"
                                    class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/whageasptra_/"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Whagea Saputra</h4>
                                <span>Software depelover</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. R.Suprapto No.37</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>whageasaputra01@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 85349467204</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>SP<span>.</span></h3>
                            <p>
                                Jl. R.Suprapto No.37</No> <br>
                                Ketapang. Kalbar<br><br>
                                <strong>Phone:</strong>+62 85349467204<br>
                                <strong>Email:</strong>whageasaputra01@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/whageasptra_/" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SP.</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="#">Whagea Saputra</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('public/landingpage') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('public/landingpage') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('public/landingpage') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/landingpage') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('public/landingpage') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('public/landingpage') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('public/landingpage') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('public/landingpage') }}/assets/js/main.js"></script>

</body>

</html>
