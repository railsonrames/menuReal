<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRestauranteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_usuario_responsavel' => 'required',
            'nome' => 'required|min:3',
            'descricao' => 'required|min:150|max:350',
            'endereco' => 'required|min:5',
            'telefone' => 'required|min:8',
            'bairro' => 'required|min:3',
            'cidade' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é fundamental!',
            'descricao.required' => 'A descrição é obrigatória!',
            'endereco.required' => 'Preencha o campo endereço!',
            'telefone.required' => 'O seu telefone é importante!',
            'bairro.required' => 'O bairro é fundamental, você esqueceu dele?!',
            'cidade.required' => 'A cidade é fundamental, você esqueceu dela?!',
            'id_usuario_responsavel.required' => 'É necessário vincular a um responsável',

            'nome.min' => 'Nome curto, hein? No mínimo 3 caracteres.',
            'descricao.min' => 'Detalhes melhor seu empreendimento, no mínimo 150 caracteres.',
            'bairro.min' => 'Estranho, tão pequeno assim o nome do bairro, no mínimo 3 caracteres',
            'cidade.min' => 'Nome pequeno, não? Pelo menos 3 caracteres para o nome da cidade.',
            'endereco,min' => 'Precisam achar seu restaurante, capriche no endereço, no mínimo 5 caracteres, né?',

            'descricao.max' => 'Empolgado, hein? Muito bom isso, mas para ficar bonitinho limite a sua descrição em até 350 caracteres.'
        ];
    }
}
