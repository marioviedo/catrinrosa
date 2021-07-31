<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-black font-serif">
    <!-- Header -->
    @include('partials.header')
    <!-- end Header -->

    <!-- Content -->
    <div class="container mx-auto pt-36 pb-4">
        @yield('content')
    </div>
    <!-- end Content -->

    <!-- Footer -->
    @include('partials.footer')
    <!-- end Footer -->

</body>
</html>