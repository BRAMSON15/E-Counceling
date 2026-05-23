<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Counseling | SMA NEGERI 12 AMBON</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('berandautama/css/styles.css')}}" rel="stylesheet" />
        <style>
            section.resume-section.about-section {
                background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("{{ asset('berandautama/assets/img/SMA12.jpg') }}") !important;
                background-size: cover !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                max-width: none !important;
            }
            section.resume-section.about-section .resume-section-content {
                max-width: 75rem;
            }
            section.resume-section.about-section h1 {
                color: #ffffff !important;
            }
            section.resume-section.about-section .subheading {
                color: rgba(255, 255, 255, 0.75) !important;
            }
            section.resume-section.about-section p.lead {
                color: rgba(255, 255, 255, 0.85) !important;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">SMA NEGERI 12 AMBON</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('berandautama/assets/img/logo.webp')}}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('login')}}">Masuk sistem</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Riwayat Konseling</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section about-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Selamat datang di sistem 
                        <span class="text-primary">E-Counseling</span>
                    </h1>
                    <div class="subheading mb-5">
                       SMA NEGERI 12 AMBON
                    </div>
                    <p class="lead mb-5">Setiap bimbingan mengubah seseorang menjadi pribadi yang lebih baik</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Tahapan sistem E-Counceling</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Walikelas</h3>
                            <div class="subheading mb-3">Pelapor</div>
                            <p>Walikelas akan melaporkan kejadian pelanggaran yang dilakukan oleh siswa</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Guru BK</h3>
                            <div class="subheading mb-3">Memberikan solusi</div>
                            <p>Guru BK akan memberikan solusi untuk menyelesaikan masalah yang terkait dengan kejadian tersebut</p>
                        </div>
                       
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Orang Tua</h3>
                            <div class="subheading mb-3">Melihat Hasil</div>
                            <p>Orang Tua akan melihat hasil konseling yang diberikan dari Guru BK</p>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('berandautama/js/scripts.js')}}"></script>
    </body>
</html>
