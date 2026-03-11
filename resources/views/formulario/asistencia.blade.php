<!DOCTYPE html>
<html lang="es">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styleForm.css') }}?v={{ time() }}">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
</head>
<body>
    <div class="content">
        <div class="header2">
            <h2>
                Registro de asistencia
            </h2>
        </div>

    @for($dia = 1; $dia <= $diasEvento; $dia++)
            <div class="dia-tab">
                <h2>Día {{ $dia }}</h2>
                @if($dia == $diaActual)
                    <form method="POST" action="{{ route('asistencia.store') }}">
                            @csrf
                        <input type="hidden" name="dia" value="{{ $dia }}">
                        <button type="submit">Confirmar asistencia</button>
                    </form>

                @elseif($dia < $diaActual)
                    <p>Día completado</p>
                @else
                    <p>Aún no disponible</p>
                @endif
            </div>
        @endfor
    </div>
</body>
</html>