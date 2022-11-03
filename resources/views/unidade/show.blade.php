@extends('layouts.app')

@section('template_title')
    {{ $unidade->name ?? 'Show Unidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Unidade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idunidad:</strong>
                            {{ $unidade->idUnidad }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $unidade->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tracciones Id:</strong>
                            {{ $unidade->tracciones_id }}
                        </div>
                        <div class="form-group">
                            <strong>Combustibles Id:</strong>
                            {{ $unidade->combustibles_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estados Id:</strong>
                            {{ $unidade->estados_id }}
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
                            <strong>Rvt:</strong>
                            {{ $unidade->RVT }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $unidade->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
