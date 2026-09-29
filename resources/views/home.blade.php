@extends('layouts.auth')

@section('title', 'Главная')

@section('content')
    <main class="main">
        <div class="content">
            <h1>Главная страница</h1>
            <p>Ты вошёл в систему!</p>
            <a href="{{ route('logout') }}">Выйти</a>
        </div>
    </main>
@endsection
