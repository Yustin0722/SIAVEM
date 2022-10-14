@extends('layouts.app')

@section('template_title')
    {{ $unidade->name ?? 'Mostrar Unidad' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostar Unidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>idUnidad:</strong>
                            {{ $unidade->idUnidad }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $unidade->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $unidade->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $unidade->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $unidade->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Estilo:</strong>
                            {{ $unidade->estilo }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $unidade->color }}
                        </div>
                        <div class="form-group">
                            <strong>Traccion:</strong>
                            {{ $unidade->traccion }}
                        </div>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $unidade->combustible }}
                        </div>
                        <div class="form-group">
                            <strong>Ayofabricacion:</strong>
                            {{ $unidade->ayoFabricacion }}
                        </div>
                        <div class="form-group">
                            <strong>Contratacion:</strong>
                            {{ $unidade->contratacion }}
                        </div>
                        <div class="form-group">
                            <strong>Valoradqui:</strong>
                            {{ $unidade->valorAdqui }}
                        </div>
                        <div class="form-group">
                            <strong>Valorhacienda:</strong>
                            {{ $unidade->valorHacienda }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $unidade->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $unidade->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $unidade->observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
