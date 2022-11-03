@extends('layouts.app')

@section('template_title')
    Unidade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unidade') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('unidades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                     
										<th>Categoria</th>
										<th>Tracciones</th>
										<th>Combustibles</th>
										<th>Estados</th>
										<th>Placa</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Estilo</th>
										<th>Color</th>
										<th>Año fabricacion</th>
										<th>Contratacion</th>
										<th>Valor Adquisitivo</th>
										<th>Valor Hacienda</th>
										<th>Rvt</th>
										<th>Descripcion</th>
                                         <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidades as $unidade)
                                        <tr>
                                    
											<td>{{ $unidade->categoria->nombre }}</td>

											<td>{{ $unidade->traccione->nombreTraccion}}</td>
											<td>{{ $unidade->combustible->nombreCombustibles }}</td>
											<td>{{ $unidade->estado->nombreEstados}}</td>
											<td>{{ $unidade->placa }}</td>
											<td>{{ $unidade->marca }}</td>
											<td>{{ $unidade->modelo }}</td>
											<td>{{ $unidade->estilo }}</td>
											<td>{{ $unidade->color }}</td>
											<td>{{ $unidade->ayoFabricacion }}</td>
											<td>{{ $unidade->contratacion }}</td>
											<td>{{ $unidade->valorAdqui }}</td>
											<td>{{ $unidade->valorHacienda }}</td>
											<td>{{ $unidade->RVT }}</td>
											<td>{{ $unidade->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('unidades.destroy',$unidade->idUnidad) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unidades.show',$unidade->idUnidad) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('unidades.edit',$unidade->idUnidad) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $unidades->links() !!}
            </div>
        </div>
    </div>
@endsection
