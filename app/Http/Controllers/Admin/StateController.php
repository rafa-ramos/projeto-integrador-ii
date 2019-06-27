<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Http\Requests\StateRequest;

class StateController extends Controller
{
    public function index() {
        $states = State::all();
        return view('admin.state.list', ['states'=>$states]);
    }

    public function create() {
        return view('admin.state.create');
    }

    public function store(StateRequest $request) {
        $new_state = $request->all();
        $response = State::create($new_state);

        if ($response) {
                $message = 'Estado Cadastrado com Sucesso!';
            return redirect()->route('admin.state')->with('success', $message);
        } else {
                $message = 'Não foi possível cadastrar!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function destroy($id) {
        $response = State::find($id)->delete();
        if ($response) {
            $message = 'Estado Removido com Sucesso!';
            return redirect()->route('admin.state')->with('success', $message);
        } else {
            $message = 'Não foi Possível Remover!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function edit($id) {
        $state = State::find($id);
        return view('admin.state.edit', compact('state'));
    }

    public function  update(StateRequest $request, $id) {
        $response = State::find($id)->update($request->all());

        if ($response) {
            $message = 'Estado Alterado com Sucesso!';
            return redirect()->route('admin.state')->with('success', $message);
        } else {
            $message = 'Não foi Possível Alterar!';
            return redirect()->back() - with('error', $message);
        }
    }
}
