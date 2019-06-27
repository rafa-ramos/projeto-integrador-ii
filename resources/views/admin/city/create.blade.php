@extends('adminlte::page')

@section('title', 'Estados')

@section('content_header')
    <h1>Cadastro de Cidades</h1>
    <ol class="breadcrumb">
        <li>Menu</li>
        <li>Regiões</li>
        <li>Cidades</li>
        <li>Nova</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Nova Cidade</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.includes.alerts')

                        {!! Form::open(['route'=>'admin.city.store']) !!}
                        <div class="form-group">
                            {!! Form::label('nome', 'Nome:') !!}
                            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('state_id', 'Estado:') !!}
                            {!! Form::select('state_id',
                            \App\Models\State::orderBy('nome')->pluck('nome', 'id')->toArray(),null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Nova Cidade', ['class'=>'btn btn-primary']) !!}
                            <a href="{{ route('admin.city') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

