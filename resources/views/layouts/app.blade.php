<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script>

        window.Kioosk = <?php echo json_encode([
            'user'      => Auth::user()
        ]); ?>
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <div class="bg-gray-500">
            @include('partials.navbar')
    
        </div>
    
    
        <div class="container flex flex-col flex-col-reverse sm:flex-row mb-4 mx-auto mt-6 xl:max-w-6xl">
    
            {{-- Content goes here --}}
            @yield('content')
    
        </div>
    </div>



</body>

<script src="{{ asset('js/app.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/jquery.autocomplete.js') }}"></script>
    @yield('footer-assets')
</html>
