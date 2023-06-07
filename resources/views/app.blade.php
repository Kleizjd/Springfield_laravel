<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">   
       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
   
       <!-- Scripts -->
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
    {{-- FIN HEADER --}}

    <div class="container-fluid">
        <div class="row">
            {{-- SIDEBAR --}}
            @include('components.sidebar')
            {{-- FIN SIDEBAR --}}
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
