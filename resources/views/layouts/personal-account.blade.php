<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/personal-account.css') }}">
    @stack('styles')
    @stack('scripts')
    <script src="{{ asset('assets/js/forms.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        <main class="profile-main">
            <aside class="sidebar">
                <div class="sidebar-content">
                    <div class="sidebar-avatar">
                        <img src="{{ asset('assets/img/avatars/' . $user->avatar->file) }}" alt="avatar">
                        <button class="sidebar-avatar-edit">
                            <img src="{{ asset('assets/img/icon/pancil-green.svg') }}" alt="edit">
                        </button>
                    </div>
                    <div class="sidebar-info">
                        <p class="sidebar-username">{{ $user->name }}</p>
                        <nav class="sidebar-nav">
                            <div class="sidebar-nav-item @yield('nav-collection')">
                                <img src="{{ asset('assets/img/icon/book-green.svg') }}" alt="book">
                                <a href="#">Коллекция</a>
                            </div>
                            <div class="sidebar-nav-item @yield('nav-settings')">
                                <img src="{{ asset('assets/img/icon/settings.svg') }}" alt="settings">
                                <a href="#">Настройки</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <form class="sidebar-logout" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Выход</button>
                </form>
            </aside>

            <div class="profile-main-content">
                @yield('content')
            </div>
        </main>

        @include('partials.footer')
    </div>
</body>
</html>
