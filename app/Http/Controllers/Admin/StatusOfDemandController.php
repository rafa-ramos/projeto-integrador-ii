<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StatusOfDemandRequest;
use App\Models\StatusOfDemand;
use App\Http\Controllers\Controller;

class StatusOfDemandController extends Controller {
    public function index() {
        $statusOfDemands = StatusOfDemand::all();
        return view('admin.status-of-demand.list', ['statusOfDemands'=> $statusOfDemands]);
    }

    public function create() {
        return view('admin.status-of-demand.create');
    }

    public function store(StatusOfDemandRequest $request) {
        $new_statusOfDemand = $request->all();
        $response = StatusOfDemand::create($new_statusOfDemand);

        if ($response) {
            $message = 'Status de Pedio Cadastrado com Sucesso!';
            return redirect()->route('admin.statusOfDemand')->with('success', $message);
        } else {
            $message = 'Não foi possível cadastrar!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function destroy($id) {
        $response = StatusOfDemand::find($id)->delete();
        if ($response) {
            $message = 'Status de Pedio Removido com Sucesso!';
            return redirect()->route('admin.statusOfDemand')->with('success', $message);
        } else {
            $message = 'Não foi Possível Remover!';
            return redirect()->back()-with('error', $message);
        }

    }

    public function edit($id) {
        $statusOfDemand = StatusOfDemand::find($id);
        return view('admin.status-of-demand.edit', compact('statusOfDemand'));
    }

    public function  update(StatusOfDemandRequest $request, $id)
    {
        $response = StatusOfDemand::find($id)->update($request->all());

        if ($response) {
            $message = 'Status de Pedio Alterado com Sucesso!';
            return redirect()->route('admin.statusOfDemand')->with('success', $message);
        } else {
            $message = 'Não foi Possível Alterar!';
            return redirect()->back() - with('error', $message);
        }
    }
}
