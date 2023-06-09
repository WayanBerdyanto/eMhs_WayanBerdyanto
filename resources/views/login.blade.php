<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.c
ss"
        integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100" style="background-color: #C1D0B5">
        <div class="card w-25" style="background-color: #D6E8DB; box-shadow:1px 3px rgba(0,0,0,0.5)">
            <div class="card-header" style="background-color: #27374D">
                <div class="text-center">
                    <span class="text-primary h4">Form</span>
                    <span class="text-danger h5">Login</span>
                </div>
            </div>
            <div class="card-body">
                <form action="/ceklogin" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Nama">Username</label>
                        <input type="text" name="nama_user" id="Nama" class="form-control"
                            placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        @if (session('flash_error'))
                            <input type="password" name="password" id="password"
                                class="form-control border border-danger" placeholder="Masukan Password" required>
                            <div class="alert alert-danger fade show" role="alert">
                                <strong>
                                    {{ session('flash_error') }}
                                </strong>
                                <button type="button" class="close" datadismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @else
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Masukan Password" required>
                        @endif
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" onclick="checkPassword()">
                            <label class="form-check-label" for="gridCheck">
                                Lihat Password
                            </label>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <a href="">Lupa Password ?</a>
                        </div>
                    </div>
                    <script>
                        function checkPassword() {
                            var pass =
                                document.getElementById("password").type;
                            if (pass == "password") {
                                document.getElementById("password").type =
                                    "text";
                            } else {
                                document.getElementById("password").type =
                                    "password";
                            }
                        }
                    </script>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w50">Sign-In</button>
                    </div>
                    <div class="form-group d-flex justify-content-center mt3">
                        <span>Don't Have Account?</span>
                    </div>
                    <div class="form-group d-flex justify-content-center mt3">
                        <a href="/register" class="btn btn-primary w-50 text-light">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
    q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.
    js" integrity="sha384-
    UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-
    JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
