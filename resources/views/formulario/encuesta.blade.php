<!DOCTYPE html>
<html lang="es">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styleForm.css') }}?v={{ time() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="content">
        <div class="header2">
            <h2>
                Encuesta de Satisfacción
            </h2>
        </div>
        <div class="text">
            <p>
                A continuación, le invitamos a participar en nuestra encuesta de satisfacción. 
                El propósito de esta encuesta es recoger sus impresiones sobre el Seminario Interinstitucional 
                de Seguridad del Paciente. Valoramos enormemente sus comentarios, ya que nos permitirán optimizar 
                y enriquecer nuestras futuras actividades.
            </p>
        </div>
        <form method="POST" action="{{ route('encuesta.store') }}">
            @csrf
            <div>
            <label for="pregunta1">Pregunta 1</label>
            <p>
                ¿Cree que los temas abordados en el Seminario Interinstitucional 
                de Seguridad del Paciente, serán utiles para su desarrollo profesional?
            </p>
            <select name="pregunta1" required>
                <option value="">Elija una opción</option>
                <option value="Muy util">Muy útil</option>
                <option value="Util">Útil</option>
                <option value="Regular">Regular</option>
                <option value="Malo">Malo</option>
            </select>
            </div>

            <div>
            <label for="pregunta2">Pregunta 2</label>
            <p>
                ¿Logró ampliar sus conocimientos en su área de trabajo tras concluir 
                el Seminario Interinstitucional de Seguridad del Paciente?
            </p>
            <select name="pregunta2" required>
                <option value="">Elija una opción</option>
                <option value="Si">Sí</option>
                <option value="No">No</option>
            </select>
            </div>

            <div>
            <label for="pregunta3">Pregunta 3</label>
            <p>
                La información y difusión del Seminario interinstitucional
                de Seguridad del Paciente
            </p>
            <select name="pregunta3" required>
                <option value="">Elija una opción</option>
                <option value="Excelente">Excelente</option>
                <option value="Bueno">Bueno</option>
                <option value="Regular">Regular</option>
            </select>
            </div>

            <div>
            <label for="sugerencias">Sugerencias</label>
            <p>
                ¿Que aspectos considera que podrían mejorarse para 
                nuestros próximos eventos?
            </p>
            <textarea name="sugerencias"></textarea>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </section>
</body>
</html>