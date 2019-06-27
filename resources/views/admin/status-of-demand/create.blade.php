@extends('adminlte::page')

@section('title', 'Estados')

@section('content_header')
    <h1>Cadastro de Status de Pedidos</h1>
    <ol class="breadcrumb">
        <li>Menu</li>
        <li>Status de Pedidos</li>
        <li>Novo</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Novo Status de Pedidos</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.includes.alerts')

                        {!! Form::open(['route'=>'admin.statusOfDemand.store']) !!}
                        <div class="form-group">
                            {!! Form::label('descricao', 'Descrição:') !!}
                            {!! Form::textarea('descricao', null, ['class'=>'form-control', 'placeholder' => 'Descrição do Status de Pedido']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Novo Status de Pedido', ['class'=>'btn btn-primary']) !!}
                            <a href="{{ route('admin.statusOfDemand') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

