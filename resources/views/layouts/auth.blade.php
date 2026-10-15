<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    @stack('styles')
    @stack('scripts')
    <script src="{{ asset('assets/js/auth.js') }}" defer></script>
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
