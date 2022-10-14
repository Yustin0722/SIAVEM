@extends('layouts.app')

@section('template_title')
    Tlicencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo licencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tlicencias.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Tipo Licencia') }}
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
                                        <th>No</th>
                                        
										<th>Id</th>
										<th>Tipo de Licencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tlicencias as $tlicencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tlicencia->idTL }}</td>
											<td>{{ $tlicencia->nombreTL }}</td>

                                            <td>
                                                <form action="{{ route('tlicencias.destroy',$tlicencia->idTL) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tlicencias.show',$tlicencia->idTL) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('tlicencias.edit',$tlicencia->idTL) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  onclick="return confirm('Estas seguro de eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tlicencias->links() !!}
            </div>
        </div>
    </div>
@endsection
