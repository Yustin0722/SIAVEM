
@extends('layouts.app')

@section('content')
<div style="background: url('images/login.jpg') no-repeat; background-size:cover">
<div class="container">

    <div class="row justify-content-center"  >
        <div class="col-md-3">
                <br/>
            <div class="card text-center">
            
                <div class="card-header">{{ __('Municipalidad de Santa Cruz') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido Unidad Transporte') }}
                </div>
            </div>
        </div>
    </div>
    <div style=" max-width: 1000px; height: 350px; "></div>
</div>
</div>
@endsection
