<html>
<head>
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="container mt-3">
    @include('partials.nav')
    @yield('contenido')
</body>
</html>