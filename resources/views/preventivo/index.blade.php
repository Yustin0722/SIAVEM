@extends('layouts.app')

@section('template_title')
    Preventivo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Preventivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('preventivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                    <th>Placa</th>
										<th>Taller </th>
										<th>Fecha Mantenimiento</th>
										<th>Tipo Mantenimiento</th>
										<th>Horimetro</th>
										<th>Proximo Servicio</th>
										<th>Monto</th>
                                        <th>Acciones</th>



                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($preventivos as $preventivo)
                                        <tr>
                                        <td>{{ $preventivo->unidade->placa }}</td>
											<td>{{ $preventivo->tallere->NombreTaller }}</td>
											<td>{{ $preventivo->FechaMant }}</td>
											<td>{{ $preventivo->tipoMante }}</td>
											<td>{{ $preventivo->Horimetro }}</td>
											<td>{{ $preventivo->ProximoSer }}</td>
											<td>{{ $preventivo->Monto }}</td>


                                            <td>
                                                <form action="{{ route('preventivos.destroy',$preventivo->idPreventivo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('preventivos.show',$preventivo->idPreventivo) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('preventivos.edit',$preventivo->idPreventivo) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $preventivos->links() !!}
            </div>
        </div>
    </div>
@endsection
