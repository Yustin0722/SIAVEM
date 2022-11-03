<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Contratacion') }}
            {{ Form::text('Contratacion', $tallere->Contratacion, ['class' => 'form-control' . ($errors->has('Contratacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Contratacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Taller') }}
            {{ Form::text('NombreTaller', $tallere->NombreTaller, ['class' => 'form-control' . ($errors->has('NombreTaller') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombreTaller', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('DireccionTaller', $tallere->DireccionTaller, ['class' => 'form-control' . ($errors->has('DireccionTaller') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('DireccionTaller', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion de la Especialidad') }}
            {{ Form::text('DescripcionEsp', $tallere->DescripcionEsp, ['class' => 'form-control' . ($errors->has('DescripcionEsp') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('DescripcionEsp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Vencimiento Contrato') }}
            {{ Form::date('FechaVenTaller', $tallere->FechaVenTaller, ['class' => 'form-control' . ($errors->has('FechaVenTaller') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('FechaVenTaller', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('talleres.index') }}"> Atras</a>

    </div>
</div>