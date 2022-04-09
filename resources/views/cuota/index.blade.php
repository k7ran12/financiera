@extends('layouts.app')

@section('template_title')
    Cuota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cuota') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cuotas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha Limite</th>
										<th>Monto</th>
										<th>Numero</th>
										<th>Estado</th>
										<th>Prestamos Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuotas as $cuota)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cuota->fecha_limite }}</td>
											<td>{{ $cuota->monto }}</td>
											<td>{{ $cuota->numero }}</td>
											<td>{{ $cuota->estado }}</td>
											<td>{{ $cuota->prestamos_id }}</td>

                                            <td>
                                                <form action="{{ route('cuotas.destroy',$cuota->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cuotas.show',$cuota->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cuotas.edit',$cuota->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $cuotas->links() !!}
            </div>
        </div>
    </div>
@endsection
