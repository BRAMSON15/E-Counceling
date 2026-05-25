<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Laporan Pelanggaran | E-Counseling SMA NEGERI 12 AMBON</title>
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
            .btn-primary { background: #bd5d38 !important; border-color: #bd5d38 !important; }
            .btn-primary:hover { background: #a44d2d !important; border-color: #a44d2d !important; }
            .form-label { font-weight: 600; color: #333; }
            .form-control { border: 1px solid #ddd; border-radius: 5px; }
            .form-control:focus { border-color: #bd5d38; box-shadow: 0 0 0 0.2rem rgba(189, 93, 56, 0.25); }
            footer { background: linear-gradient(90deg, #1e1e23 0%, #2d1a10 100%) !important; border-top: 2px solid #bd5d38; }
            footer .text-muted { color: rgba(255,255,255,0.5) !important; }
            footer a { color: rgba(255,255,255,0.6) !important; text-decoration: none; }
            footer a:hover { color: #bd5d38 !important; }
            .dropdown-menu { background: #1e1e23; border: 1px solid rgba(189,93,56,0.3); box-shadow: 0 8px 20px rgba(0,0,0,0.4); }
            .dropdown-item { color: rgba(255,255,255,0.75) !important; }
            .dropdown-item:hover { background: rgba(189,93,56,0.25) !important; color: #fff !important; }
            .logout-btn { background: #bd5d38 !important; border-color: #bd5d38 !important; color: #fff !important; border-radius: 6px; font-weight: 700; font-size: 0.85rem; padding: 0.35rem 0.9rem; transition: all 0.25s; }
            .logout-btn:hover { background: #a44d2d !important; border-color: #a44d2d !important; transform: translateY(-1px); }
            .is-invalid { border-color: #dc3545 !important; }
            .invalid-feedback { color: #dc3545; font-size: 0.875rem; display: block; margin-top: 0.25rem; }
            .table thead th { background: #2d1a10; color: #fff; border-color: rgba(189,93,56,0.3); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.04rem; }
            .table tbody tr:hover { background-color: rgba(189,93,56,0.06); }
            .badge { font-size: 0.75rem; padding: 0.35rem 0.6rem; }
        </style>
    </head>
    <body class="sb-nav-fixed">

        <!-- TOP NAVBAR -->
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
                        <i class="fas fa-chalkboard-teacher fa-fw"></i>
                        <span class="d-none d-md-inline ms-1 small">{{ auth()->user()->name ?? 'Walikelas' }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <span class="dropdown-item-text text-white-50 small px-3">
                                Role: <strong class="text-warning">Walikelas</strong>
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
                            <a class="nav-link" href="{{ route('walikelas.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Pelaporan</div>
                            <a class="nav-link active" href="{{ route('walikelas.laporan') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation-triangle"></i></div>
                                Laporan Pelanggaran
                            </a>
                            <a class="nav-link" href="{{ route('walikelas.datasiswa') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                                Data Siswa Kelas
                            </a>
                            <a class="nav-link" href="{{ route('walikelas.riwayat') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                                Riwayat Laporan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small text-white-50">Login sebagai:</div>
                        <span class="fw-bold">{{ auth()->user()->name ?? 'Walikelas' }}</span>
                    </div>
                </nav>
            </div>

            <!-- MAIN CONTENT -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 pt-4">

                        <!-- Page Header -->
                        <div class="page-header">
                            <h1><i class="fas fa-exclamation-triangle me-2" style="color:#bd5d38;font-size:1.8rem;"></i>Laporan Pelanggaran</h1>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('walikelas.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Laporan Pelanggaran</li>
                        </ol>

                        <!-- SUCCESS MESSAGE -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                <strong>Berhasil!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- FORM LAPORAN -->
                        <div class="row mb-4">
                            <div class="col-lg-8">
                                <div class="card content-card">
                                    <div class="card-header">
                                        <i class="fas fa-plus-circle"></i> Buat Laporan Pelanggaran Baru
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

                                        <form action="{{ route('walikelas.laporan.store') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="siswa_id" class="form-label">Pilih Siswa</label>
                                                <select class="form-control @error('siswa_id') is-invalid @enderror" id="siswa_id" name="siswa_id" required>
                                                    <option value="">-- Pilih Siswa --</option>
                                                    @foreach($siswas ?? [] as $siswa)
                                                        <option value="{{ $siswa->id }}" {{ old('siswa_id') == $siswa->id ? 'selected' : '' }}>
                                                            {{ $siswa->nama }} ({{ $siswa->nis }}) - {{ $siswa->kelas }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('siswa_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="jenis_pelanggaran" class="form-label">Jenis Pelanggaran</label>
                                                <input type="text" class="form-control @error('jenis_pelanggaran') is-invalid @enderror" id="jenis_pelanggaran" name="jenis_pelanggaran" value="{{ old('jenis_pelanggaran') }}" placeholder="Contoh: Terlambat, Tidak Mengerjakan PR" required>
                                                @error('jenis_pelanggaran')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="tanggal_pelanggaran" class="form-label">Tanggal Pelanggaran</label>
                                                <input type="date" class="form-control @error('tanggal_pelanggaran') is-invalid @enderror" id="tanggal_pelanggaran" name="tanggal_pelanggaran" value="{{ old('tanggal_pelanggaran', date('Y-m-d')) }}" required>
                                                @error('tanggal_pelanggaran')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan (Opsional)</label>
                                                <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" rows="4" placeholder="Jelaskan detail pelanggaran...">{{ old('keterangan') }}</textarea>
                                                @error('keterangan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-save me-2"></i> Simpan Laporan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DAFTAR LAPORAN TERBARU -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card content-card">
                                    <div class="card-header">
                                        <i class="fas fa-list"></i> Laporan Pelanggaran Terbaru
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
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($laporan as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->siswa->nama ?? '-' }}</td>
                                                            <td>{{ $item->siswa->kelas ?? '-' }}</td>
                                                            <td>{{ $item->jenis_pelanggaran }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                                                            <td>
                                                                @if($item->status === 'selesai')
                                                                    <span class="badge bg-success">Selesai</span>
                                                                @else
                                                                    <span class="badge bg-warning">Menunggu</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="6" class="text-center py-4 text-muted">
                                                                <i class="fas fa-inbox fa-2x mb-2 d-block" style="color:#bd5d38; opacity:0.4;"></i>
                                                                Belum ada laporan pelanggaran.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3">
                                            {{ $laporan->links() }}
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
