<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>
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
                                        {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
                                        {{ Form::text('clientes_id', $prestamo->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id')
                                        ? ' is-invalid' : ''), 'placeholder' => 'DNI', 'id'=>'dni']) }}
                                        {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
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
                                        {{ Form::label('monto', null ,array('class' =>"col-sm-3 col-form-label" )) }}   
                                    <div class="col-sm-9">                                        
                                        {{ Form::text('capital', $prestamo->capital, ['class' => 'form-control' . ($errors->has('capital')
                                        ? ' is-invalid' : ''), 'placeholder' => 'Monto', 'id'=>'capital']) }}
                                        {!! $errors->first('capital', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="mb-3 row">                                    
                                    {{ Form::label('N° Cuotas', null ,array('class' =>"col-sm-3 col-form-label" )) }}                                       
                                    <div class="col-sm-3">                                        
                                        {{ Form::text('num_cuota', $prestamo->num_cuota, ['class' => 'form-control' . ($errors->has('num_cuota')
                                        ? ' is-invalid' : ''), 'placeholder' => 'num_cuota', 'id'=>'num_cuotas']) }}
                                        {!! $errors->first('num_cuota', '<div class="invalid-feedback">:message</div>') !!}
                                    </div> 
                                     {{ Form::label('tea', null ,array('class' =>"col-sm-2 col-form-label" )) }}                                       
                                    <div class="col-sm-4">                                        
                                        {{ Form::text('tea', $prestamo->tea, ['class' => 'form-control' . ($errors->has('tea')
                                        ? ' is-invalid' : ''), 'placeholder' => 'tea', 'id'=>'tea_select']) }}
                                        {!! $errors->first('tea', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>  

                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Forma de pago</label>
                                    <div class="col-sm-9">
                                        {{ Form::select('form_pago', array('diario' => 'Diario', 'quincenal' => 'Quincenal', 'semanal' => 'Semanal', 'mensual' => 'Mensual'), ($prestamo->form_pago != "")? $prestamo->form_pago : 'mensual', array('class' => 'form-control', 'id' => 'form_pago_select')  ) }}
                                    </div>
                                </div>                                
                                <div class="mb-3 row">                                    
                                        {{ Form::label('Desembolso', null ,array('class' =>"col-sm-3 col-form-label" )) }}   
                                    <div class="col-sm-9">                                        
                                        {{ Form::date('fecha_inicio', $prestamo->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio')
                                        ? ' is-invalid' : ''), 'placeholder' => 'Monto', 'id'=>'desembolso']) }}
                                        {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
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
                            <div class="card-body div_cuotas_cliente" id="div_cuotas_cliente">
                                
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