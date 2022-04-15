@extends('layouts.app')

@section('template_title')
{{ $prestamo->name ?? 'Resumen Prestamo' }}
@endsection

@section('content')
<section class="container content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="float-left">
            <span class="card-title">Resumen Prestamo</span>
          </div>
          <div class="float-right">
            <a class="btn btn-primary" href="{{ route('prestamos.index') }}"> Back</a>
          </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">{{ $message }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
        @endif        
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  Datos Prestamo
                </div>
                <div class="card-body">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Monto</th>
                        <td>{{ "S/.".number_format($prestamo['prestamo']->capital, 2, '.', '') }}</td>
                        <th>Interes</th>
                        <td>{{ $prestamo['prestamo']->tea." %" }}</td>
                      </tr>
                      <tr>
                        <th>N° Cuota</th>
                        <td>{{ $prestamo['prestamo']->num_cuota }}</td>
                        <th>Total Interes</th>
                        <td>{{ "S/.".number_format($prestamo['prestamo']->total_interes, 2, '.', '') }}</td>
                      </tr>
                      <tr>
                        <th>Monto Total</th>
                        <td>{{ "S/.".number_format($prestamo['prestamo']->capital_total, 2, '.', '') }}</td>
                        <th>Fecha Registro</th>
                        <td>{{ $prestamo['prestamo']->fecha_registro }}</td>
                      </tr>
                      <tr>
                        <th>Estado Prestamo</th>
                        <td>{{ $prestamo['prestamo']->estado_prestamo }}</td>
                        <th>Fecha Inicio</th>
                        <td>{{ $prestamo['prestamo']->fecha_inicio }}</td>
                      </tr>
                      <tr>
                        <th>Numero Operacion</th>
                        <td>{{ $prestamo['prestamo']->numero_operacion }}</td>
                        <th>Cliente</th>
                        <td>{{ $prestamo['prestamo']->clientes_id }}</td>
                      </tr>
                      <tr>
                        <th>Tipo Pago</th>
                        <td>{{ $prestamo['prestamo']->form_pago }}</td>
                        <th>Por pagar</th>
                        <td>{{ $prestamo['prestamo']->saldo }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><br>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    Datos Cliente
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <tbody>
                        @foreach ($prestamo['cliente'] as $cliente)
                        <tr>
                          <th>Nombre</th>
                          <td> {{$cliente->Nombre}}</td>
                          <th>Apellido</th>
                          <td>{{$cliente->Apellido}}</td>
                        </tr>
                        <tr>
                          <th>N° Documento</th>
                          <td> {{$cliente->NumDoc}}</td>
                          <th>Region</th>
                          <td>{{$cliente->Region}}</td>
                        </tr>
                        <tr>
                          <th>Provincia</th>
                          <td> {{$cliente->Provincia}}</td>
                          <th>Distrito</th>
                          <td>{{$cliente->Distrito}}</td>
                        </tr>
                        <tr>
                          <th>Direccion</th>
                          <td> {{$cliente->Direccion}}</td>
                          <th>Correo</th>
                          <td>{{$cliente->CorreoElec}}</td>
                        </tr>
                        <tr>
                          <th>Tipo documento</th>
                          <td> {{$cliente->tipodocumentos_id}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  Cuotas
                </div>
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Interes</th>
                        <th scope="col">Monto Pagar</th>
                        <th scope="col">Fecha V.</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($prestamo['cuota'] as $cuota)

                      <tr>
                        <td>{{ $cuota->numero }}</td>
                        <td>{{ "S/.".number_format($cuota->monto, 2, '.', '') }}</td>
                        <td>{{ "S/.".number_format($cuota->interes, 2, '.', '') }}</td>
                        <td>{{ "S/.".number_format($cuota->total, 2, '.', '') }}</td>
                        <td>{{ $cuota->fecha_limite }}</td>
                        <td>                          
                            <button class="btn {{ $cuota->estado ==  'pagado' ? 'btn-success' : 'btn-secondary'  }} ">{{ ucwords($cuota->estado) }}</button>
                        </td>
                        <td>
                          @if($cuota->estado ==  'pendiente')
                          <button onclick="modalPagar({{ $cuota }});" type="button" class="btn btn-primary"
                            data-bs-toggle="modal" data-bs-target="#RealizarPago">
                            <i class="fa-solid fa-dollar-sign"></i>
                          </button>
                          @endif
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="RealizarPago" tabindex="-1" aria-labelledby="RealizarPago" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{ route('prestamos.realizarPagoCuota') }}" role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="RealizarPago">Realizar Pago</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="titulo_pagar">
          </div>
          <input type="hidden" class="form-control" id="id_pago" name="id">
          <input type="hidden" class="form-control" id="prestamos_id" name="prestamos_id">
          <div class="mb-3 row">
            <label for="montoPagar" class="col-sm-3 col-form-label">Monto Pagar :</label>
            <div class="col-sm-9">
              <div class="input-group mb-3">
                <span class="input-group-text">S/.</span>
                <input id="montoPagar" name="recepcion_pago" type="text" class="form-control"
                  aria-label="Amount (to the nearest dollar)" placeholder="0">
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="mora" class="col-sm-3 col-form-label">Mora :</label>
            <div class="col-sm-9">
              <div class="input-group mb-3">
                <span class="input-group-text">S/.</span>
                <input id="mora" name="mora" type="text" class="form-control"
                  aria-label="Amount (to the nearest dollar)" placeholder="0">
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="otros" class="col-sm-3 col-form-label">Otros :</label>
            <div class="col-sm-9">
              <div class="input-group mb-3">
                <span class="input-group-text">S/.</span>
                <input id="otros" name="otros" type="text" class="form-control"
                  aria-label="Amount (to the nearest dollar)" placeholder="0">
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="total" class="col-sm-3 col-form-label">Total :</label>
            <div class="col-sm-9">
              <div class="input-group mb-3">
                <span class="input-group-text">S/.</span>
                <input id="total" name="recepcion_total_pago" type="text" class="form-control"
                  aria-label="Amount (to the nearest dollar)">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Procesar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection