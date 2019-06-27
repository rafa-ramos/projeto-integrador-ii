@extends('adminlte::page')

@section('title', 'Endereços')

@section('content_header')
<h1>Listagem de Endereços</h1>
<ol class="breadcrumb">
  <li><a href="">Menu</a></li>
  <li><a href="">Regiões</a></li>
  <li><a href="">Endereços</a></li>
</ol>
@stop

@section('content')
<div class="box">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="{{ route('admin.address.create') }}" class="btn btn-primary">Novo Enderço</a>
        </div>
        <div class="box-body">
          @include('admin.includes.alerts')

          <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
              <th>Bairro</th>
              <th>Número</th>
              <th>Cidade</th>
              <th>Rua</th>
              <th>Cliente</th>
              <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($addresses as $address)
              <tr>
                <td>{{ $address->bairro}}</td>
                <td>{{ $address->numero}}</td>
                <td>{{ $address->cidade}}</td>
                <td>{{ $address->rua}}</td>
                <td>{{ $address->usuario}}</td>
                <td>
                  <a href="{{ route('admin.address.edit', ['id'=>$address->id]) }}" class="btn-sm btn-success">Editar</a>
                  <a href="{{ route('admin.address.destroy', ['id'=>$address->id]) }}" class="btn-sm btn-danger">Remover</a>
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