<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="row" id="div_row_izquierda">
                    <div class="col-md-12 p-1">
                        <div class="card">
                            <div class="card-body" id="div_busqueda">
                                {{ Form::close() }}                           
                                <form id="form_buscar_cliente" type="POST">
                                <div class="mb-3 row"> 
                                    @csrf
                                    <div class="col-sm-1 p-2">
                                        {{ Form::label('DNI') }}
                                    </div>
                                    <div class="col-sm-9">                                        
                                        <input class="form-control" type="text" name="dni" id="dni">
                                    </div>                                    
                                    <div class="col-sm-2">
                                        <button id="buscar_cliente" type="button" type="button" class="btn btn-success"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-1" style="display: none;">
                        <div class="card">
                            <div class="card-body">
                                safd
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-2" id="div_cronograma">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">
                                    Simulador de Cronograma de cuotas
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">Monto</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="capital" class="form-control" id="capital">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-3 col-form-label">N° Cuotas</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="num_cuota" id="num_cuotas">
                                    </div>
                                    <label class="col-sm-2 col-form-label">TEA</label>
                                    <div class="col-sm-4">
                                        <select name="tea" id="tea_select" class="form-select" aria-label="Default select example">
                                            <option selected value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Forma de pago</label>
                                    <div class="col-sm-9">
                                        <select name="form_pago_select" id="form_pago_select" class="form-select"
                                            aria-label="Default select example">
                                            <option value="diario">Diario</option>
                                            <option value="quincenal">Quincenal</option>
                                            <option value="semanal">Semanal</option>
                                            <option selected value="mensual">Mensual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Desembolso</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" value="{{ $hoy }}" id="desembolso" name="fecha_inicio">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-9">
                                        <button id="cronograma" type="button" class="btn btn-primary col-sm-5">Ver
                                            cronograma&nbsp;<i class="fa-solid fa-align-justify"></i></button>
                                    </div>
                                </div>
                                <div class="row" id="agregar_tabla">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" id="div_container_simulador_cuotas">
                    <div class="col-md-12 p-1">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    -->
</div>