@extends('layouts.app')
@section('title')
    Menu Real | Administração de Usuários
@endsection
@section('content')
    <div class="container">
        <a href="{{route('user.new')}}" class="float-right btn btn-primary"><i class="fa fa-rocket"></i> Novo</a>
        <h1>Usuários Cadastrados</h1>
        <hr>

        <table class="table table-hover">
            <thread>
                <tr class="d-flex">
                    <th scope="col" class="col-2">Nome</th>
                    <th scope="col" class="col-5">E-mail</th>
                    <th scope="col" class="col-2">Criado em</th>
                    <th scope="col" class="col-3">Ações</th>
                </tr>
            </thread>
            <tbody>
            @foreach($users as $u)
                <tr class="d-flex">
                    <td scope="row" class="col-2">{{$u->name}}</td>
                    <td class="col-5">{{$u->email}}</td>
                    <td class="col-2">{{$u->created_at}}</td>
                    <td class="col-3">
                        <a href="{{route('user.edit',['user' => $u->id])}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                        <a href="{{route('user.delete',['id' => $u->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
