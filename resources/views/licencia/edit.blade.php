@extends('layouts.app')

@section('template_title')
    Update Licencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Licencia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('licencias.update', $licencia->idLicencia) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('licencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
