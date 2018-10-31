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
        $restaurante = new \App\Restaurante();
        $restaurante->create([
            'nome' => 'Saborear',
            'descricao' => 'Tradicional self-service à quilo com grande variedade de pratos típicamente originários da culinária mineira, churrasco, massas e saladas de alto padrão.',
            'endereco' => 'QNO 03 CONJ. P LT. 17',
            'bairro' => 'Setor O',
            'cidade' => 'Brasília',
            'telefone' => '6133749535',
            'id_usuario_responsavel' => 1
        ]);
        $restaurante->create([
            'nome' => 'Fausto & Emanuel',
            'descricao' => 'Bar e restaurante com buffet almoço de segunda a domingo e Happy Hour com dose dupla de chopp e petiscos dignos de premiação.',
            'endereco' => 'SHCN SQN 209 BL. A LJ. 15/29',
            'bairro' => 'Asa Norte',
            'cidade' => 'Brasília',
            'telefone' => '6133407552',
            'id_usuario_responsavel' => 1
        ]);
    }
}
