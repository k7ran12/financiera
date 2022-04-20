@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreempresa:</strong>
                            {{ $empresa->nombreEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $empresa->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Razon Social:</strong>
                            {{ $empresa->razon_social }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $empresa->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $empresa->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $empresa->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Celular1:</strong>
                            {{ $empresa->celular1 }}
                        </div>
                        <div class="form-group">
                            <strong>Celular2:</strong>
                            {{ $empresa->celular2 }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empresa->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empresa->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
