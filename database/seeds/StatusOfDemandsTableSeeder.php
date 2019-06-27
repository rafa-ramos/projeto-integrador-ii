<?php

use App\Models\StatusOfDemand;
use Illuminate\Database\Seeder;

class StatusOfDemandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusOfDemand::create([
            'descricao' => 'Separado em Estoque'
        ]);
        StatusOfDemand::create([
            'descricao' => 'Em transporte'
        ]);
        StatusOfDemand::create([
            'descricao' => 'Entrege'
        ]);
        StatusOfDemand::create([
            'descricao' => 'Ninguém para receber'
        ]);
        StatusOfDemand::create([
            'descricao' => 'Devolvido'
        ]);
    }
}
