@extends('layouts.app')

@section('template_title')
    Tallere
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Talleres') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('talleres.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Taller') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                       
										<th>Numero Contratacion</th>
										<th>Nombre Taller</th>
										<th>Direccion </th>
										<th>Descripcion Especialidad</th>
										<th>Fecha de Vencimiento </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($talleres as $tallere)
                                        <tr>
                                        
											<td>{{ $tallere->Contratacion }}</td>
											<td>{{ $tallere->NombreTaller }}</td>
											<td>{{ $tallere->DireccionTaller }}</td>
											<td>{{ $tallere->DescripcionEsp }}</td>
											<td>{{ $tallere->FechaVenTaller }}</td>

                                            <td>
                                                <form action="{{ route('talleres.destroy',$tallere->idTaller) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('talleres.show',$tallere->idTaller) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('talleres.edit',$tallere->idTaller) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $talleres->links() !!}
            </div>
        </div>
    </div>
@endsection
