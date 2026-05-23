<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Walikelas | E-Counseling - SMA NEGERI 12 AMBON</title>
        <link href="{{asset('beranda2/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            .login-page {
                background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(189, 93, 56, 0.6) 100%), url("{{ asset('berandautama/assets/img/SMA12.jpg') }}") !important;
                background-size: cover !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-attachment: fixed !important;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                font-family: 'Muli', 'Inter', -apple-system, sans-serif;
            }
            .card-login {
                background: rgba(30, 30, 35, 0.65) !important;
                backdrop-filter: blur(15px) saturate(120%) !important;
                -webkit-backdrop-filter: blur(15px) saturate(120%) !important;
                border: 1px solid rgba(255, 255, 255, 0.12) !important;
                border-radius: 1.25rem !important;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5) !important;
                color: #fff !important;
            }
            .card-login .card-header {
                background-color: transparent !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
                padding-top: 2rem !important;
                padding-bottom: 1.5rem !important;
            }
            .card-login .card-header h3 {
                font-weight: 700 !important;
                letter-spacing: 0.05rem;
                text-transform: uppercase;
                color: #fff !important;
                margin-top: 0.75rem !important;
                margin-bottom: 0 !important;
                font-size: 1.5rem;
            }
            .logo-container {
                display: flex;
                justify-content: center;
            }
            .logo-container img {
                height: 4.5rem;
                width: auto;
                filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.3));
            }
            .card-login .card-body {
                padding: 2rem 2.25rem !important;
            }
            .card-login .form-control {
                background-color: rgba(255, 255, 255, 0.08) !important;
                border: 1px solid rgba(255, 255, 255, 0.15) !important;
                color: #fff !important;
                border-radius: 0.5rem !important;
                transition: all 0.3s ease;
            }
            .card-login .form-control:focus {
                border-color: #bd5d38 !important;
                box-shadow: 0 0 0 0.25rem rgba(189, 93, 56, 0.3) !important;
                background-color: rgba(255, 255, 255, 0.12) !important;
            }
            .card-login .form-floating label {
                color: rgba(255, 255, 255, 0.6) !important;
            }
            .card-login .form-floating > .form-control:focus ~ label,
            .card-login .form-floating > .form-control:not(:placeholder-shown) ~ label {
                color: #ffffff !important;
                opacity: 0.8;
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
                padding: 0.65rem 1.8rem !important;
                font-weight: 700 !important;
                text-transform: uppercase;
                border-radius: 0.5rem !important;
                transition: all 0.3s ease !important;
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
            }
            .btn-link-back:hover {
                color: #fff !important;
                transform: translateX(-3px);
            }
            .card-login .card-footer {
                background-color: transparent !important;
                border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
                padding-top: 1.25rem !important;
                padding-bottom: 1.25rem !important;
            }
            .card-login .card-footer a {
                color: rgba(255, 255, 255, 0.7) !important;
                text-decoration: none;
                transition: color 0.3s ease;
            }
            .card-login .card-footer a:hover {
                color: #bd5d38 !important;
            }
            .footer-custom {
                background-color: rgba(0, 0, 0, 0.45) !important;
                backdrop-filter: blur(10px);
                border-top: 1px solid rgba(255, 255, 255, 0.05);
            }
            .footer-custom a, .footer-custom .text-muted {
                color: rgba(255, 255, 255, 0.5) !important;
            }
            .footer-custom a:hover {
                color: #bd5d38 !important;
            }
            .form-check-input:checked {
                background-color: #bd5d38 !important;
                border-color: #bd5d38 !important;
            }
        </style>
    </head>
    <body class="login-page">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card card-login shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div class="logo-container">
                                            <img src="{{asset('berandautama/assets/img/logo.webp')}}" alt="Logo SMA 12 Ambon" />
                                        </div>
                                        <h3 class="text-center font-weight-light my-4">MASUK SISTEM</h3>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Alamat Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Kata Sandi</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Ingat Kata Sandi</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn-link-back" href="/"><i class="fas fa-arrow-left"></i> Kembali</a>
                                                <a class="btn btn-custom-primary" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Belum punya akun? Daftar sekarang!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 footer-custom mt-auto">
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
