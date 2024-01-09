<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/bootstrap-carousel.css">
    <link rel="stylesheet" href="/style/mystyle.css">
    <title>Growit</title>
</head>

<body class="bg-dark text-light min-vh-100">

    @include('pages.layouts.header')

    @yield('container')
    
    @include('pages.layouts.footer')
    {{-- JAVASCRIPT --}}
    <script src="/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>

</html>
