<?php

namespace App\Http\Controllers\Administracao;

use App\Restaurante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestauranteController extends Controller
{
    public function index(){
        $restaurantes = Restaurante::all();

        return view('administracao.restaurante.index', compact('restaurantes'));
    }

    public function new(){
        return view('administracao.restaurante.store');
    }

    public function store(Request $request){
        $restauranteData = $request->all();

        $restaurante = new Restaurante();
        $restaurante->create($restauranteData);

        print 'Restaurante criado com sucesso!';
    }

    public function edit(Restaurante $restaurante){

        return view('administracao.restaurante.edit', compact('restaurante'));

    }

    public function update(Request $request, $id){

        $restauranteData = $request->all();

        $restaurante = Restaurante::findOrFail($id);
        $restaurante->update($restauranteData);

        print 'Restaurante atualizado com sucesso!';
    }

    public function delete($id){
        $restaurante = Restaurante::findOrFail($id);
        $restaurante->delete();

        print 'Restaurante removido com sucesso!';
    }
}
