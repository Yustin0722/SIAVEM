<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('nombre Tipo Licencia') }}
            {{ Form::text('nombreTL', $tlicencia->nombreTL, ['class' => 'form-control' . ($errors->has('nombreTL') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreTL', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('tlicencias.index') }}"> Atras</a>

    </div>
</div>