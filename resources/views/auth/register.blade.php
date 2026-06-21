<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h2 class="text-center">
                                Register
                            </h2>
                            <form method="POST" action="/register">
                                @csrf
                                <input class="form-control mb-3" name="name" placeholder="Nama">
                                <input class="form-control mb-3" name="email" placeholder="Email">
                                <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                                <input class="form-control mb-3" type="password" name="password_confirmation" placeholder="Konfirmasi Password">
                                <button class="btn btn-success w-100">
                                    Daftar
                                </button>
                            </form>
                            <div class="text-center mt-3">
                                <span>
                                    Sudah mempunyai akun?
                                </span>
                                <a href="{{ route('login') }}" class="text-primary">
                                    Login disini
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>