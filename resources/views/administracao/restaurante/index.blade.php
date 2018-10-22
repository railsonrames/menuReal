@extends('layouts.app')
@section('title')
    Menu Real | Administração de Restaurantes
@endsection
@section('content')
    <div class="container">
        <a href="{{route('restaurante.new')}}" class="float-right btn btn-primary"><i class="fa fa-rocket"></i> Novo</a>
        <h1>Restaurantes Cadastrados</h1>
        <hr>

        {{--<div class="row">--}}
            {{--<div class="col-md-3">Nome</div>--}}
            {{--<div class="col-md-4">Descrição</div>--}}
            {{--<div class="col-md-2">Criado em</div>--}}
            {{--<div class="col-md-3">Ações</div>--}}
        {{--</div>--}}

        {{--@foreach($restaurantes as $r)--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3">{{$r->nome}}</div>--}}
                {{--<div class="col-md-4">{{$r->descricao}}</div>--}}
                {{--<div class="col-md-2">{{$r->created_at}}</div>--}}
                {{--<div class="col-md-3">--}}
                    {{--<a href="{{route('restaurante.edit',['restaurante' => $r->id])}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</a>--}}
                    {{--<a href="{{route('restaurante.delete',['id' => $r->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}

        <table class="table table-hover">
            <thread>
                <tr class="d-flex">
                    {{--<th style="width: 20%">Nome</th>--}}
                    {{--<th style="width: 40%">Descrição</th>--}}
                    {{--<th style="width: 20%">Criado em</th>--}}
                    {{--<th style="width: 30%">Ações</th>--}}
                    {{--<th class="w-25">Nome</th>--}}
                    {{--<th class="w-25">Descrição</th>--}}
                    {{--<th class="w-25">Criado em</th>--}}
                    {{--<th class="w-25">Ações</th>--}}
                    <th scope="col" class="col-2">Nome</th>
                    <th scope="col" class="col-5">Descrição</th>
                    <th scope="col" class="col-2">Criado em</th>
                    <th scope="col" class="col-3">Ações</th>
                </tr>
            </thread>
            <tbody>
            @foreach($restaurantes as $r)
                <tr class="d-flex">
                    <td scope="row" class="col-2">{{$r->nome}}</td>
                    <td class="col-5">{{$r->descricao}}</td>
                    <td class="col-2">{{$r->created_at}}</td>
                    <td class="col-3">
                        <a href="{{route('restaurante.edit',['restaurante' => $r->id])}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                        <a href="{{route('restaurante.delete',['id' => $r->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
