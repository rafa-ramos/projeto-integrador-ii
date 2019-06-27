@extends('adminlte::page')

@section('title', 'Endereços')

@section('content_header')
    <h1>Cadastro de Endereços</h1>
    <ol class="breadcrumb">
        <li>Menu</li>
        <li>Regiões</li>
        <li>Endereços</li>
        <li>Novo</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Novo Endereço</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.includes.alerts')

                        {!! Form::open(['route'=>'admin.address.store']) !!}
                        <div class="form-group">
                            {!! Form::label('cep', 'Cep:') !!}
                            {!! Form::text('cep', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rua', 'Rua:') !!}
                            {!! Form::text('rua', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('numero', 'Número:') !!}
                            {!! Form::number('numero', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('bairro', 'Bairro:') !!}
                            {!! Form::text('bairro', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('cidade_id', 'Cidade:') !!}
                            {!! Form::select('cidade_id',
                            \App\Models\City::orderBy('nome')->pluck('nome', 'id')->toArray(),null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('usuario_id', 'Cliente:') !!}
                            {!! Form::select('usuario_id',
                            \App\User::orderBy('name')->pluck('name', 'id')->toArray(),null,['class'=>'form-control'])!!}
                        </div>

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('endereco_pricipal', 'Marcar como Endereço Principal:') !!}--}}
{{--                            {!! Form::checkbox('endereco_pricipal', true, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

                        <div class="form-group">
                            {!! Form::submit('Novo Endereço', ['class'=>'btn btn-primary']) !!}
                            <a href="{{ route('admin.address') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

