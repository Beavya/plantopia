@extends('layouts.auth')

@section('title', 'Восстановление пароля')

@section('content')
    <main class="main">
        <div class="content">
            <img class="logo" src="{{ asset('assets/img/icon/logo-green.svg') }}" alt="logo">

            <form class="form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-content">
                    <div class="form-field-error">
                        <div class="form-field">
                            <img src="{{ asset('assets/img/icon/email-green.svg') }}" alt="email">
                            <input type="email" name="email" placeholder="Почта">
                        </div>
                    </div>

                    <p>Новый пароль придет на почту, после отправки вас перенаправит на авторизацию</p>
                </div>

                <button type="submit" class="submit">Отправить письмо</button>
            </form>
        </div>
    </main>
@endsection
