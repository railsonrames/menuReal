@extends('layout')

@section('title')
    Hello | Teste Page
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
            O novo presidente do Brasil 2018
            <br>
            Seria você {{$name}}?
            <br>
            Mito {{10 + 7}}
        </div>
        @if($name == 'teste')
            @include('includes.any')
        @else
            <h1>Mito tô</h1>
        @endif
        @isset($name)
            <h2>Desenvolvimento com Laravel</h2>
        @endisset
        @empty($name)
            <h2>Amor de mais!</h2>
        @endempty
    </div>
@endsection
