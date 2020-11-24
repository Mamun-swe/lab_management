<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('admin/css/adminlte.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/OverlayScrollbars.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/style.css') }}" rel="stylesheet" />
    
    <!-- Script -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('admin/js/adminlte.js') }}"></script>
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>

</head>
<body>
    <div id="app">
        @if(Auth::user())
            @include('components.sidemenu') 
        <div class="content-wrapper">
        @endif
            <main>
                @yield('content')
            </main>
        @if(Auth::user())
            </div>
        @endif
    </div>
</body>
</html>
