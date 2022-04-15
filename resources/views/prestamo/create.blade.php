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
