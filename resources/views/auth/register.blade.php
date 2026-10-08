@extends('layouts.auth')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
@endpush

@section('title', 'Регистрация')

@section('content')
    <main class="main register">
        <div class="content register">
            <img class="logo" src="{{ asset('assets/img/icon/logo-green.svg') }}" alt="logo">

            <form class="form register" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-content">
                    <div class="form-fields">

                        <div class="form-field-error">
                            <div class="form-field @error('name') field-error @enderror">
                                <img class="register-form-icon" src="{{ asset('assets/img/icon/person.svg') }}" alt="person">
                                <input type="text" name="name" placeholder="Имя" value="{{ old('name') }}">
                            </div>
                            @if ($errors->has('name'))
                                <div class="error-list">
                                    @foreach ($errors->get('name') as $error)
                                        <span class="error-text">{{ $error }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="form-field-error">
                            <div class="form-field @error('email') field-error @enderror">
                                <img class="register-form-icon" src="{{ asset('assets/img/icon/email-green.svg') }}" alt="mail">
                                <input type="email" name="email" placeholder="Почта" value="{{ old('email') }}">
                            </div>
                            @if ($errors->has('email'))
                                <div class="error-list">
                                    @foreach ($errors->get('email') as $error)
                                        <span class="error-text">{{ $error }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="form-field-error">
                            <div class="form-field @error('password') field-error @enderror">
                                <input type="password" name="password" placeholder="Пароль">
                                <button type="button" class="toggle-password">
                                    <img src="{{ asset('assets/img/icon/eye-open.svg') }}" alt="toggle">
                                </button>
                            </div>
                        </div>

                        <div class="form-field-error">
                            <div class="form-field @error('password') field-error @enderror">
                                <input type="password" name="password_confirmation" placeholder="Подтверждение пароля">
                                <button type="button" class="toggle-password">
                                    <img src="{{ asset('assets/img/icon/eye-close.svg') }}" alt="toggle">
                                </button>
                            </div>
                            @if ($errors->has('password'))
                                <div class="error-list">
                                    @foreach ($errors->get('password') as $error)
                                        <span class="error-text">{{ $error }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                    </div>

                    <a href="{{ route('login') }}">Уже есть аккаунт?</a>
                </div>

                <button type="submit" class="submit">Регистрация</button>
            </form>
        </div>
    </main>
@endsection
