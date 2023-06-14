<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CorSeeder extends Seeder
{
    public function run()
    {
        $corModel = new \App\Models\CorModel();

        $cores = [
            [
                'nome' => 'Amarela',
                'descricao' => 'Descricao da Cor',
            ],
            [
                'nome' => 'Azul',
                'descricao' => 'Descricao da Cor',
            ],
            [
                'nome' => 'Vermelho',
                'descricao' => 'Descricao da Cor',
            ],
            [
                'nome' => 'Verde',
                'descricao' => 'Descricao da Cor',
            ],            [
                'nome' => 'Branco',
                'descricao' => 'Descricao da Cor',
            ],
            [
                'nome' => 'Preto',
                'descricao' => 'Descricao da Cor',
            ],            
        ];
      //  dd($cores);

      foreach($cores as $cor){

        $corModel ->insert($cor);

      }

      echo 'Cores inseridas com Sucesso!';

    }
}
