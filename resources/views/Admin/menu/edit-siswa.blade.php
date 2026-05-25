<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Edit Siswa - E-Counseling SMA NEGERI 12 AMBON" />
    <title>Edit Siswa | E-Counseling</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{asset('beranda2/css/styles.css')}}" rel="stylesheet" />
    <style>
        body, html { font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; }
        .sb-topnav { background: linear-gradient(90deg, #1a1a1f 0%, #2d1a10 100%) !important; border-bottom: 2px solid #bd5d38; box-shadow: 0 2px 15px rgba(0,0,0,0.5); }
        .sb-topnav .navbar-brand { color: #ffffff !important; font-family: 'Saira Extra Condensed', sans-serif; font-size: 1.1rem; font-weight: 700; letter-spacing: 0.04rem; display: flex; align-items: center; gap: 0.6rem; }
        .sb-topnav .navbar-brand img { height: 2rem; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.4)); }
        .sb-topnav .btn-link { color: rgba(255,255,255,0.7) !important; transition: color 0.2s; }
        .sb-topnav .btn-link:hover { color: #bd5d38 !important; }
        .sb-sidenav-dark { background: linear-gradient(180deg, #1e1e23 0%, #2a1408 100%) !important; border-right: 1px solid rgba(189, 93, 56, 0.2); }
        .sb-sidenav-dark .sb-sidenav-menu .nav-link { color: rgba(255,255,255,0.65) !important; transition: all 0.25s ease; border-radius: 6px; margin: 2px 8px; }
        .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover { color: #ffffff !important; background-color: rgba(189, 93, 56, 0.25) !important; }
        .sb-sidenav-dark .sb-sidenav-menu .nav-link.active { color: #ffffff !important; background-color: #bd5d38 !important; }
        #layoutSidenav_content { background-color: #f4f1ef; }
        .page-header { display: flex; align-items: center; gap: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid #bd5d38; margin-bottom: 0.5rem; }
        .page-header h1 { color: #2d1a10; font-family: 'Saira Extra Condensed', sans-serif; font-size: 2rem; font-weight: 700; margin: 0; }
        .content-card { border: none; border-radius: 0.9rem; box-shadow: 0 4px 15px rgba(0,0,0,0.08); overflow: hidden; }
        .content-card .card-header { background: linear-gradient(90deg, #2d1a10 0%, #bd5d38 100%); color: #ffffff; font-weight: 700; padding: 1rem 1.5rem; border: none; }
        .form-control { border-radius: 0.5rem; border: 1px solid #ddd; }
        .form-control:focus { border-color: #bd5d38; box-shadow: 0 0 0 0.2rem rgba(189, 93, 56, 0.25); }
        .form-label { font-weight: 600; color: #2d1a10; margin-bottom: 0.5rem; }
        .btn-submit { background-color: #bd5d38; border-color: #bd5d38; color: #fff; font-weight: 600; border-radius: 0.5rem; }
        .btn-submit:hover { background-color: #a44d2d; border-color: #a44d2d; }
        .btn-cancel { background-color: #6c757d; border-color: #6c757d; color: #fff; font-weight: 600; border-radius: 0.5rem; }
        .btn-cancel:hover { background-color: #5a6268; border-color: #5a6268; }
        .is-invalid { border-color: #dc3545 !important; }
        .invalid-feedback { color: #dc3545; font-size: 0.875rem; display: block; margin-top: 0.25rem; }
        footer { background: linear-gradient(90deg, #1e1e23 0%, #2d1a10 100%) !important; border-top: 2px solid #bd5d38; }
        footer .text-muted { color: rgba(255,255,255,0.5) !important; }
    </style>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark">
        <a class="navbar-brand ps-3" href="#">
            <img src="{{asset('berandautama/assets/img/logo1.png')}}" alt="Logo" />
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
                    <i class="fas fa-user-shield fa-fw"></i>
                    <span class="d-none d-md-inline ms-1 small">{{ auth()->user()->name ?? 'Admin' }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><span class="dropdown-item-text text-white-50 small px-3">Role: <strong class="text-warning">Admin</strong></span></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="px-3 py-1">
                            @csrf
                            <button type="submit" class="btn btn-sm" style="background-color: #bd5d38; color: #fff; width: 100%;">
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
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
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
                                <a class="nav-link" href="{{ route('admin.konseling') }}"><i class="fas fa-circle-dot me-1 small"></i> Semua Konseling</a>
                                <a class="nav-link" href="{{ route('admin.pelanggaran') }}"><i class="fas fa-circle-dot me-1 small"></i> Data Pelanggaran</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Data Pengguna
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUsers" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.kelolauser') }}"><i class="fas fa-circle-dot me-1 small"></i> Kelola Pengguna</a>
                                <a class="nav-link" href="{{ route('admin.tambahuser.form') }}"><i class="fas fa-circle-dot me-1 small"></i> Tambah Pengguna</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{ route('admin.siswa') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                            Data Siswa
                        </a>
                        <a class="nav-link" href="{{ route('admin.laporan') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                            Laporan & Statistik
                        </a>
                        <div class="sb-sidenav-menu-heading">Pengaturan</div>
                        <a class="nav-link" href="{{ route('admin.pengaturan') }}">
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

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 pt-4">
                    <div class="page-header">
                        <h1><i class="fas fa-user-edit me-2" style="color:#bd5d38;font-size:1.8rem;"></i>Edit Siswa</h1>
                    </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.siswa') }}">Data Siswa</a></li>
                        <li class="breadcrumb-item active">Edit Siswa</li>
                    </ol>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card content-card">
                                <div class="card-header">
                                    <i class="fas fa-form"></i>
                                    Form Edit Data Siswa
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

                                    <form action="{{ route('admin.updatesiswa', $siswa->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">
                                            <label for="nis" class="form-label">NIS (Nomor Induk Siswa)</label>
                                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ old('nis', $siswa->nis) }}" required>
                                            @error('nis')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}" required>
                                            @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" placeholder="Contoh: X A, XI B" required>
                                            @error('kelas')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" required>
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="Laki-laki" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                <option value="Perempuan" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="no_telepon" class="form-label">Nomor Telepon (Opsional)</label>
                                            <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $siswa->no_telepon) }}">
                                            @error('no_telepon')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat (Opsional)</label>
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat', $siswa->alamat) }}</textarea>
                                            @error('alamat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="d-flex gap-2">
                                            <button type="submit" class="btn btn-submit">
                                                <i class="fas fa-save me-1"></i> Simpan Perubahan
                                            </button>
                                            <a href="{{ route('admin.siswa') }}" class="btn btn-cancel">
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
