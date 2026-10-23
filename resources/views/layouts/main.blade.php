<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    @stack('styles')
    @stack('scripts')
    <script src="{{ asset('assets/js/forms.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        @yield('content')
        @include('partials.footer')
    </div>
</body>
</html>
