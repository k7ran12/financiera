<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $cliente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('Apellido', $cliente->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumDoc') }}
            {{ Form::text('NumDoc', $cliente->NumDoc, ['class' => 'form-control' . ($errors->has('NumDoc') ? ' is-invalid' : ''), 'placeholder' => 'Numdoc']) }}
            {!! $errors->first('NumDoc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Region') }}
            {{ Form::text('Region', $cliente->Region, ['class' => 'form-control' . ($errors->has('Region') ? ' is-invalid' : ''), 'placeholder' => 'Region']) }}
            {!! $errors->first('Region', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Provincia') }}
            {{ Form::text('Provincia', $cliente->Provincia, ['class' => 'form-control' . ($errors->has('Provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
            {!! $errors->first('Provincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Distrito') }}
            {{ Form::text('Distrito', $cliente->Distrito, ['class' => 'form-control' . ($errors->has('Distrito') ? ' is-invalid' : ''), 'placeholder' => 'Distrito']) }}
            {!! $errors->first('Distrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $cliente->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumTelefono') }}
            {{ Form::text('NumTelefono', $cliente->NumTelefono, ['class' => 'form-control' . ($errors->has('NumTelefono') ? ' is-invalid' : ''), 'placeholder' => 'Numtelefono']) }}
            {!! $errors->first('NumTelefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CorreoElec') }}
            {{ Form::text('CorreoElec', $cliente->CorreoElec, ['class' => 'form-control' . ($errors->has('CorreoElec') ? ' is-invalid' : ''), 'placeholder' => 'Correoelec']) }}
            {!! $errors->first('CorreoElec', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodocumentos_id') }}
            {{ Form::text('tipodocumentos_id', $cliente->tipodocumentos_id, ['class' => 'form-control' . ($errors->has('tipodocumentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipodocumentos Id']) }}
            {!! $errors->first('tipodocumentos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>