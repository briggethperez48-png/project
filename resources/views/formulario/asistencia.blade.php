@extends('layouts.appA')

@section('title', 'Asistencia')

@section('content')
<section class="content mt-4">

    <!-- Encabezado -->
    <div class="text-center mt-5 mb-4">
        <h1 class=" font-weight-bold">Registro de asistencia</h1>
        <p class="text-muted">Confirma tu asistencia</p>
    </div>

    <!-- Tarjeta principal -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="row">

                @for($dia = 1; $dia <= $diasEvento; $dia++)
                    <div class="col-md-4 col-lg-3 mb-4">

                        <div class="card h-100 text-center border-0 shadow-sm">

                            <div class="card-body d-flex flex-column justify-content-between">

                                <!-- Título -->
                                <h5 class="font-weight-bold mb-3">
                                    Día {{ $dia }}
                                </h5>

                                <!-- Estado -->
                                @if($dia == $diaActual)

                                    <form method="POST" action="{{ route('asistencia.store') }}">
                                        @csrf
                                        <input type="hidden" name="dia" value="{{ $dia }}">

                                        <button type="submit" 
                                            class="btn btn-success btn-block font-weight-bold">
                                            Confirmar asistencia
                                        </button>
                                    </form>

                                @elseif($dia < $diaActual)

                                    <span class="badge badge-secondary p-2">
                                        Día completado
                                    </span>

                                @else

                                    <span class="badge badge-light p-2 text-muted border">
                                        No disponible
                                    </span>

                                @endif

                            </div>

                        </div>

                    </div>
                @endfor

            </div>

        </div>
    </div>

</section>