@extends('layouts.personal-account')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/auth.js') }}" defer></script>
    <script src="{{ asset('assets/js/settings.js') }}" defer></script>
@endpush

@section('title', 'Настройки')
@section('header-title', 'Настройки')
@section('nav-settings', 'sidebar-nav-item-active')

@section('content')
    <div class="container-edits">
        <section class="edit-form">
            <h4>Персональные данные:</h4>

            <form method="POST" action="{{ route('settings.profile') }}" class="container-edit-form">
                @csrf

                <div class="edit-form-fields">
                    <div class="form-field-error">
                        <div class="edit-form-field">
                            <img class="edit-form-icon" src="{{ asset('assets/img/icon/person.svg') }}" alt="person">
                            <input type="text" name="name" placeholder="Имя" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="form-field-error">
                        <div class="edit-form-field">
                            <img class="edit-form-icon" src="{{ asset('assets/img/icon/email-green.svg') }}" alt="mail">
                            <input type="email" name="email" placeholder="Почта" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="form-field-error">
                        <div class="edit-form-field">
                            <input type="password" name="password" placeholder="Пароль">
                            <button type="button" class="toggle-password">
                                <img src="{{ asset('assets/img/icon/eye-open.svg') }}" alt="toggle">
                            </button>
                        </div>
                    </div>

                    <div class="form-field-error">
                        <div class="edit-form-field">
                            <input type="password" name="password_confirmation" placeholder="Подтверждение пароля">
                            <button type="button" class="toggle-password">
                                <img src="{{ asset('assets/img/icon/eye-open.svg') }}" alt="toggle">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="edit-form-btn">
                    <button type="submit">Подтвердить изменения</button>
                </div>
            </form>
        </section>

        <section class="edit-avatar-img">
            <img id="current-avatar" src="{{ asset('assets/img/avatars/' . $user->avatar->file) }}" alt="avatar">
        </section>

        <section class="edit-avatar">
            <form method="POST" action="{{ route('settings.avatar') }}">
                @csrf
                <div class="avatars">
                    @foreach ($avatars as $avatar)
                        <img src="{{ asset('assets/img/avatars/' . $avatar->file) }}"
                             alt="avatar"
                             class="avatar-option"
                             data-file="{{ $avatar->file }}"
                             data-id="{{ $avatar->id }}">
                    @endforeach
                </div>
                <input type="hidden" name="avatar_id" id="avatar-id" value="{{ $user->avatar_id }}">
                <div class="avatar-btn">
                    <button type="submit">Изменить аватар</button>
                </div>
            </form>
        </section>
    </div>
@endsection
