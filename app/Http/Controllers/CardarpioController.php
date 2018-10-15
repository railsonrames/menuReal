<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cardapio;

class CardarpioController extends Controller
{
    public function index() {
        $cardapios = Cardapio::all();
        $total = Cardapio::all() -> count();
        return view('list-cardapios', compact('cardapios', 'total'));
    }

    public function create() {
        return view('include-cardapio');
    }

    public function store(Request $request) {
        $cardapio = new Cardapio;
        $cardapio->nome_item_cardapio = $request->nome_item_cardapio;
        $cardapio->descricao_item_cardapio = $request->descricao_item_cardapio;
        $cardapio->preco_item_cardapio = $request->preco_item_cardapio;
        $cardapio->entrega_item_cardapio = $request->entrega_item_cardapio;
        $cardapio->url_imagem_item_cardapio = $request->url_imagem_item_cardapio;
        $cardapio->save();
        return redirect()->route('cardapio.index')->with('message','Item do cardápio registrado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $cardapio = Cardapio::findOrFail($id);
        return view('alterar-cardapio', compact('cardapio'));
    }

    public function update(Request $request, $id) {
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->nome_item_cardapio = $request->nome_item_cardapio;
        $cardapio->descricao_item_cardapio = $request->descricao_item_cardapio;
        $cardapio->preco_item_cardapio = $request->preco_item_cardapio;
        $cardapio->entrega_item_cardapio = $request->entrega_item_cardapio;
        $cardapio->url_imagem_item_cardapio = $request->url_imagem_item_cardapio;
        $cardapio->save();
        return redirect()->route('cardapio.index')->with('message','Item do cardápio alterado com sucesso!');
    }

    public function destroy($id) {
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->delete();
        return redirect()->route('cardapio.index')->with('message','Item do cardápio excluído com sucesso!');
    }
}
