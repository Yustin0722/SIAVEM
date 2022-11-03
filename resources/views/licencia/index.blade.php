@extends('layouts.app')

@section('template_title')
    Licencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Licencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('licencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nueva') }}
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
                                      
                                        
									
										<th>Tipo de Licencia</th>
										<th>Fechavencimiento</th>
										<th>Fotolicencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($licencias as $licencia)
                                        <tr>
											<td>{{ $licencia->tlicencia->nombreTL }}</td>
											<td>{{ $licencia->FechaVencimiento }}</td>
                                            <td>
                                            <img src="{{ asset('storage').'/'.$licencia->FotoLicencia }}" width="300" alt="">   
                                            </td>


                                            <td>
                                                <form action="{{ route('licencias.destroy',$licencia->idLicencia) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('licencias.show',$licencia->idLicencia) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('licencias.edit',$licencia->idLicencia) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $licencias->links() !!}
            </div>
        </div>
    </div>
@endsection
