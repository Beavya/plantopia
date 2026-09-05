@extends('layouts.auth')

@section('title', 'Смена пароля')

@section('content')
    <main class="main">
        <div class="content">
            <img class="logo" src="{{ asset('assets/img/icon/logo-green.svg') }}" alt="logo">
            
            <form class="form" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ request()->route('token') }}">
                <input type="hidden" name="email" value="{{ request()->email }}">
                
                <div class="form-fields">
                    <div class="form-field">
                        <input type="password" name="password" placeholder="Пароль" required>
                        <button type="button">
                            <img src="{{ asset('assets/img/icon/eye-open.svg') }}" alt="close">
                        </button>
                    </div>

                    <div class="form-field">
                        <input type="password" name="password_confirmation" placeholder="Подтверждение пароля" required>
                        <button type="button">
                            <img src="{{ asset('assets/img/icon/eye-close.svg') }}" alt="open">
                        </button>
                    </div>
                </div>
                
                <button type="submit" class="submit">Изменить пароль</button>
            </form>
        </div>
    </main>
@endsection