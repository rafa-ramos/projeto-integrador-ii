<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\State;
use App\Models\City;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class AddressController extends Controller
{
    public function index() {
        /*
         * Quando sobrar tempo implementar médodo no Model
         */
        $addresses = DB::table('addresses')
            ->join('cities', 'cities.id', '=', 'addresses.cidade_id')
            ->join('users', 'users.id', '=', 'addresses.usuario_id')
            ->select('addresses.id', 'addresses.rua', 'addresses.numero', 'addresses.bairro', 'cities.nome as cidade', 'users.name as usuario')
            ->get();

        return view('admin.address.list', ['addresses'=>$addresses]);
    }

    public function create() {
        $cities = City::pluck('nome');
        $users = User::pluck('name');
        return view('admin.address.create', compact(['states', 'users']));
    }

    public function store(AddressRequest $request) {
        //dd($request);
        $new_address = $request->all();
        $response = Address::create($new_address);

        if ($response) {
            $message = 'Endereço Cadastrado com Sucesso!';
            return redirect()->route('admin.address')->with('success', $message);
        } else {
            $message = 'Não foi possível cadastrar!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function destroy($id) {
        $response = Address::find($id)->delete();
        if ($response) {
            $message = 'Endereço Removido com Sucesso!';
            return redirect()->route('admin.address')->with('success', $message);
        } else {
            $message = 'Não foi Possível Remover!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function edit($id) {
        $address = Address::find($id);
        return view('admin.address.edit', compact('address'));
    }

    public function  update(AddressRequest $request, $id) {
        $response = Address::find($id)->update($request->all());

        if ($response) {
            $message = 'Endereço Alterado com Sucesso!';
            return redirect()->route('admin.address')->with('success', $message);
        } else {
            $message = 'Não foi Possível Alterar!';
            return redirect()->back() - with('error', $message);
        }
    }
}
