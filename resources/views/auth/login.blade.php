@extends('layouts.auth')

@section('title', 'Авторизация')

@section('content')
    <main class="main">
        <div class="content">
            <img class="logo" src="{{ asset('assets/img/icon/logo-green.svg') }}" alt="logo">
            
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-content">
                    <div class="form-fields">
                        <div class="form-field">
                            <input type="text" name="login" placeholder="Имя/Почта" value="{{ old('login') }}" required>
                        </div>

                        <div class="form-field">
                            <input type="password" name="password" placeholder="Пароль" required>
                            <button type="button">
                                <img src="{{ asset('assets/img/icon/eye-close.svg') }}" alt="open">
                            </button>
                        </div>
                    </div>

                    <div class="login-links">
                        <a href="{{ route('password.request') }}">Забыли пароль?</a>
                        <a href="{{ route('register') }}">Еще нет аккаунта?</a>
                    </div>
                </div>

                <button type="submit" class="submit">Войти</button>
            </form>
        </div>
    </main>
@endsection