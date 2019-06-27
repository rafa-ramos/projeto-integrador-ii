@extends('adminlte::page')

@section('title', 'Cidades')

@section('content_header')
<h1>Listagem de Cidades</h1>
<ol class="breadcrumb">
  <li><a href="">Menu</a></li>
  <li><a href="">Regiões</a></li>
  <li><a href="">Cidades</a>
  <li>
</ol>
@stop

@section('content')
<div class="box">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="{{ route('admin.city.create') }}" class="btn btn-primary">Nova Cidade</a>
        </div>
        <div class="box-body">
          @include('admin.includes.alerts')

          <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Estado</th>
              <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cities as $city)
              <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->nome }}</td>
                <td>{{ $city  ->estado}}</td>
                <td>
                  <a href="{{ route('admin.city.edit', ['id'=>$city->id]) }}" class="btn-sm btn-success">Editar</a>
                  <a href="{{ route('admin.city.destroy', ['id'=>$city->id]) }}" class="btn-sm btn-danger">Remover</a>
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