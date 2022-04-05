@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $cliente->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Numdoc:</strong>
                            {{ $cliente->NumDoc }}
                        </div>
                        <div class="form-group">
                            <strong>Region:</strong>
                            {{ $cliente->Region }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $cliente->Provincia }}
                        </div>
                        <div class="form-group">
                            <strong>Distrito:</strong>
                            {{ $cliente->Distrito }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Numtelefono:</strong>
                            {{ $cliente->NumTelefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correoelec:</strong>
                            {{ $cliente->CorreoElec }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodocumentos Id:</strong>
                            {{ $cliente->tipodocumentos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
