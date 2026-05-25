<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Data Pelanggaran - E-Counseling SMA NEGERI 12 AMBON" />
    <title>Data Pelanggaran | E-Counseling</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{asset('beranda2/css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
        .btn-sm { border-radius: 0.4rem; font-size: 0.8rem; padding: 0.4rem 0.8rem; }
        .btn-edit { background-color: #bd5d38; border-color: #bd5d38; color: #fff; }
        .btn-edit:hover { background-color: #a44d2d; border-color: #a44d2d; }
        .btn-delete { background-color: #dc3545; border-color: #dc3545; color: #fff; }
        .btn-delete:hover { background-color: #c82333; border-color: #c82333; }
        .badge-pending { background-color: #ffc107; color: #000; }
        .badge-selesai { background-color: #28a745; color: #fff; }
        .badge-proses { background-color: #17a2b8; color: #fff; }
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
                                <a class="nav-link active" href="{{ route('admin.pelanggaran') }}"><i class="fas fa-circle-dot me-1 small"></i> Data Pelanggaran</a>
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
                        <h1><i class="fas fa-exclamation-triangle me-2" style="color:#bd5d38;font-size:1.8rem;"></i>Data Pelanggaran</h1>
                    </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Konseling</a></li>
                        <li class="breadcrumb-item active">Data Pelanggaran</li>
                    </ol>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card content-card">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Daftar Pelanggaran Siswa
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="datatablesSimple">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>NIS</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pelanggaran as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->siswa->nama ?? '-' }}</td>
                                                <td>{{ $item->siswa->nis ?? '-' }}</td>
                                                <td>{{ $item->jenis_pelanggaran }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                                                <td>
                                                    @if ($item->status == 'pending')
                                                        <span class="badge badge-pending">Pending</span>
                                                    @elseif ($item->status == 'selesai')
                                                        <span class="badge badge-selesai">Selesai</span>
                                                    @else
                                                        <span class="badge badge-proses">Proses</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-edit" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="#" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-delete" title="Hapus">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center text-muted py-4">
                                                    <i class="fas fa-inbox fa-2x mb-2"></i><br>
                                                    Tidak ada data pelanggaran
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('datatablesSimple');
            if (table) {
                new DataTable(table);
            }
        });
    </script>
</body>
</html>
