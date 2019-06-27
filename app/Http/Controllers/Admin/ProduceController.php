<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProduceRequest;
use App\Models\Produce;
use App\Http\Controllers\Controller;

class ProduceController extends Controller
{
    public function index() {
        $produces = Produce::all();
        return view('admin.produce.list', ['produces'=>$produces]);
    }

    public function create() {
        return view('admin.produce.create');
    }

    public function store(ProduceRequest $request) {
        $new_produce = $request->all();
        $response = Produce::create($new_produce);

        if ($response) {
            $message = 'Produto Cadastrado com Sucesso!';
            return redirect()->route('admin.produce')->with('success', $message);
        } else {
            $message = 'Não foi possível cadastrar!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function destroy($id) {
        $response = Produce::find($id)->delete();
        if ($response) {
            $message = 'Produot Removido com Sucesso!';
            return redirect()->route('admin.produce')->with('success', $message);
        } else {
            $message = 'Não foi Possível Remover!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function edit($id) {
        $produce = Produce::find($id);
        return view('admin.produce.edit', compact('produce'));
    }

    public function  update(ProduceRequest $request, $id) {
        $response = Produce::find($id)->update($request->all());

        if ($response) {
            $message = 'Produto alterado com com Sucesso!';
            return redirect()->route('admin.produce')->with('success', $message);
        } else {
            $message = 'Não foi Possível Alterar!';
            return redirect()->back() - with('error', $message);
        }
    }
}
