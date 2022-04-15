@extends('layouts.app')

@section('template_title')
    Prestamo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prestamo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('prestamos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">                       
                        <div class="row m-2">
                            <div class="col-md-7"></div>
                            <div class="col-md-5">
                                <form class="row g-3" name="formBuscarXNumOperacion" id="formBuscarXNumOperacion">
                                    <div class="mb-3 row">
                                        <label for="buscar" class="col-sm-2 col-form-label">Buscar</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="buscarOperacion" name="buscarOperacion">
                                        </div>
                                        <div class="col-sm-4">
                                            <button id="btnBuscarXNumOperacion" type="button" class="btn btn-primary">Buscar</button>                                            
                                        </div>
                                      </div>
                                  </form>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>N°</th>                                                
                                                <th>Capital</th>
                                                <th>TEA</th>
                                                <th>Numero Cuotas</th>
                                                <th>Tipo Moneda</th>
                                                <th>Fecha Registro</th>
                                                <th>Fecha Inicio</th>
                                                <th>Monto X Cuota</th>
                                                <th>Total Interes</th>
                                                <th>Monto Total</th>
                                                <th>Clausula</th>
                                                <th>Estado Prestamo</th>
                                                <th>Numero Operacion</th>
                                                <th>Clientes Id</th>
                                                <th>Users Id</th>        
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prestamos as $prestamo)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
                                                    <td>{{ "S/.". number_format($prestamo->capital, 2, '.', ''); }}</td>
                                                    <td>{{ $prestamo->tea }}&nbsp;%</td>
                                                    <td>{{ $prestamo->num_cuota }}</td>
                                                    <td>{{ $prestamo->tipo_moneda }}</td>
                                                    <td>{{ $prestamo->fecha_registro }}</td>
                                                    <td>{{ $prestamo->fecha_inicio }}</td>
                                                    <td>{{ $prestamo->monto_x_cuota }}</td>
                                                    <td>{{ "S/.".number_format($prestamo->total_interes, 2, '.', ''); }}</td>
                                                    <td>{{ "S/.".number_format($prestamo->capital_total, 2, '.', ''); }}</td>											
                                                    <td>{{ $prestamo->clausula }}</td>
                                                    <td>{{ $prestamo->estado_prestamo }}</td>
                                                    <td>{{ $prestamo->numero_operacion }}</td>
                                                    <td>{{ $prestamo->clientes_id }}</td>
                                                    <td>{{ $prestamo->users_id }}</td>
        
                                                    <td>
                                                        <form action="{{ route('prestamos.destroy',$prestamo->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('prestamos.show',$prestamo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('prestamos.edit',$prestamo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                        </form>
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
                {!! $prestamos->links() !!}
            </div>
        </div>
    </div>
@endsection
