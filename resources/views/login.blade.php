<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login - E-Counseling SMA NEGERI 12 AMBON</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Font Awesome icons-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('berandautama/css/styles.css')}}" rel="stylesheet" />
    
    <style>
        .login-page {
            background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.75) 0%, rgba(189, 93, 56, 0.55) 100%), url("{{ asset('berandautama/assets/img/SMA12.jpg') }}") !important;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Muli', 'Inter', -apple-system, sans-serif;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 500px;
        }

        .card-login {
            background: rgba(30, 30, 35, 0.7) !important;
            backdrop-filter: blur(15px) saturate(120%) !important;
            -webkit-backdrop-filter: blur(15px) saturate(120%) !important;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            border-radius: 1.25rem !important;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5) !important;
            color: #fff !important;
            overflow: hidden;
        }

        .card-login .card-header {
            background-color: transparent !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
            padding: 2.5rem 2.25rem 1.5rem 2.25rem !important;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .logo-container img {
            height: 5.5rem;
            width: auto;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.3));
        }

        .card-login .card-header h3 {
            font-weight: 700 !important;
            letter-spacing: 0.05rem;
            text-transform: uppercase;
            color: #fff !important;
            margin-top: 0.75rem !important;
            margin-bottom: 0 !important;
            font-size: 1.5rem;
            text-align: center;
            font-family: 'Muli', sans-serif;
        }

        .card-login .card-header .subtitle {
            color: rgba(255, 255, 255, 0.65);
            font-size: 0.875rem;
            text-align: center;
            margin-top: 0.5rem;
        }

        .card-login .card-body {
            padding: 2rem 2.25rem !important;
        }

        .role-info {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.8);
        }

        .role-info strong {
            display: block;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .role-item {
            margin-bottom: 6px;
            padding-left: 20px;
            position: relative;
        }

        .role-item:last-child {
            margin-bottom: 0;
        }

        .role-item::before {
            content: "→";
            position: absolute;
            left: 0;
            color: #bd5d38;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            font-weight: 600;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 8px;
            display: block;
            font-size: 0.9rem;
        }

        .card-login .form-control {
            background-color: rgba(255, 255, 255, 0.08) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            color: #fff !important;
            border-radius: 0.5rem !important;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .card-login .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .card-login .form-control:focus {
            border-color: #bd5d38 !important;
            box-shadow: 0 0 0 0.25rem rgba(189, 93, 56, 0.35) !important;
            background-color: rgba(255, 255, 255, 0.12) !important;
            outline: none;
        }

        /* Styling autofill text for dark inputs */
        .card-login input:-webkit-autofill,
        .card-login input:-webkit-autofill:hover, 
        .card-login input:-webkit-autofill:focus {
            -webkit-text-fill-color: #ffffff !important;
            -webkit-box-shadow: 0 0 0px 1000px rgba(40, 40, 45, 0.9) inset !important;
            transition: background-color 5000s ease-in-out 0s;
        }

        .btn-custom-primary {
            background-color: #bd5d38 !important;
            border-color: #bd5d38 !important;
            color: #ffffff !important;
            padding: 0.75rem 1.8rem !important;
            font-weight: 700 !important;
            text-transform: uppercase;
            border-radius: 0.5rem !important;
            transition: all 0.3s ease !important;
            width: 100%;
            margin-top: 10px;
            letter-spacing: 0.05rem;
        }

        .btn-custom-primary:hover {
            background-color: #a44d2d !important;
            border-color: #a44d2d !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(189, 93, 56, 0.4) !important;
        }

        .btn-custom-primary:active {
            transform: translateY(0);
        }

        .btn-link-back {
            color: rgba(255, 255, 255, 0.6) !important;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .btn-link-back:hover {
            color: #fff !important;
            transform: translateX(-3px);
        }

        .card-login .card-footer {
            background-color: rgba(0, 0, 0, 0.2) !important;
            border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
            padding: 1.25rem 2.25rem !important;
        }

        .card-login .card-footer a {
            color: rgba(255, 255, 255, 0.7) !important;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 600;
        }

        .card-login .card-footer a:hover {
            color: #bd5d38 !important;
        }

        .alert-custom-danger {
            background-color: rgba(220, 53, 69, 0.2) !important;
            border: 1px solid rgba(220, 53, 69, 0.4) !important;
            color: #ff858f !important;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .alert-custom-danger .btn-close-custom {
            float: right;
            background: transparent;
            border: none;
            color: #ff858f;
            font-size: 1.1rem;
            cursor: pointer;
            line-height: 1;
            padding: 0;
            margin-left: 10px;
        }

        .text-danger-custom {
            color: #ff858f !important;
            font-size: 0.8rem;
            margin-top: 5px;
            display: block;
        }

        .footer-copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.8rem;
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>
<body class="login-page">
    <div class="login-container">
        <div class="card card-login shadow-lg border-0">
            <div class="card-header">
                <div class="logo-container">
                    <img src="{{asset('berandautama/assets/img/logo.webp')}}" alt="Logo SMA 12 Ambon" />
                </div>
                <h3>MASUK SISTEM</h3>
                <p class="subtitle">E-Counseling | SMA NEGERI 12 AMBON</p>
            </div>
            
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-custom-danger" role="alert">
                        <strong>Login Gagal!</strong>
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <!-- <div class="role-info">
                    <strong>Pilih Role Anda:</strong>
                    <div class="role-item"><strong>Admin</strong> - Kelola sistem dan pengguna</div>
                    <div class="role-item"><strong>Guru BK</strong> - Memberikan bimbingan & konseling</div>
                    <div class="role-item"><strong>Walikelas</strong> - Melaporkan kejadian pelanggaran</div>
                </div> -->

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="form-control"
                            placeholder="Masukkan email Anda"
                            required
                        >
                        @error('email')
                            <span class="text-danger-custom">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control"
                            placeholder="Masukkan kata sandi Anda"
                            required
                        >
                        @error('password')
                            <span class="text-danger-custom">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-custom-primary">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </button>
                </form>
            </div>
            
            <div class="card-footer text-center">
                <a class="btn-link-back" href="/">
                    <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
                </a>
            </div>
        </div>
        
        <div class="footer-copyright">
            Copyright &copy; SMA NEGERI 12 AMBON {{ date('Y') }}
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
