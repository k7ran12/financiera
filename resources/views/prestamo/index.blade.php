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
                                        <label for="buscar" class="col-sm-3 col-form-label">Buscar</label>
                                        <div class="col-sm-5">
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
                                        <thead class="table-dark">
                                            <tr>
                                                <th>N°</th>                                                
                                                <th>Monto</th>
                                                <th>TEA</th>
                                                <th>Numero Cuotas</th>                                                
                                                <th>Fecha Registro</th>                                                                           
                                                <th>Estado Prestamo</th>
                                                <th>Numero Operacion</th>
                                                <td></td>                                                       
                                                <td></td>
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
                                                    <td>{{ $prestamo->fecha_registro }}</td>                                                                                                       
                                                    <td>{{ ucwords($prestamo->estado_prestamo) }}</td>
                                                    <td>{{ $prestamo->numero_operacion }}</td>
                                                    <form action="{{ route('prestamos.destroy',$prestamo->id) }}" method="POST"></form>
                                                    <td><a class="btn btn-sm btn-primary " href="{{ route('prestamos.show',$prestamo->id) }}"><i class="fa fa-fw fa-eye"></i></a></td>
                                                    <td><a class="btn btn-sm btn-success" href="{{ route('prestamos.edit',$prestamo->id) }}"><i class="fa fa-fw fa-edit"></i></a></td>        
                                                    @csrf
                                                    @method('DELETE')
                                                    <td><button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button></td>
                                                    </form>
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
