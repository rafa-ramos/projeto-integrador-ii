<?php

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Address::create([
            'cep' => '12345678',
            'rua' => "Teste",
            'numero' => '987',
            'bairro' => "Petrópolis",
            //'endereco_principal' => true,
            'cidade_id' => "1",
            'usuario_id' => '1'
        ]);
    }
}
