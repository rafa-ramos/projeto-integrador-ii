<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'nome' => 'Passo Fundo',
            'state_id' => "1"
        ]);
    }
}
