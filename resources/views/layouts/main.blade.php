<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" >

    {{--  Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <title>WPU Blog | {{ $title }}</title>
</head>
<body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="{{asset('js/bootstrap.js')}}" ></script>
    
</body>
</html>
