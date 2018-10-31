@extends('layouts.app')
@section('title')
    Menu Real | Inserção de Usuário
@endsection

@section('content')
    <div class="container">
        <h1>Inserção de Usuário</h1>
        <hr>
        <form action="{{route('user.store')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="">Nome do usuário:</label>
                <input type="text" name="name" id="" value="{{old('name')}}"
                       class="form-control @if($errors->has('name')) is-invalid @endif">
                @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">E-mail do usuário:</label>
                <input type="email" name="email" id="" value="{{old('email')}}"
                       class="form-control @if($errors->has('email')) is-invalid @endif">
                @if($errors->has('email'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Senha:</label>
                <input type="password" name="password" id="" value="{{old('password')}}"
                       class="form-control @if($errors->has('password')) is-invalid @endif">
                @if($errors->has('password'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('password')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Confirmação de senha:</label>
                <input type="password" name="password_confirmation" id="" value="{{old('password-confirm')}}"
                       class="form-control @if($errors->has('password-confirm')) is-invalid @endif">
                @if($errors->has('password-confirm'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('password-confirm')}}</strong>
                    </span>
                @endif
            </div>
            <input class="btn btn-success btn-lg" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection
