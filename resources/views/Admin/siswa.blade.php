<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Data Siswa | E-Counseling SMA NEGERI 12 AMBON</title>
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
            .content-card .card-header { background: linear-gradient(90deg, #2d1a10 0%, #bd5d38 100%); color: #ffffff; font-weight: 700; padding: 1rem 1.5rem; display: flex; justify-content: space-between; align-items: center; }
            .table thead th { background: #2d1a10; color: #fff; font-weight: 700; }
            .table tbody tr:hover { background-color: rgba(189,93,56,0.06); }
            .btn-tambah { background: #bd5d38; border: none; color: #fff; padding: 0.5rem 1.2rem; border-radius: 6px; font-weight: 700; }
            .btn-tambah:hover { background: #a44d2d; color: #fff; }
            footer { background: linear-gradient(90deg, #1e1e23 0%, #2d1a10 100%) !important; border-top: 2px solid #bd5d38; }
        </style>
    </head>
    <body class="sb-nav-fixed">

        <!-- TOP NAVBAR -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
            <a class="navbar-brand ps-3" href="#">
                <img src="{{asset('berandautama/assets/img/logo.webp')}}" alt="Logo" style="height: 2rem;" />
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
                        <i class="fas fa-user-shield fa-fw"></i>
                        <span class="d-none d-md-inline ms-1 small">{{ auth()->user()->name ?? 'Admin' }}</span>
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
            <!-- SIDENAV -->
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
                            <a class="nav-link" href="{{ route('admin.konseling') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div>
                                Data Konseling
                            </a>
                            <a class="nav-link" href="{{ route('admin.pelanggaran') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation-triangle"></i></div>
                                Data Pelanggaran
                            </a>
                            <a class="nav-link" href="{{ route('admin.kelolauser') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Data Pengguna
                            </a>
                            <a class="nav-link active" href="{{ route('admin.siswa') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                                Data Siswa
                            </a>
                            <a class="nav-link" href="{{ route('admin.laporan') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                Laporan & Statistik
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- MAIN CONTENT -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 pt-4">

                        <div class="page-header">
                            <h1><i class="fas fa-user-graduate me-2" style="color:#bd5d38;"></i>Data Siswa</h1>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Siswa</li>
                        </ol>

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card content-card">
                                    <div class="card-header">
                                        <span><i class="fas fa-list"></i> Daftar Siswa</span>
                                        <a href="{{ route('admin.tambahsiswa.form') }}" class="btn-tambah">
                                            <i class="fas fa-plus"></i> Tambah Siswa
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover align-middle">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>NIS</th>
                                                        <th>Nama</th>
                                                        <th>Kelas</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($siswa as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->nis }}</td>
                                                            <td>{{ $item->nama }}</td>
                                                            <td>{{ $item->kelas }}</td>
                                                            <td>{{ $item->jenis_kelamin }}</td>
                                                            <td>
                                                                <a href="{{ route('admin.editsiswa', $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                                <form action="{{ route('admin.deletesiswa', $item->id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="6" class="text-center py-4 text-muted">
                                                                <i class="fas fa-inbox fa-2x mb-2 d-block" style="color:#bd5d38; opacity:0.4;"></i>
                                                                Belum ada data siswa.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3">
                                            {{ $siswa->links() }}
                                        </div>
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
