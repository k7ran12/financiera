@extends('layouts.app')

@section('template_title')
    Create Prestamo
@endsection

@section('content')
    <div class='container'>
        <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">                        
                        <div class="row">
                            <div class="col-md-4">Registrar Prestamos</div>
                            <div class="col-md-8 ms-auto">
                                <div class="row">
                                    <label for="" class="col-sm-3 col-form-label">N° Operacion</label>
                                    <div class="col-sm-3">
                                    <input type="text" class="form-control" id="" disabled>
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label">Fecha Registro</label>
                                    <div class="col-sm-3">
                                    <input type="text" class="form-control" id="" disabled>
                                    </div>
                                </div>
                            </div>
                          </div>                                                
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('prestamos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('prestamo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
