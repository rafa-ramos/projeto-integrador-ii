@extends('adminlte::page')

@section('title', 'Estados')

@section('content_header')
    <h1>Cadastro de Produtos</h1>
    <ol class="breadcrumb">
        <li>Menu</li>
        <li>Logística</li>
        <li>Status de Pedido</li>
        <li>{{ $statusOfDemand->descricao }}</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editando Status de Pedido: {{ $statusOfDemand->descricao }}</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.includes.alerts')

                        {!! Form::open(['route'=>['admin.statusOfDemand.update', $statusOfDemand->id], 'method' => 'put']) !!}
                        <div class="form-group">
                            {!! Form::label('descricao', 'Descrição:') !!}
                            {!! Form::textarea('descricao', $statusOfDemand->descricao, ['class'=>'form-control', 'placeholder' => 'Opcional...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Editar Status de Pedido', ['class'=>'btn btn-primary']) !!}
                            <a href="{{ route('admin.statusOfDemand') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

