@extends('layouts.app')

@section('template_title')
    {{ $licencia->name ?? 'Show Licencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Licencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('licencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idlicencia:</strong>
                            {{ $licencia->idLicencia }}
                        </div>
                        <div class="form-group">
                            <strong>Tl Id:</strong>
                            {{ $licencia->TL_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $licencia->FechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fotolicencia:</strong>
                            {{ $licencia->FotoLicencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
