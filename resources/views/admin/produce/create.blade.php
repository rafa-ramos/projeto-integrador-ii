@extends('adminlte::page')

@section('title', 'Estados')

@section('content_header')
    <h1>Cadastro de Produtos</h1>
    <ol class="breadcrumb">
        <li>Menu</li>
        <li>Produtos</li>
        <li>Novo</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Novo Produto</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.includes.alerts')

                        {!! Form::open(['route'=>'admin.produce.store']) !!}
                        <div class="form-group">
                            {!! Form::label('nome', 'Nome:') !!}
                            {!! Form::text('nome', null, ['class'=>'form-control', 'placeholder' => 'Nome do Produto']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('descricao', 'Descrição:') !!}
                            {!! Form::textarea('descricao', null, ['class'=>'form-control', 'placeholder' => 'Opcional...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('peso', 'Peso:') !!}
                            {!! Form::text('peso', null, ['class'=>'form-control', 'placeholder' => 'Peso em formato Kg.']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Novo Produto', ['class'=>'btn btn-primary']) !!}
                            <a href="{{ route('admin.produce') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

