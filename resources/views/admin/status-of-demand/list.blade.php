@extends('adminlte::page')

@section('title', 'Status de Pedidos')

@section('content_header')
<h1>Listagem de Status de Pedidos</h1>
<ol class="breadcrumb">
  <li><a href="">Menu</a></li>
  <li><a href="">Logística</a></li>
  <li><a href="">Status de Pedidos</a>
  <li>
</ol>
@stop

@section('content')
<div class="box">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="{{ route('admin.statusOfDemand.create') }}" class="btn btn-primary">Novo Status de Pedido</a>
        </div>
        <div class="box-body">
          @include('admin.includes.alerts')

          <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Descrição</th>
              <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($statusOfDemands as $status)
              <tr>
                <td>{{ $status->id }}</td>
                <td>{{ $status->descricao }}</td>
                <td>
                  <a href="{{ route('admin.statusOfDemand.edit', ['id'=>$status->id]) }}" class="btn-sm btn-success">Editar</a>
                  <a href="{{ route('admin.statusOfDemand.destroy', ['id'=>$status->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->


      @stop