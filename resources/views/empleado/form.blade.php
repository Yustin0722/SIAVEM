<div class="box box-info padding-1">
    <div class="box-body">
        
      
    <div class="form-group">
            {{ Form::label('departamento_id') }}
            {{ Form::select('departamento_id',$departamento,$empleado->departamento_id, ['class' => 'form-control' . ($errors->has('departamento_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('departamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Puesto') }}
            {{ Form::text('Puesto', $empleado->Puesto, ['class' => 'form-control' . ($errors->has('Puesto') ? ' is-invalid' : ''), 'placeholder' => 'Puesto']) }}
            {!! $errors->first('Puesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreEmple') }}
            {{ Form::text('NombreEmple', $empleado->NombreEmple, ['class' => 'form-control' . ($errors->has('NombreEmple') ? ' is-invalid' : ''), 'placeholder' => 'Nombreemple']) }}
            {!! $errors->first('NombreEmple', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido1') }}
            {{ Form::text('Apellido1', $empleado->Apellido1, ['class' => 'form-control' . ($errors->has('Apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('Apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido2') }}
            {{ Form::text('Apellido2', $empleado->Apellido2, ['class' => 'form-control' . ($errors->has('Apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('Apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaNacimiento') }}
            {{ Form::date('FechaNacimiento', $empleado->FechaNacimiento, ['class' => 'form-control' . ($errors->has('FechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanacimiento']) }}
            {!! $errors->first('FechaNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::text('Cedula', $empleado->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $empleado->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CorreoInstitucional') }}
            {{ Form::text('CorreoInstitucional', $empleado->CorreoInstitucional, ['class' => 'form-control' . ($errors->has('CorreoInstitucional') ? ' is-invalid' : ''), 'placeholder' => 'Correoinstitucional']) }}
            {!! $errors->first('CorreoInstitucional', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>

</div>