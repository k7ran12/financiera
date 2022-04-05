<div class="box box-info padding-1">    
        <div class="box-body">            
                
                <div class="container card">
                    <div class="card-header">
                      Cliente
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-3">
                                {{ Form::label('Nombre') }}
                                {{ Form::text('Nombre', $prestamo->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('Apellido') }}
                                {{ Form::text('Apellido', $prestamo->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
                                {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('Numero Documento') }}
                                {{ Form::text('NumDoc', $prestamo->NumDoc, ['class' => 'form-control' . ($errors->has('NumDoc') ? ' is-invalid' : ''), 'placeholder' => 'Numero documento']) }}
                                {!! $errors->first('NumDoc', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('Region') }}
                                {{ Form::text('Region', $prestamo->Region, ['class' => 'form-control' . ($errors->has('Region') ? ' is-invalid' : ''), 'placeholder' => 'Region']) }}
                                {!! $errors->first('Region', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('Provincia') }}
                                {{ Form::text('Provincia', $prestamo->Provincia, ['class' => 'form-control' . ($errors->has('Provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
                                {!! $errors->first('Provincia', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('Distrito') }}
                                {{ Form::text('Distrito', $prestamo->Distrito, ['class' => 'form-control' . ($errors->has('Distrito') ? ' is-invalid' : ''), 'placeholder' => 'Distrito']) }}
                                {!! $errors->first('Distrito', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-6">
                                {{ Form::label('Direccion') }}
                                {{ Form::text('Direccion', $prestamo->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                                {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('Numero Telefono') }}
                                {{ Form::text('NumTelefono', $prestamo->NumTelefono, ['class' => 'form-control' . ($errors->has('NumTelefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero telefono']) }}
                                {!! $errors->first('NumTelefono', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('Correo Electronico') }}
                                {{ Form::text('CorreoElec', $prestamo->CorreoElec, ['class' => 'form-control' . ($errors->has('CorreoElec') ? ' is-invalid' : ''), 'placeholder' => 'Correo elecectronico']) }}
                                {!! $errors->first('CorreoElec', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col-md-3">
                                {{ Form::label('documento') }}
                                {{ Form::text('tipodocumentos_id', $prestamo->tipodocumentos_id, ['class' => 'form-control' . ($errors->has('tipodocumentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo documento']) }}
                                {!! $errors->first('tipodocumentos_id', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group col align-self-center gy-4">
                                <div class="d-grid gap-2">                                   
                                    <button class="btn btn-primary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                                  </div>
                            </div>
                        </div>
                    </div>
                  </div>
                <div class="form-group col-md-3">
                    {{ Form::label('monto') }}
                    {{ Form::text('monto', $prestamo->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
                    {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('interes') }}
                    {{ Form::text('interes', $prestamo->interes, ['class' => 'form-control' . ($errors->has('interes') ? ' is-invalid' : ''), 'placeholder' => 'Interes']) }}
                    {!! $errors->first('interes', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('num_cuota') }}
                    {{ Form::text('num_cuota', $prestamo->num_cuota, ['class' => 'form-control' . ($errors->has('num_cuota') ? ' is-invalid' : ''), 'placeholder' => 'Num Cuota']) }}
                    {!! $errors->first('num_cuota', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group col-md-3">
                    {{ Form::label('tipo_moneda') }}
                    {{ Form::text('tipo_moneda', $prestamo->tipo_moneda, ['class' => 'form-control' . ($errors->has('tipo_moneda') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Moneda']) }}
                    {!! $errors->first('tipo_moneda', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_registro') }}
                    {{ Form::text('fecha_registro', $prestamo->fecha_registro, ['class' => 'form-control' . ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
                    {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_inicio') }}
                    {{ Form::text('fecha_inicio', $prestamo->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
                    {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('monto_x_cuota') }}
                    {{ Form::text('monto_x_cuota', $prestamo->monto_x_cuota, ['class' => 'form-control' . ($errors->has('monto_x_cuota') ? ' is-invalid' : ''), 'placeholder' => 'Monto X Cuota']) }}
                    {!! $errors->first('monto_x_cuota', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('total_interes') }}
                    {{ Form::text('total_interes', $prestamo->total_interes, ['class' => 'form-control' . ($errors->has('total_interes') ? ' is-invalid' : ''), 'placeholder' => 'Total Interes']) }}
                    {!! $errors->first('total_interes', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('monto_total') }}
                    {{ Form::text('monto_total', $prestamo->monto_total, ['class' => 'form-control' . ($errors->has('monto_total') ? ' is-invalid' : ''), 'placeholder' => 'Monto Total']) }}
                    {!! $errors->first('monto_total', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('clausula') }}
                    {{ Form::text('clausula', $prestamo->clausula, ['class' => 'form-control' . ($errors->has('clausula') ? ' is-invalid' : ''), 'placeholder' => 'Clausula']) }}
                    {!! $errors->first('clausula', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('estado_prestamo') }}
                    {{ Form::text('estado_prestamo', $prestamo->estado_prestamo, ['class' => 'form-control' . ($errors->has('estado_prestamo') ? ' is-invalid' : ''), 'placeholder' => 'Estado Prestamo']) }}
                    {!! $errors->first('estado_prestamo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('numero_operacion') }}
                    {{ Form::text('numero_operacion', $prestamo->numero_operacion, ['class' => 'form-control' . ($errors->has('numero_operacion') ? ' is-invalid' : ''), 'placeholder' => 'Numero Operacion']) }}
                    {!! $errors->first('numero_operacion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('clientes_id') }}
                    {{ Form::text('clientes_id', $prestamo->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes Id']) }}
                    {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('users_id') }}
                    {{ Form::text('users_id', $prestamo->users_id, ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''), 'placeholder' => 'Users Id']) }}
                    {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>                
        </div>    
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>