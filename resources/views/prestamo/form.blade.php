<div class="box box-info padding-1">
    <div class="box-body">

        <div class="container">
            <div class="card">
                <div class="card-header">
                    Informacion Cliente
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-3">
                            {{ Form::label('Nombre') }}
                            {{ Form::text('Nombre', $prestamo->Nombre, ['class' => 'form-control' .
                            ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Apellido') }}
                            {{ Form::text('Apellido', $prestamo->Apellido, ['class' => 'form-control' .
                            ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
                            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Numero Documento') }}
                            {{ Form::text('NumDoc', $prestamo->NumDoc, ['class' => 'form-control' .
                            ($errors->has('NumDoc') ? ' is-invalid' : ''), 'placeholder' => 'Numero documento']) }}
                            {!! $errors->first('NumDoc', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Region') }}
                            {{ Form::text('Region', $prestamo->Region, ['class' => 'form-control' .
                            ($errors->has('Region') ? ' is-invalid' : ''), 'placeholder' => 'Region']) }}
                            {!! $errors->first('Region', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Provincia') }}
                            {{ Form::text('Provincia', $prestamo->Provincia, ['class' => 'form-control' .
                            ($errors->has('Provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
                            {!! $errors->first('Provincia', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Distrito') }}
                            {{ Form::text('Distrito', $prestamo->Distrito, ['class' => 'form-control' .
                            ($errors->has('Distrito') ? ' is-invalid' : ''), 'placeholder' => 'Distrito']) }}
                            {!! $errors->first('Distrito', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Direccion') }}
                            {{ Form::text('Direccion', $prestamo->Direccion, ['class' => 'form-control' .
                            ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Numero Telefono') }}
                            {{ Form::text('NumTelefono', $prestamo->NumTelefono, ['class' => 'form-control' .
                            ($errors->has('NumTelefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero telefono']) }}
                            {!! $errors->first('NumTelefono', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('Correo Electronico') }}
                            {{ Form::text('CorreoElec', $prestamo->CorreoElec, ['class' => 'form-control' .
                            ($errors->has('CorreoElec') ? ' is-invalid' : ''), 'placeholder' => 'Correo elecectronico'])
                            }}
                            {!! $errors->first('CorreoElec', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('documento') }}
                            {{ Form::text('tipodocumentos_id', $prestamo->tipodocumentos_id, ['class' => 'form-control'
                            . ($errors->has('tipodocumentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo
                            documento']) }}
                            {!! $errors->first('tipodocumentos_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col align-self-center gy-4">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    Informacion Prestamo
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-3">
                            {{ Form::label('monto prestamo') }}
                            {{ Form::text('monto', $prestamo->monto, ['class' => 'form-control' . ($errors->has('monto')
                            ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
                            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('interes %') }}
                            {{ Form::text('interes', $prestamo->interes, ['class' => 'form-control' .
                            ($errors->has('interes') ? ' is-invalid' : ''), 'placeholder' => 'Interes']) }}
                            {!! $errors->first('interes', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('n° cuotas') }}
                            {{ Form::text('num_cuota', $prestamo->num_cuota, ['class' => 'form-control' .
                            ($errors->has('num_cuota') ? ' is-invalid' : ''), 'placeholder' => 'Num Cuota']) }}
                            {!! $errors->first('num_cuota', '<div class="invalid-feedback">:message</div>') !!}
                        </div>                        
                        <div class="form-group col-md-3">
                            {{ Form::label('Tipo Moneda') }}
                            <select name="tipo_moneda" class="form-control form-select @error('tipo_moneda') is-invalid @enderror" aria-label="Default select example">                                
                                <option selected value="PEN">Soles</option>
                                <option value="USD">Dolares</option>                                
                            </select>
                            @error('tipo_moneda')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('fecha_inicio') }}
                            {{ Form::date('fecha_inicio', $prestamo->fecha_inicio, ['class' => 'form-control' .
                            ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
                            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
                        </div>                         
                        <div class="form-group col-md-9">
                            <div class="mb-3">
                                {{ Form::label('clausula') }}
                                <textarea class="form-control {{ $errors->has('clausula') ? ' is-invalid' : '' }}" name="clausula" rows="3"></textarea>
                                {!! $errors->first('clausula', '<div class="invalid-feedback">:message</div>') !!}
                              </div>
                              
                        </div>                                              
                        <div class="form-group col-md-3">
                            {{ Form::label('numero_operacion') }}
                            {{ Form::text('numero_operacion', $prestamo->numero_operacion, ['class' => 'form-control' .
                            ($errors->has('numero_operacion') ? ' is-invalid' : ''), 'placeholder' => 'Numero Operacion']) }}
                            {!! $errors->first('numero_operacion', '<div class="invalid-feedback">:message</div>') !!}
                        </div>                        
                        <div class="form-group col-md-3">
                            {{ Form::label('clientes_id') }}
                            {{ Form::text('clientes_id', $prestamo->clientes_id, ['class' => 'form-control' .
                            ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes Id']) }}
                            {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('monto_x_cuota') }}
                            {{ Form::text('monto_x_cuota', $prestamo->monto_x_cuota, ['class' => 'form-control' .
                            ($errors->has('monto_x_cuota') ? ' is-invalid' : ''), 'placeholder' => 'Monto X Cuota']) }}
                            {!! $errors->first('monto_x_cuota', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('total_interes') }}
                            {{ Form::text('total_interes', $prestamo->total_interes, ['class' => 'form-control' .
                            ($errors->has('total_interes') ? ' is-invalid' : ''), 'placeholder' => 'Total Interes']) }}
                            {!! $errors->first('total_interes', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group col-md-3">
                            {{ Form::label('monto_total') }}
                            {{ Form::text('monto_total', $prestamo->monto_total, ['class' => 'form-control' .
                            ($errors->has('monto_total') ? ' is-invalid' : ''), 'placeholder' => 'Monto Total']) }}
                            {!! $errors->first('monto_total', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>