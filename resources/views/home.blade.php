@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }}-->                   
                   <div class="container">                    
                        <div class="row justify-content-center">                                               
                            <button onclick="Menu(1)" type="button" class="btn btn-outline-primary col-sm-4 cuadrado texto_grande"><i class="fa-solid fa-file-invoice-dollar font_grande"></i><br>Registrar Prestamo</button>
                            <button onclick="Menu(2)" type="button" class="btn btn-outline-primary col-sm-4 cuadrado texto_grande"><i class="fas fa-hand-holding-usd font_grande"></i><br>Registrar Cobro</button>
                            <button onclick="Menu(3)" type="button" class="btn btn-outline-primary col-sm-4 cuadrado texto_grande"><i class="fas fa-list-ol font_grande"></i><br>Historial Prestamo</button>
                            <button onclick="Menu(4)" type="button" class="btn btn-outline-primary col-sm-4 cuadrado texto_grande"><i class="fas fa-user-friends font_grande"></i><br>Clientes</button>
                            <button onclick="Menu(5)" type="button" class="btn btn-outline-primary col-sm-4 cuadrado texto_grande"><i class="fas fa-chart-bar font_grande"></i><br>Resumen General</button>
                            <button onclick="Menu(6)" type="button" class="btn btn-outline-primary col-sm-4 cuadrado texto_grande"><i class="fas fa-tools font_grande"></i><br>Configuracion</button>                            
                        </div>
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
