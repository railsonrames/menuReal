<?php

namespace App\Http\Controllers\Administracao;

use App\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function index(){
        $users = User::all();

        return view('administracao.user.index', compact('users'));
    }

    public function new(){
        return view('administracao.user.store');
    }

    public function store(CreateUserRequest $request){
        $userData = $request->all();

        $request->validated();

        $user = new User();
        $user->create($userData);

        print 'Usuario criado com sucesso!';
    }

    public function edit(user $user){

        return view('administracao.user.edit', compact('user'));

    }

    public function update(CreateUserRequest $request, $id){

        $userData = $request->all();

        $request->validated();

        $user = user::findOrFail($id);
        $user->update($userData);

        print 'Usuário atualizado com sucesso!';
    }

    public function delete($id){
        $user = user::findOrFail($id);
        $user->delete();

        print 'Usuário removido com sucesso!';
    }
}
