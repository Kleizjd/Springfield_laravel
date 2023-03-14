<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <style>
        .img-circle {
            border-radius: 100%
        }

        .img-responsive {
            max-width: 100%;
            height: auto
        }
    </style>
    <title>Vehicles</title>
</head>

<body>
    {{-- HEADER --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0 ">
        <div class="container-fluid">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="./">
                <span>
                    <img src="http://localhost/WWW/Springfield_News/public/img/logo.jpg" alt="ingesoftware"
                        height="50" width="200">
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('vehicles') }}">Vehicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('config') }}">Ajustes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Categories</a>
                    </li>
                </ul>
            </div> --}}

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="http://localhost/WWW/Springfield_News/views/perfil/Files/juan_david-73.jpg" alt="user"
                        class="img-circle" id="img_profile" width="60">
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <div class="d-flex no-block align-items-center p-15 bg-dark text-white m-b-10">

                            <img src="http://localhost/WWW/Springfield_News/views/perfil/Files/juan_david-73.jpg"
                                alt="user" class="img-circle" width="60">
                            <div class="m-l-10">
                                <h7 class="m-b-0" id="complete_name_window">juan osorio</h7>
                            </div>
                        </div>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('config') }}">Ajustes</a></li>
                    <li><a class="dropdown-item" href="#">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- !HEADER --}}


    <div class="container-fluid">
        <div class="row">
            {{-- SIDEBAR --}}
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">

                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('main') }}">
                                <span data-feather="home"></span>
                                <i class="fas fa-home"> Home - Dashboard</i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('notices') }}">
                                <span data-feather="file"></span>
                                Noticias
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            {{-- !SIDEBAR --}}
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>
</body>

</html>
