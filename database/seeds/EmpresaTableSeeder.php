<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = new \App\Empresa();
        $empresa->create([
            'nome_empresa' => 'Saborear',
            'descricao_empresa' => 'Tradicional self-service à quilo com grande variedade de pratos típicamente originários da culinária mineira, churrasco, massas e saladas de alto padrão.',
            'endereco_empresa' => 'QNO 03 CONJ. P LT. 17',
            'bairro_empresa' => 'Setor O',
            'cidade_empresa' => 'Brasília',
            'telefone_empresa' => '6133749535',
            'id_usuario_responsavel' => 1
        ]);
        $empresa->create([
            'nome_empresa' => 'Fausto & Emanuel',
            'descricao_empresa' => 'Bar e restaurante com buffet almoço de segunda a domingo e Happy Hour com dose dupla de chopp e petiscos dignos de premiação.',
            'endereco_empresa' => 'SHCN SQN 209 BL. A LJ. 15/29',
            'bairro_empresa' => 'Asa Norte',
            'cidade_empresa' => 'Brasília',
            'telefone_empresa' => '6133407552',
            'id_usuario_responsavel' => 1
        ]);
    }
}
