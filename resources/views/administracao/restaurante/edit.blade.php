@extends('layouts.app')
@section('title')
    Menu Real | Edição de Restaurante
@endsection

@section('content')
    <div class="container">
        <h1>Edição de Restaurante</h1>
        <hr>
        <form action="{{route('restaurante.update', ['restaurante' => $restaurante->id])}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="">Nome do restaurante:</label>
                <input type="text" name="nome" id="" value="{{$restaurante->nome}}"
                       class="form-control @if($errors->has('nome')) is-invalid @endif">
                @if($errors->has('nome'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('nome')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Endereço do restaurante:</label>
                <input type="text" name="endereco" id="" value="{{$restaurante->endereco}}"
                       class="form-control @if($errors->has('endereco')) is-invalid @endif">
                @if($errors->has('endereco'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('endereco')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Bairro do restaurante:</label>
                <input type="text" name="bairro" id="" value="{{$restaurante->bairro}}"
                       class="form-control @if($errors->has('bairro')) is-invalid @endif">
                @if($errors->has('bairro'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('bairro')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Cidade do restaurante:</label>
                <input type="text" name="cidade" id="" value="{{$restaurante->cidade}}"
                       class="form-control @if($errors->has('cidade')) is-invalid @endif">
                @if($errors->has('cidade'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('cidade')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Telefone do restaurante:</label>
                <input type="text" name="telefone" id="" value="{{$restaurante->telefone}}"
                       class="form-control @if($errors->has('telefone')) is-invalid @endif">
                @if($errors->has('telefone'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('telefone')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Descrição do restaurante:</label>
                <textarea name="descricao" id="" cols="30" rows="10"
                          class="form-control @if($errors->has('descricao')) is-invalid @endif">{{$restaurante->descricao}}</textarea>
                @if($errors->has('descricao'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('descricao')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Responsável pelo restaurante:</label>
                <input type="text" name="id_usuario_responsavel" id="" value="{{$restaurante->id_usuario_responsavel}}"
                       class="form-control @if($errors->has('id_usuario_responsavel')) is-invalid @endif">
                @if($errors->has('id_usuario_responsavel'))
                    <span class="invalid-feedback">
                    <strong>{{$errors->first('id_usuario_responsavel')}}</strong>
                    </span>
                @endif
            </div>
            <input class="btn btn-success btn-lg" type="submit" value="Atualizar">

        </form>
    </div>
@endsection
