@extends('layouts.auth')

@section('title', 'Главная')

@section('content')
    <main class="main">
        <div class="content">
            <h1>Главная страница</h1>
            <p>Ты вошёл в систему!</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Выйти</button>
            </form>
        </div>
    </main>
@endsection
