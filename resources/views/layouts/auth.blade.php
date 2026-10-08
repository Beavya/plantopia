<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <script src="{{ asset('assets/js/auth.js') }}"></script>
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <a href="{{ url('/') }}">На главную</a>
        </header>

        @yield('content')
    </div>
</body>
</html>
