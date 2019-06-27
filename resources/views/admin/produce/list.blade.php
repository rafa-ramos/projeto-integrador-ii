@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
<h1>Listagem de Produtos</h1>
<ol class="breadcrumb">
  <li><a href="">Menu</a></li>
  <li><a href="">Produtos</a></li>
  <li><a href="">Produtos</a>
  <li>
</ol>
@stop

@section('content')
<div class="box">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="{{ route('admin.produce.create') }}" class="btn btn-primary">Novo Produto</a>
        </div>
        <div class="box-body">
          @include('admin.includes.alerts')

          <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Peso</th>
              <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produces as $prod)
              <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->nome }}</td>
                <td>{{ $prod->peso}}</td>
                <td>
                  <a href="{{ route('admin.produce.edit', ['id'=>$prod->id]) }}" class="btn-sm btn-success">Editar</a>
                  <a href="{{ route('admin.produce.destroy', ['id'=>$prod->id]) }}" class="btn-sm btn-danger">Remover</a>
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