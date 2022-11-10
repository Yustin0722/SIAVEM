<div class="box box-info padding-1">
    <div class="box-body">
        
        
    <div  class="form-group">
            {{ Form::label('Tipo de Licencia') }}
            {{ Form::select('TL_id',$tlicencias ,$licencia->TL_id,['class' => 'form-control' . ($errors->has('TL_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('TL_id', '<div class="invalid-feedback">:message</div>') !!}
          </div>

        <div class="form-group">
            {{ Form::label('FechaVencimiento') }}
            {{ Form::date('FechaVencimiento', $licencia->FechaVencimiento, ['class' => 'form-control' . ($errors->has('FechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
            {!! $errors->first('FechaVencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <br>
            <label for="FotoLicencia">FotoLicencia: </label>
            <img src="{{ asset('storage').'/'.$licencia->FotoLicencia }}" width="300" alt="">   
            <input type="file" name="FotoLicencia" value="" id="FotoLicencia">
            <br>

            </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('licencias.index') }}"> Atras</a>

    </div>
</div>