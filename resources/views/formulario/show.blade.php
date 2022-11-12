@extends('layouts.app')

@section('template_title')
    {{ $formulario->name ?? 'Show Formulario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Solicitud</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('formularios.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo Solicitud:</strong>
                            {{ $formulario->idFormularios }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo:</strong>
                            {{ $formulario->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $formulario->departamento->nombreDepa }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable de la Gira:</strong>
                            {{ $formulario->empleado->Cedula}}
                        </div>
                        <div class="form-group">
                            <strong>Objetivo:</strong>
                            {{ $formulario->Objetivo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Personas:</strong>
                            {{ $formulario->NumePersonas }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Salida:</strong>
                            {{ $formulario->FechaSalida }}
                        </div>
                         <div class="form-group">
                            <strong>Horas Salida:</strong>
                            {{ $formulario->HoraS }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Regreso:</strong>
                            {{ $formulario->FechaRegreso }}
                        </div>
                       
                        <div class="form-group">
                            <strong>Horar Regreso:</strong>
                            {{ $formulario->HoraR }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $formulario->Lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Itinerario:</strong>
                            {{ $formulario->Itinerario }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $formulario->Observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
