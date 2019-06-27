<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Models\State;
use App\Http\Controllers\Controller;
use DB;

class CityController extends Controller
{
    public function index() {
        //$cities = City::all();
        /*
         * Quando sobrar tempo implementar médodo no Model
         */
        $cities = DB::table('cities')
            ->join('states', 'states.id', '=', 'cities.state_id')
            ->select('cities.id', 'cities.nome', 'states.nome as estado')
            ->get();

        return view('admin.city.list', ['cities'=>$cities]);
    }

    public function create() {
        $states = State::pluck('nome');
        return view('admin.city.create', compact('states'));
    }

    public function store(CityRequest $request) {
        $new_city = $request->all();
        $response = City::create($new_city);

        if ($response) {
            $message = 'Cidade Cadastrada com Sucesso!';
            return redirect()->route('admin.city')->with('success', $message);
        } else {
            $message = 'Não foi possível cadastrar!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function destroy($id) {
        $response = City::find($id)->delete();
        if ($response) {
            $message = 'Cidade Removida com Sucesso!';
            return redirect()->route('admin.city')->with('success', $message);
        } else {
            $message = 'Não foi Possível Remover!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function edit($id) {
        $city = City::find($id);
    return view('admin.city.edit', compact('city'));
    }

    public function  update(CityRequest $request, $id) {
        $response = City::find($id)->update($request->all());

        if ($response) {
            $message = 'Cidade Alterada com Sucesso!';
            return redirect()->route('admin.city')->with('success', $message);
        } else {
            $message = 'Não foi Possível Alterar!';
            return redirect()->back() - with('error', $message);
        }
    }
}
