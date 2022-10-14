@extends('layouts.app')

@section('template_title')
    {{ $tlicencia->name ?? 'Show Tlicencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Tipo Licencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tlicencias.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $tlicencia->idTL }}
                        </div>
                        <div class="form-group">
                            <strong> Tipo Licencia:</strong>
                            {{ $tlicencia->nombreTL }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
