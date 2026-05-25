<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Data Pelanggaran | E-Counseling SMA NEGERI 12 AMBON</title>
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="{{asset('beranda2/css/styles.css')}}" rel="stylesheet" />
        <style>
            body, html { font-family: 'Muli', -apple-system, sans-serif; }
            .sb-topnav { background: linear-gradient(90deg, #1a1a1f 0%, #2d1a10 100%) !important; border-bottom: 2px solid #bd5d38; box-shadow: 0 2px 15px rgba(0,0,0,0.5); }
            .sb-topnav .navbar-brand { color: #ffffff !important; font-family: 'Saira Extra Condensed', sans-serif; font-size: 1.1rem; font-weight: 700; display: flex; align-items: center; gap: 0.6rem; }
            .sb-topnav .navbar-brand img { height: 2rem; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.4)); }
            .sb-topnav .btn-link { color: rgba(255,255,255,0.7) !important; transition: color 0.2s; }
            .sb-topnav .btn-link:hover { color: #bd5d38 !important; }
            .sb-sidenav-dark { background: linear-gradient(180deg, #1e1e23 0%, #2a1408 100%) !important; border-right: 1px solid rgba(189, 93, 56, 0.2); }
            .sb-sidenav-dark .sb-sidenav-menu .nav-link { color: rgba(255,255,255,0.65) !important; transition: all 0.25s ease; border-radius: 6px; margin: 2px 8px; }
            .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover { color: #ffffff !important; background-color: rgba(189, 93, 56, 0.25) !important; }
            .sb-sidenav-dark .sb-sidenav-menu .nav-link.active { color: #ffffff !important; background-color: #bd5d38 !important; }
            .sb-sidenav-dark .sb-sidenav-menu-heading { color: rgba(189, 93, 56, 0.8) !important; font-size: 0.7rem; font-weight: 800; letter-spacing: 0.08rem; text-transform: uppercase; }
            .sb-sidenav-dark .sb-nav-link-icon { color: #bd5d38 !important; }
            .sb-sidenav-footer { background: rgba(0,0,0,0.4) !important; border-top: 1px solid rgba(189, 93, 56, 0.3) !important; }
            #layoutSidenav_content { background-color: #f4f1ef; }
            .page-header { display: flex; align-items: center; gap: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid #bd5d38; margin-bottom: 0.5rem; }
            .page-header h1 { color: #2d1a10; font-family: 'Saira Extra Condensed', sans-serif; font-size: 2rem; font-weight: 700; margin: 0; }
            .breadcrumb-item.active { color: #bd5d38; font-weight: 600; }
            .breadcrumb-item a { color: #7a4a2a; text-decoration: none; }
            .content-card { border: none; border-radius: 0.9rem; box-shadow: 0 4px 15px rgba(0,0,0,0.08); overflow: hidden; }
            .content-card .card-header { background: linear-gradient(90deg, #2d1a10 0%, #bd5d38 100%); color: #ffffff; font-weight: 700; padding: 1rem 1.5rem; border: none; font-size: 0.95rem; letter-spacing: 0.03rem; }
            .content-card .card-header i { margin-right: 0.5rem; opacity: 0.9; }
            .content-card .card-body { background: #ffffff; }
            .table thead th { background: #2d1a10; color: #fff; border-color: rgba(189,93,56,0.3); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.04rem; }
            .table tbody tr:hover { background-color: rgba(189,93,56,0.06); }
            footer { background: linear-gradient(90deg, #1e1e23 0%, #2d1a10 100%) !important; border-top: 2px solid #bd5d38; }
            footer .text-muted { color: rgba(255,255,255,0.5) !important; }
            footer a { color: rgba(255,255,255,0.6) !important; text-decoration: none; }
            footer a:hover { color: #bd5d38 !important; }
            .dropdown-menu { background: #1e1e23; border: 1px solid rgba(189,93,56,0.3); box-shadow: 0 8px 20px rgba(0,0,0,0.4); }
            .dropdown-item { color: rgba(255,255,255,0.75) !important; }
            .dropdown-item:hover { background: rgba(189,93,56,0.25) !important; color: #fff !important; }
            .logout-btn { background: #bd5d38 !important; border-color: #bd5d38 !important; color: #fff !important; border-radius: 6px; font-weight: 700; font-size: 0.85rem; padding: 0.35rem 0.9rem; transition: all 0.25s; }
            .logout-btn:hover { background: #a44d2d !important; border-color: #a44d2d !important; transform: translateY(-1px); }
        </style>
    </head>
    <body class="sb-nav-fixed">

        <!-- TOP NAVBAR -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
            <a class="navbar-brand ps-3" href="#">
                <img src="{{asset('berandautama/assets/img/logo.webp')}}" alt="Logo" />
                E-Counseling
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
            <div class="ms-auto me-3 d-none d-md-block">
                <span class="text-white-50 small">SMA NEGERI 12 AMBON</span>
            </div>
            <ul class="navbar-nav ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-tie fa-fw"></i>
                        <span class="d-none d-md-inline ms-1 small">{{ auth()->user()->name ?? 'Guru BK' }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <span class="dropdown-item-text text-white-50 small px-3">
                                Role: <strong class="text-info">Guru BK</strong>
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
            <!-- SIDENAV -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu Utama</div>
                            <a class="nav-link" href="{{ route('guru_bk.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Konseling</div>
                            <a class="nav-link active" href="{{ route('guru_bk.datapelanggaran') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                                Data Pelanggaran
                            </a>
                            <a class="nav-link" href="{{ route('guru_bk.hasilkonseling') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div>
                                Hasil Konseling
                            </a>
                            <a class="nav-link" href="{{ route('guru_bk.datasiswa') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                                Data Siswa
                            </a>

                            <div class="sb-sidenav-menu-heading">Laporan</div>
                            <a class="nav-link" href="{{ route('guru_bk.statistik') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                Statistik Konseling
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small text-white-50">Login sebagai:</div>
                        <span class="fw-bold">{{ auth()->user()->name ?? 'Guru BK' }}</span>
                    </div>
                </nav>
            </div>

            <!-- MAIN CONTENT -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 pt-4">

                        <!-- Page Header -->
                        <div class="page-header">
                            <h1><i class="fas fa-clipboard-list me-2" style="color:#bd5d38;font-size:1.8rem;"></i>Data Pelanggaran</h1>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('guru_bk.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pelanggaran</li>
                        </ol>

                        <!-- DATA PELANGGARAN TABLE -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card content-card">
                                    <div class="card-header">
                                        <i class="fas fa-list"></i> Daftar Pelanggaran Siswa
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover align-middle">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Siswa</th>
                                                        <th>Kelas</th>
                                                        <th>Jenis Pelanggaran</th>
                                                        <th>Tanggal</th>
                                                        <th>Pelapor</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($pelanggaran as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->siswa->nama ?? '-' }}</td>
                                                            <td>{{ $item->siswa->kelas ?? '-' }}</td>
                                                            <td>{{ $item->jenis_pelanggaran }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                                                            <td>{{ $item->walikelas->name ?? '-' }}</td>
                                                            <td>
                                                                <a href="{{ route('guru_bk.hasilkonseling.create', $item->id) }}" class="btn btn-sm btn-primary" title="Tambah Hasil Konseling">
                                                                    <i class="fas fa-plus me-1"></i> Konseling
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="7" class="text-center py-4 text-muted">
                                                                <i class="fas fa-inbox fa-2x mb-2 d-block" style="color:#bd5d38; opacity:0.4;"></i>
                                                                Belum ada data pelanggaran.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3">
                                            {{ $pelanggaran->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>

                <!-- FOOTER -->
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
    </body>
</html>
