@extends('layouts.appA')

@section('title', 'Lista de Registros')

@section('content')
<div class="container-fluid mt-5 px-4">
    <div class="card shadow rounded border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h2 class="mb-0 text-primary">Listado de Participantes</h2>
            <a href="{{ url('formulario/create') }}" class="btn btn-success font-weight-bold">
                <i class="fas fa-plus"></i> Nuevo Registro
            </a>
        </div>

        <div class="card-body">
            @if(Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('mensaje') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-striped border">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre Completo</th>
                            <th>Profesión</th>
                            <th>Institución / Unidad</th>
                            <th>Ubicación</th>
                            <th>Edad/Sexo</th>
                            <th>Modalidad</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>
                                <strong>{{ $registro->Nombre }}</strong><br>
                                <small class="text-muted">{{ $registro->ApellidoPaterno }} {{ $registro->ApellidoMaterno }}</small>
                            </td>
                            <td>{{ $registro->Profesion }}</td>
                            <td>
                                <span class="badge badge-info">{{ $registro->Institucion }}</span><br>
                                <small>{{ $registro->UnidadMedica }}</small>
                            </td>
                            <td>
                                {{ $registro->EstadoProcedencia }}@if($registro->Alcaldia), {{ $registro->Alcaldia }} @endif<br>
                                <small class="font-italic">{{ $registro->Pais }}</small>
                            </td>
                            <td>{{ $registro->Edad }} años / {{ $registro->Sexo }}</td>
                            <td>
                                <span class="badge {{ $registro->Modalidad == 'PRESENCIAL' ? 'badge-primary' : 'badge-warning' }}">
                                    {{ $registro->Modalidad }}
                                </span>
                            </td>
                            <td>{{ $registro->Numero }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ url('/formulario/'.$registro->id.'/edit') }}" class="btn btn-sm btn-warning mr-2">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>

                                    <form action="{{ url('/formulario/'.$registro->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres borrar este registro?')">
                                            <i class="fas fa-trash"></i> Borrar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {!! $registros->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection