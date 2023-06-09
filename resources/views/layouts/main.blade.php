<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>
    <div class="container-fluid">
        <!-- ROW HEADER -->
        <div class="row">
            <div class="col-md-12 bg-dark py-2">
                <img src="{{ asset('logo-removebg-preview.png') }}" height="50px" width="50px" alt="logo profile" />
                <span class="text-light font-weight-bold">My Website</span>
                <div class="dropdown float-right">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                            <div class="media">
                                <img class="align-self-center mr-2" src="{{ asset('profile.png') }}" width="80px"
                                    height="80px" alt="Generic placeholder image" />
                                <div class="media-body">
                                    <h5 class="mt-2">{{ Auth::user()->nama_user ?? '' }}</h5>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-emoji-smile-fill"></i> Selamat Pagi
                                        {{ Auth::user()->nama_user ?? '' }}</a>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item border-top" href="#modalset" data-toggle="modal">
                            <i class="bi bi-gear-fill"></i> Setting</a>
                        <a class="dropdown-item border-top" href="/logout" data-toggle="modal" data-target="#modalset">
                            <i class="bi bi-power"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ROW HEADER -->
        <!-- ROW NAVBAR -->
        <div class="row vh-100">
            <div class="col-md-2 border border-dark">
                @include('layouts/navigasi')
            </div>
            <!-- END ROW NAVBAR -->
            <!-- ROW CARD -->

            <div class="col-md-10 mt-4">
                @yield('content')
            </div>
        </div>

        {{-- END ROW CARD --}}
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="modalset">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda Yakin Ingin Logout dari user {{ Auth::user()->name ?? '' }}</p>
                </div>
                <div class="modal-footer">
                    <a href="/logout" class="btn btn-primary">Ok</a>
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Cancle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
