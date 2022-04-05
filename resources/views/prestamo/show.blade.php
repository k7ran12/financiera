@extends('layouts.app')

@section('template_title')
    {{ $prestamo->name ?? 'Show Prestamo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Prestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prestamos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $prestamo->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Interes:</strong>
                            {{ $prestamo->interes }}
                        </div>
                        <div class="form-group">
                            <strong>Num Cuota:</strong>
                            {{ $prestamo->num_cuota }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Moneda:</strong>
                            {{ $prestamo->tipo_moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Registro:</strong>
                            {{ $prestamo->fecha_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $prestamo->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Monto X Cuota:</strong>
                            {{ $prestamo->monto_x_cuota }}
                        </div>
                        <div class="form-group">
                            <strong>Total Interes:</strong>
                            {{ $prestamo->total_interes }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Total:</strong>
                            {{ $prestamo->monto_total }}
                        </div>
                        <div class="form-group">
                            <strong>Clausula:</strong>
                            {{ $prestamo->clausula }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Prestamo:</strong>
                            {{ $prestamo->estado_prestamo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Operacion:</strong>
                            {{ $prestamo->numero_operacion }}
                        </div>
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $prestamo->clientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $prestamo->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
