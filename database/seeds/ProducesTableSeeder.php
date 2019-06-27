<?php

use App\Models\Produce;
use Illuminate\Database\Seeder;

class ProducesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produce::create([
            'nome' => 'Desktop',
            'descricao' => 'Perfeita para o seu dia a dia, a linha Inspiron combina produtividade e desempenho com os 
                mais recentes processadores e várias opções de designs e tamanhos.',
            'peso' => 3.5
        ]);
    }
}
