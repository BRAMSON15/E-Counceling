<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Tambah Hasil Konseling | E-Counseling</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{asset('beranda2/css/styles.css')}}" rel="stylesheet" />
    <style>
        body, html { font-family: 'Muli', -apple-system, sans-serif; }
        .sb-topnav { background: linear-gradient(90deg, #1a1a1f 0%, #2d1a10 100%) !important; border-bottom: 2px solid #bd5d38; }
        .sb-sidenav-dark { background: linear-gradient(180deg, #1e1e23 0%, #2a1408 100%) !important; }
        .sb-sidenav-dark .sb-sidenav-menu .nav-link { color: rgba(255,255,255,0.65) !important; }
        .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover { color: #ffffff !important; background-color: rgba(189, 93, 56, 0.25) !important; }
        .sb-sidenav-dark .sb-sidenav-menu .nav-link.active { color: #ffffff !important; background-color: #bd5d38 !important; }
        #layoutSidenav_content { background-color: #f4f1ef; }
        .page-header { display: flex; align-items: center; gap: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid #bd5d38; margin-bottom: 0.5rem; }
        .page-header h1 { color: #2d1a10; font-family: 'Saira Extra Condensed', sans-serif; font-size: 2rem; font-weight: 700; margin: 0; }
        .content-card { border: none; border-radius: 0.9rem; box-shadow: 0 4px 15px rgba(0,0,0,0.08); overflow: hidden; }
        .content-card .card-header { background: linear-gradient(90deg, #2d1a10 0%, #bd5d38 100%); color: #ffffff; font-weight: 700; padding: 1rem 1.5rem; }
        .form-control { border-radius: 0.5rem; border: 1px solid #ddd; }
        .form-control:focus { border-color: #bd5d38; box-shadow: 0 0 0 0.2rem rgba(189, 93, 56, 0.25); }
        .form-label { font-weight: 600; color: #2d1a10; margin-bottom: 0.5rem; }
        .btn-submit { background-color: #bd5d38; border-color: #bd5d38; color: #fff; font-weight: 600; border-radius: 0.5rem; }
        .btn-submit:hover { background-color: #a44d2d; border-color: #a44d2d; }
        .btn-cancel { background-color: #6c757d; border-color: #6c757d; color: #fff; font-weight: 600; border-radius: 0.5rem; }
        .btn-cancel:hover { background-color: #5a6268; border-color: #5a6268; }
        .is-invalid { border-color: #dc3545 !important; }
        .invalid-feedback { color: #dc3545; font-size: 0.875rem; display: block; margin-top: 0.25rem; }
        .info-box { background: #e7f3ff; border-left: 4px solid #2196F3; padding: 1rem; border-radius: 4px; margin-bottom: 1.5rem; }
        footer { background: linear-gradient(90deg, #1e1e23 0%, #2d1a10 100%) !important; border-top: 2px solid #bd5d38; }
    </style>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark">
        <a class="navbar-brand ps-3" href="#">
            <img src="{{asset('berandautama/assets/img/logo1.png')}}" alt="Logo" style="height: 2rem;" />
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
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="fas fa-user-tie fa-fw"></i>
                    <span class="d-none d-md-inline ms-1 small">{{ auth()->user()->name ?? 'Guru BK' }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="px-3 py-1">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100 btn-sm">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
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
                        <a class="nav-link" href="{{ route('guru_bk.datapelanggaran') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                            Data Pelanggaran
                        </a>
                        <a class="nav-link active" href="{{ route('guru_bk.hasilkonseling') }}">
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
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 pt-4">
                    <div class="page-header">
                        <h1><i class="fas fa-plus-circle me-2" style="color:#bd5d38;"></i>Tambah Hasil Konseling</h1>
                    </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('guru_bk.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('guru_bk.hasilkonseling') }}">Hasil Konseling</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="info-box">
                                <i class="fas fa-info-circle"></i>
                                <strong>Informasi Pelanggaran</strong><br>
                                <small>Siswa: <strong>{{ $pelanggaran->siswa->nama ?? '-' }}</strong> | Jenis: <strong>{{ $pelanggaran->jenis_pelanggaran }}</strong></small>
                            </div>

                            <div class="card content-card">
                                <div class="card-header">
                                    <i class="fas fa-form"></i>
                                    Form Hasil Konseling
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            <strong>Terjadi Kesalahan!</strong>
                                            <ul class="mb-0 mt-2">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <form action="{{ route('guru_bk.hasilkonseling.store') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="pelanggaran_id" value="{{ $pelanggaran->id }}">
                                        <input type="hidden" name="siswa_id" value="{{ $pelanggaran->siswa_id }}">

                                        <div class="mb-3">
                                            <label for="tanggal_konseling" class="form-label">Tanggal Konseling</label>
                                            <input type="date" class="form-control @error('tanggal_konseling') is-invalid @enderror" id="tanggal_konseling" name="tanggal_konseling" value="{{ old('tanggal_konseling', date('Y-m-d')) }}" required>
                                            @error('tanggal_konseling')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="hasil_konseling" class="form-label">Hasil Konseling</label>
                                            <textarea class="form-control @error('hasil_konseling') is-invalid @enderror" id="hasil_konseling" name="hasil_konseling" rows="4" placeholder="Tuliskan hasil konseling dengan siswa...">{{ old('hasil_konseling') }}</textarea>
                                            @error('hasil_konseling')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="catatan" class="form-label">Catatan Tambahan (Opsional)</label>
                                            <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3" placeholder="Catatan atau rekomendasi tambahan...">{{ old('catatan') }}</textarea>
                                            @error('catatan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="d-flex gap-2">
                                            <button type="submit" class="btn btn-submit">
                                                <i class="fas fa-save me-1"></i> Simpan
                                            </button>
                                            <a href="{{ route('guru_bk.hasilkonseling') }}" class="btn btn-cancel">
                                                <i class="fas fa-times me-1"></i> Batal
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-4 mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; SMA NEGERI 12 AMBON {{ date('Y') }}</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('beranda2/js/scripts.js')}}"></script>
</body>
</html>
