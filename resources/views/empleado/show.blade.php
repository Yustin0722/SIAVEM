@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempleados:</strong>
                            {{ $empleado->idEmpleados }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $empleado->departamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $empleado->Puesto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreemple:</strong>
                            {{ $empleado->NombreEmple }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $empleado->Apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $empleado->Apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $empleado->FechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $empleado->Cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empleado->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correoinstitucional:</strong>
                            {{ $empleado->CorreoInstitucional }}
                        </div>
                        <div class="form-group">
                            <strong>Tl Id:</strong>
                            {{ $empleado->TL_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $empleado->FechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fotolicencia:</strong>
                            {{ $empleado->FotoLicencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
