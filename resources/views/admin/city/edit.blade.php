@extends('adminlte::page')

@section('title', 'Cidades')

@section('content_header')
    <h1>Cadastro de Cidades</h1>
    <ol class="breadcrumb">
        <li>Menu</li>
        <li>Regiões</li>
        <li>Cidades</li>
        <li>{{ $city->nome }}</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editando Estado: {{ $city->nome }}</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.includes.alerts')

                        {!! Form::open(['route'=>['admin.city.update', $city->id], 'method' => 'put']) !!}
                        <div class="form-group">
                            {!! Form::label('nome', 'Nome:') !!}
                            {!! Form::text('nome', $city->nome, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('state_id', 'Estado:') !!}
                            {!! Form::select('state_id',
                        \App\Models\State::orderBy('nome')->pluck('nome', 'id')->toArray(), $city->state_id ,['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Editar Cidade', ['class'=>'btn btn-primary']) !!}
                            <a href="{{ route('admin.city') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

