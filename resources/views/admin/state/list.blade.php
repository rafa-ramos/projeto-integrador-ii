@extends('adminlte::page')

@section('title', 'Estados')

@section('content_header')
<h1>Listagem de Estados</h1>
<ol class="breadcrumb">
  <li><a href="">Menu</a></li>
  <li><a href="">Regiões</a></li>
  <li><a href="">Estados</a></li>
</ol>
@stop

@section('content')
<div class="box">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="{{ route('admin.state.create') }}" class="btn btn-primary">Novo Estado</a>
        </div>
        <div class="box-body">
          @include('admin.includes.alerts')

          <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>UF</th>
              <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($states as $state)
              <tr>
                <td>{{ $state->id }}</td>
                <td>{{ $state->nome }}</td>
                <td>{{ $state->uf}}</td>
                <td>
                  <a href="{{ route('admin.state.edit', ['id'=>$state->id]) }}" class="btn-sm btn-success">Editar</a>
                  <a href="{{ route('admin.state.destroy', ['id'=>$state->id]) }}" class="btn-sm btn-danger">Remover</a>
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