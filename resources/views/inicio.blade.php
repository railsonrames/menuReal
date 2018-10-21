@extends('layout')

@section('title')
    Menu Real - Início
@endsection

@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Início</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registre-se</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            @php
                $hora = new DateTime();
                if ($hora->format('H') < 15)
                echo 'Onde vamos almoçar hoje?';
                else
                echo 'Onde vamos jantar hoje?';
            @endphp
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
        @php($variavelShow = 'Valor místico')
            {{$variavelShow}}<br>

    </div>
@endsection
