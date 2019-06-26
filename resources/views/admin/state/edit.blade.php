@extends('adminlte::page')

@section('title', 'Estados')

@section('content_header')
    <h1>Cadastro de Estados</h1>
    <ol class="breadcrumb">
        <li>Menu</li>
        <li>Regiões</li>
        <li>Estados</li>
        <li>{{ $state->nome }}</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editando Estado: {{ $state->nome }}</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.includes.alerts')

                        {!! Form::open(['route'=>['admin.state.update', $state->id], 'method' => 'put']) !!}
                        <div class="form-group">
                            {!! Form::label('nome', 'Nome:') !!}
                            {!! Form::text('nome', $state->nome, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('uf', 'UF:') !!}
                            {!! Form::text('uf', $state->uf, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Editar Estado', ['class'=>'btn btn-primary']) !!}
                            <a href="{{ route('admin.state') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

