<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Dashboard Admin E-Counseling SMA NEGERI 12 AMBON" />
        <title>Dashboard Admin | E-Counseling SMA NEGERI 12 AMBON</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- SB Admin CSS (keeps layout structure) -->
        <link href="{{asset('beranda2/css/styles.css')}}" rel="stylesheet" />

        <style>
            /* ======== GLOBAL THEME OVERRIDES ======== */
            body, html {
                font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            }

            /* ======== TOP NAV ======== */
            .sb-topnav {
                background: linear-gradient(90deg, #1a1a1f 0%, #2d1a10 100%) !important;
                border-bottom: 2px solid #bd5d38;
                box-shadow: 0 2px 15px rgba(0,0,0,0.5);
            }

            .sb-topnav .navbar-brand {
                color: #ffffff !important;
                font-family: 'Saira Extra Condensed', sans-serif;
                font-size: 1.1rem;
                font-weight: 700;
                letter-spacing: 0.04rem;
                display: flex;
                align-items: center;
                gap: 0.6rem;
            }

            .sb-topnav .navbar-brand img {
                height: 2rem;
                filter: drop-shadow(0 2px 4px rgba(0,0,0,0.4));
            }

            .sb-topnav .btn-link {
                color: rgba(255,255,255,0.7) !important;
                transition: color 0.2s;
            }
            .sb-topnav .btn-link:hover {
                color: #bd5d38 !important;
            }

            .sb-topnav .form-control {
                background: rgba(255,255,255,0.08) !important;
                border: 1px solid rgba(255,255,255,0.15) !important;
                color: #fff !important;
            }
            .sb-topnav .form-control::placeholder { color: rgba(255,255,255,0.4); }
            .sb-topnav .btn-primary {
                background-color: #bd5d38 !important;
                border-color: #bd5d38 !important;
            }
            .sb-topnav .nav-link {
                color: rgba(255,255,255,0.8) !important;
            }

            /* ======== SIDENAV ======== */
            .sb-sidenav-dark {
                background: linear-gradient(180deg, #1e1e23 0%, #2a1408 100%) !important;
                border-right: 1px solid rgba(189, 93, 56, 0.2);
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link {
                color: rgba(255,255,255,0.65) !important;
                transition: all 0.25s ease;
                border-radius: 6px;
                margin: 2px 8px;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover {
                color: #ffffff !important;
                background-color: rgba(189, 93, 56, 0.25) !important;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link.active,
            .sb-sidenav-dark .sb-sidenav-menu .nav-link[aria-current="page"] {
                color: #ffffff !important;
                background-color: #bd5d38 !important;
            }

            .sb-sidenav-dark .sb-sidenav-menu-heading {
                color: rgba(189, 93, 56, 0.8) !important;
                font-size: 0.7rem;
                font-weight: 800;
                letter-spacing: 0.08rem;
                text-transform: uppercase;
            }

            .sb-sidenav-dark .sb-nav-link-icon {
                color: #bd5d38 !important;
            }

            .sb-sidenav-footer {
                background: rgba(0,0,0,0.4) !important;
                border-top: 1px solid rgba(189, 93, 56, 0.3) !important;
            }

            /* ======== MAIN CONTENT AREA ======== */
            #layoutSidenav_content {
                background-color: #f4f1ef;
            }

            .page-header {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding-bottom: 0.5rem;
                border-bottom: 2px solid #bd5d38;
                margin-bottom: 0.5rem;
            }

            .page-header h1 {
                color: #2d1a10;
                font-family: 'Saira Extra Condensed', sans-serif;
                font-size: 2rem;
                font-weight: 700;
                margin: 0;
            }

            .breadcrumb-item.active { color: #bd5d38; font-weight: 600; }
            .breadcrumb-item a { color: #7a4a2a; text-decoration: none; }

            /* ======== STAT CARDS ======== */
            .stat-card {
                border: none;
                border-radius: 0.9rem;
                overflow: hidden;
                box-shadow: 0 6px 20px rgba(0,0,0,0.12);
                transition: transform 0.25s ease, box-shadow 0.25s ease;
            }
            .stat-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 12px 30px rgba(0,0,0,0.18);
            }

            .stat-card .card-body {
                padding: 1.4rem 1.5rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .stat-card .stat-info .stat-title {
                font-size: 0.75rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.06rem;
                opacity: 0.85;
            }

            .stat-card .stat-info .stat-value {
                font-family: 'Saira Extra Condensed', sans-serif;
                font-size: 2.4rem;
                font-weight: 700;
                line-height: 1.1;
            }

            .stat-card .stat-icon {
                font-size: 2.5rem;
                opacity: 0.25;
            }

            .stat-card .card-footer {
                padding: 0.7rem 1.5rem;
                font-size: 0.8rem;
                font-weight: 600;
                text-decoration: none;
                display: flex;
                align-items: center;
                justify-content: space-between;
                transition: background 0.2s;
            }

            /* Card color variants */
            .stat-orange { background: linear-gradient(135deg, #bd5d38 0%, #d97444 100%); color: #fff; }
            .stat-orange .card-footer { background: rgba(0,0,0,0.15); color: rgba(255,255,255,0.9); }
            .stat-orange .card-footer:hover { background: rgba(0,0,0,0.25); }

            .stat-dark { background: linear-gradient(135deg, #2d2d35 0%, #1a1a22 100%); color: #fff; }
            .stat-dark .card-footer { background: rgba(0,0,0,0.2); color: rgba(255,255,255,0.9); }
            .stat-dark .card-footer:hover { background: rgba(0,0,0,0.35); }

            .stat-brown { background: linear-gradient(135deg, #7a4a2a 0%, #a05a30 100%); color: #fff; }
            .stat-brown .card-footer { background: rgba(0,0,0,0.15); color: rgba(255,255,255,0.9); }
            .stat-brown .card-footer:hover { background: rgba(0,0,0,0.25); }

            .stat-warm { background: linear-gradient(135deg, #e8956d 0%, #bd5d38 100%); color: #fff; }
            .stat-warm .card-footer { background: rgba(0,0,0,0.12); color: rgba(255,255,255,0.9); }
            .stat-warm .card-footer:hover { background: rgba(0,0,0,0.22); }

            /* ======== CONTENT CARDS ======== */
            .content-card {
                border: none;
                border-radius: 0.9rem;
                box-shadow: 0 4px 15px rgba(0,0,0,0.08);
                overflow: hidden;
            }

            .content-card .card-header {
                background: linear-gradient(90deg, #2d1a10 0%, #bd5d38 100%);
                color: #ffffff;
                font-weight: 700;
                padding: 1rem 1.5rem;
                border: none;
                font-size: 0.95rem;
                letter-spacing: 0.03rem;
            }

            .content-card .card-header i {
                margin-right: 0.5rem;
                opacity: 0.9;
            }

            .content-card .card-body {
                background: #ffffff;
            }

            /* ======== WELCOME BANNER ======== */
            .welcome-banner {
                background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(189, 93, 56, 0.7) 100%),
                            url("{{ asset('berandautama/assets/img/SMA12.jpg') }}");
                background-size: cover;
                background-position: center;
                border-radius: 0.9rem;
                padding: 2.5rem;
                color: #fff;
                display: flex;
                align-items: center;
                gap: 1.5rem;
                box-shadow: 0 8px 25px rgba(0,0,0,0.3);
                margin-bottom: 1.5rem;
            }

            .welcome-banner img {
                height: 4.5rem;
                filter: drop-shadow(0 4px 6px rgba(0,0,0,0.4));
            }

            .welcome-banner .welcome-text h2 {
                font-family: 'Saira Extra Condensed', sans-serif;
                font-size: 1.9rem;
                font-weight: 700;
                margin-bottom: 0.25rem;
            }

            .welcome-banner .welcome-text p {
                font-size: 0.9rem;
                opacity: 0.85;
                margin: 0;
            }

            .welcome-banner .welcome-badge {
                margin-left: auto;
                background: rgba(255,255,255,0.15);
                border: 1px solid rgba(255,255,255,0.3);
                border-radius: 50px;
                padding: 0.5rem 1.2rem;
                font-size: 0.8rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.05rem;
                white-space: nowrap;
            }

            /* ======== FOOTER ======== */
            footer {
                background: linear-gradient(90deg, #1e1e23 0%, #2d1a10 100%) !important;
                border-top: 2px solid #bd5d38;
            }
            footer .text-muted { color: rgba(255,255,255,0.5) !important; }
            footer a { color: rgba(255,255,255,0.6) !important; text-decoration: none; }
            footer a:hover { color: #bd5d38 !important; }

            /* ======== DROPDOWN ======== */
            .dropdown-menu {
                background: #1e1e23;
                border: 1px solid rgba(189,93,56,0.3);
                box-shadow: 0 8px 20px rgba(0,0,0,0.4);
            }
            .dropdown-item { color: rgba(255,255,255,0.75) !important; }
            .dropdown-item:hover { background: rgba(189,93,56,0.25) !important; color: #fff !important; }
            .dropdown-divider { border-color: rgba(255,255,255,0.1); }

            /* ======== LOGOUT BADGE ======== */
            .logout-btn {
                background: #bd5d38 !important;
                border-color: #bd5d38 !important;
                color: #fff !important;
                border-radius: 6px;
                font-weight: 700;
                font-size: 0.85rem;
                padding: 0.35rem 0.9rem;
                transition: all 0.25s;
            }
            .logout-btn:hover {
                background: #a44d2d !important;
                border-color: #a44d2d !important;
                transform: translateY(-1px);
            }
        </style>
    </head>
    <body class="sb-nav-fixed">

        <!-- ======== TOP NAVBAR ======== -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
            <!-- Navbar Brand -->
            <a class="navbar-brand ps-3" href="#">
                <img src="{{asset('berandautama/assets/img/logo.webp')}}" alt="Logo" />
                E-Counseling
            </a>
            <!-- Sidebar Toggle -->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Spacer -->
            <div class="ms-auto me-3 d-none d-md-block">
                <span class="text-white-50 small">SMA NEGERI 12 AMBON</span>
            </div>
            <!-- User Menu -->
            <ul class="navbar-nav ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-shield fa-fw"></i>
                        <span class="d-none d-md-inline ms-1 small">{{ auth()->user()->name ?? 'Admin' }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <span class="dropdown-item-text text-white-50 small px-3">
                                Role: <strong class="text-warning">Admin</strong>
                            </span>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="px-3 py-1">
                                @csrf
                                <button type="submit" class="btn logout-btn w-100">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <!-- ======== SIDENAV ======== -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu Utama</div>
                            <a class="nav-link active" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Manajemen</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseKonseling" aria-expanded="false" aria-controls="collapseKonseling">
                                <div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div>
                                Data Konseling
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseKonseling" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#"><i class="fas fa-circle-dot me-1 small"></i> Semua Konseling</a>
                                    <a class="nav-link" href="#"><i class="fas fa-circle-dot me-1 small"></i> Tambah Laporan</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Data Pengguna
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUsers" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#"><i class="fas fa-circle-dot me-1 small"></i> Guru BK</a>
                                    <a class="nav-link" href="#"><i class="fas fa-circle-dot me-1 small"></i> Walikelas</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                                Data Siswa
                            </a>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                Laporan & Statistik
                            </a>

                            <div class="sb-sidenav-menu-heading">Pengaturan</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                Pengaturan Sistem
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small text-white-50">Login sebagai:</div>
                        <span class="fw-bold">{{ auth()->user()->name ?? 'Administrator' }}</span>
                    </div>
                </nav>
            </div>

            <!-- ======== MAIN CONTENT ======== -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 pt-4">

                        <!-- Welcome Banner -->
                        <div class="welcome-banner">
                            <img src="{{asset('berandautama/assets/img/logo.webp')}}" alt="Logo SMA 12 Ambon" />
                            <div class="welcome-text">
                                <h2>Selamat Datang, {{ auth()->user()->name ?? 'Administrator' }}!</h2>
                                <p>Sistem E-Counseling &mdash; SMA NEGERI 12 AMBON</p>
                            </div>
                            <div class="welcome-badge d-none d-md-block">
                                <i class="fas fa-user-shield me-1"></i> Admin
                            </div>
                        </div>

                        <!-- Page Header -->
                        <div class="page-header">
                            <h1><i class="fas fa-tachometer-alt me-2" style="color:#bd5d38;font-size:1.8rem;"></i>Dashboard Admin</h1>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <!-- ======== STAT CARDS ======== -->
                        <div class="row g-3 mb-4">
                            <div class="col-xl-3 col-md-6">
                                <div class="card stat-card stat-orange">
                                    <div class="card-body">
                                        <div class="stat-info">
                                            <div class="stat-title">Total Konseling</div>
                                            <div class="stat-value">—</div>
                                        </div>
                                        <div class="stat-icon"><i class="fas fa-handshake"></i></div>
                                    </div>
                                    <a class="card-footer text-white text-decoration-none" href="#">
                                        <span>Lihat Detail</span>
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card stat-card stat-dark">
                                    <div class="card-body">
                                        <div class="stat-info">
                                            <div class="stat-title">Total Siswa</div>
                                            <div class="stat-value">—</div>
                                        </div>
                                        <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
                                    </div>
                                    <a class="card-footer text-white text-decoration-none" href="#">
                                        <span>Lihat Detail</span>
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card stat-card stat-brown">
                                    <div class="card-body">
                                        <div class="stat-info">
                                            <div class="stat-title">Guru BK & Walikelas</div>
                                            <div class="stat-value">—</div>
                                        </div>
                                        <div class="stat-icon"><i class="fas fa-users"></i></div>
                                    </div>
                                    <a class="card-footer text-white text-decoration-none" href="#">
                                        <span>Lihat Detail</span>
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card stat-card stat-warm">
                                    <div class="card-body">
                                        <div class="stat-info">
                                            <div class="stat-title">Laporan Bulan Ini</div>
                                            <div class="stat-value">—</div>
                                        </div>
                                        <div class="stat-icon"><i class="fas fa-file-alt"></i></div>
                                    </div>
                                    <a class="card-footer text-white text-decoration-none" href="#">
                                        <span>Lihat Detail</span>
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- ======== CHART CARDS ======== -->
                        <div class="row g-3 mb-4">
                            <div class="col-xl-6">
                                <div class="card content-card mb-0">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area"></i>
                                        Grafik Konseling Per Bulan
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myAreaChart" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card content-card mb-0">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar"></i>
                                        Distribusi Jenis Pelanggaran
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>

                <!-- ======== FOOTER ======== -->
                <footer class="py-4 mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SMA NEGERI 12 AMBON {{ date('Y') }}</div>
                            <div>
                                <a href="#">Kebijakan Privasi</a>
                                &middot;
                                <a href="#">Syarat &amp; Ketentuan</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('beranda2/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('beranda2/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('beranda2/assets/demo/chart-bar-demo.js')}}"></script>
    </body>
</html>
