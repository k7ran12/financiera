@extends('layouts.app')

@section('template_title')
    Empresa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empresa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empresas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombreempresa</th>
										<th>Ruc</th>
										<th>Razon Social</th>
										<th>Logo</th>
										<th>Correo</th>
										<th>Celular</th>
										<th>Celular1</th>
										<th>Celular2</th>
										<th>Direccion</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empresa->nombreEmpresa }}</td>
											<td>{{ $empresa->ruc }}</td>
											<td>{{ $empresa->razon_social }}</td>
											<td>{{ $empresa->logo }}</td>
											<td>{{ $empresa->correo }}</td>
											<td>{{ $empresa->celular }}</td>
											<td>{{ $empresa->celular1 }}</td>
											<td>{{ $empresa->celular2 }}</td>
											<td>{{ $empresa->direccion }}</td>
											<td>{{ $empresa->telefono }}</td>

                                            <td>
                                                <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empresas.show',$empresa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresas.edit',$empresa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $empresas->links() !!}
            </div>
        </div>
    </div>
@endsection
