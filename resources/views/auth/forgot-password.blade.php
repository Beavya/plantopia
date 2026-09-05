@extends('layouts.auth')

@section('title', 'Восстановление пароля')

@section('content')
    <main class="main">
        <div class="content">
            <img class="logo" src="{{ asset('assets/img/icon/logo-green.svg') }}" alt="logo">
            
            {{-- Временно без action и method --}}
            <form class="form">
                @csrf
                <div class="form-content">
                    <div class="form-field">
                        <img src="{{ asset('assets/img/icon/email-green.svg') }}" alt="email">
                        <input type="email" name="email" placeholder="Почта" value="{{ old('email') }}" required>
                    </div>

                    <p>Отправить письмо повторно 01:00</p>
                </div>

                <button type="submit" class="submit">Отправить письмо</button>
            </form>
        </div>
    </main>
@endsection