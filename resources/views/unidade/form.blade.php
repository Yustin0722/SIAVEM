<div class="box box-info padding-1">
    <div class="box-body">
   

        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('categoria_id',$categorias ,$unidade->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $unidade->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $unidade->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $unidade->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estilo') }}
            {{ Form::text('estilo', $unidade->estilo, ['class' => 'form-control' . ($errors->has('estilo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('estilo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $unidade->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </br>
        <div class="form-group">
           <label for="traccion">Tipo de traccion:</label>
           <select name="traccion" id="$unidade->traccion">
                <option value=""></option>
                <option value="FWD">FWD</option>
                <option value="RWD">RWD</option>
                <option value="AWD">AWD</option>
                <option value="4WD">4WD</option>
                <option value="4X4">4X4</option>
           </select>
        </div>
        </br>
        <div class="form-group">
           <label for="combustible">Tipo de Combustible:</label>
           <select name="combustible" id="$unidade->combustible">
                <option value=""></option>
                <option value="Regular">Combustible Regular</option>
                <option value="Disel">Combustible Diesel</option>
                <option value="Super">Combustible  Super</option>
                
           </select>
        </div>
        </br>
        <div class="form-group">
            {{ Form::label('Año de Fabricacion') }}
            {{ Form::text('ayoFabricacion', $unidade->ayoFabricacion, ['class' => 'form-control' . ($errors->has('ayoFabricacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ayoFabricacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo de contratacion') }}
            {{ Form::text('contratacion', $unidade->contratacion, ['class' => 'form-control' . ($errors->has('contratacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('contratacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor de Adquisicion') }}
            {{ Form::text('valorAdqui', $unidade->valorAdqui, ['class' => 'form-control' . ($errors->has('valorAdqui') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('valorAdqui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor de Hacienda') }}
            {{ Form::text('valorHacienda', $unidade->valorHacienda, ['class' => 'form-control' . ($errors->has('valorHacienda') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('valorHacienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </br>
        <div class="form-group">
           <label for="estado">Estado:</label>
           <select name="estado" id="$unidade->estado">
                <option value=""></option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
           </select>
        </div>
        </br>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $unidade->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::text('observacion', $unidade->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
</br>
    <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('unidades.index') }}"> Atras</a>
    </div>
</div>