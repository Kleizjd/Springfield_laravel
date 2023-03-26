<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script> --}}
    
    @vite(['resources/js/app.js'])
    <style>
        .img-circle {
            border-radius: 100%
        }

        .img-responsive {
            max-width: 100%;
            height: auto
        }
    </style>
    <title>@yield('title')</title>
</head>

<body>
    {{-- HEADER --}}
    @include('components.header')
    {{-- !HEADER --}}
    <div class="container-fluid">
        <div class="row">
            {{-- SIDEBAR --}}
            @include('components.sidebar')
            {{-- !SIDEBAR --}}
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
                    @yield('content')
                </div>
            </main>
            @include('components.footer')

        </div>
    </div>

</body>

</html>
