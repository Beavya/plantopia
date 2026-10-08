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

                        <div class="form-field-error">
                            <div class="form-field @error('email') field-error @enderror @error('password') field-error @enderror @error('login') field-error @enderror">
                                <img class="register-form-icon" src="{{ asset('assets/img/icon/email-green.svg') }}" alt="mail">
                                <input type="email" name="email" placeholder="Почта" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-field-error">
                            <div class="form-field @error('email') field-error @enderror @error('password') field-error @enderror @error('login') field-error @enderror">
                                <input type="password" name="password" placeholder="Пароль">
                                <button type="button" class="toggle-password">
                                    <img src="{{ asset('assets/img/icon/eye-open.svg') }}" alt="toggle">
                                </button>
                            </div>

                            @if ($errors->any())
                                <div class="error-list">
                                    @foreach ($errors->unique() as $error)
                                        <span class="error-text">{{ $error }}</span>
                                    @endforeach
                                </div>
                            @endif
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
