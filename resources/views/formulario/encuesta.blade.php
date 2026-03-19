@extends('layouts.appA')

@section('title', 'Encuesta')

@section('content')
   <section class="content mt-5 mb-5 ml-4 mr-4 shadow rounded">
        <div class="header2">
            <h2>
                Evaluación
            </h2>
        </div>
        <div class="text">
            <p>
                <span>Instrucciones:</span> Seleccione la respuesta correcta en cada caso.
            </p>
            <p>
                <span>Criterio de acreditación:</span> mínimo 3 respuestas correctas de 4 (75%).
            </p>
        </div>
        <form method="POST" action="{{ route('encuesta.store') }}">
            @csrf
            <div class="radio-card-group">
                <!-- Respuesta: A -->
                <label for="pregunta1" class="radio-label">Pregunta 1</label>
                <p>
                    Desde la perspectiva de mejora continua, el manejo adecuado de quejas permite:
                </p>
                <div class="d-grid text-left align-content-center h6">
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta1" type="radio" value="A" class="radio-input mr-3"> 
                            A) Identificar oportunidades de mejora en los procesos.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta1" type="radio" value="B" class="radio-input mr-3"> 
                            B) Sancionar automáticamente al personal involucrado.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta1" type="radio" value="C" class="radio-input mr-3"> 
                            C) Evitar que las personas usuarias regresen al servicio.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta1" type="radio" value="D" class="radio-input mr-3"> 
                            D) Reducir la carga administrativa sin análisis adicional.
                    </div>
                </div>
            </div>

            <div>
                <!-- Respuesta: C -->
            <div class="radio-card-group">
                <label for="pregunta2" class="radio-label">Pregunta 2</label>
                <p>
                    ¿Cuál es un ejemplo de eliminación de barrera actitudinal en la práctica cotidiana?
                </p>
                <div class="d-grid text-left align-content-center h6">
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta2" type="radio" value="A" class="radio-input mr-3"> 
                        A) Colocar una rampa en la entrada principal.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta2" type="radio" value="B" class="radio-input mr-3"> 
                        B) Proporcionar formatos impresos en letra pequeña únicamente.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta2" type="radio" value="C" class="radio-input mr-3"> 
                        C) Explicar directamente a la persona con discapacidad su diagnóstico, estudios y tratamiento, solicitando su opinión y consentimiento, y no solo hablar con su acompañante.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta2" type="radio" value="D" class="radio-input mr-3"> 
                        D) Solicitar que la persona usuaria “traiga a alguien que le explique”.
                    </div>
                </div>
            </div>

            <div class="radio-card-group">
                <label for="pregunta3" class="radio-label">Pregunta 3</label>
                <p>
                    ¿Cuál es una manifestación temprana de desgaste profesional que requiere intervención preventiva?
                </p>
                <div class="d-grid text-left align-content-center h6">
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta3" type="radio" value="A" class="radio-input mr-3"> 
                        A) Aumento de empatía y compromiso.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta3" type="radio" value="B" class="radio-input mr-3"> 
                        B) Irritabilidad constante y respuestas impulsivas ante usuarios.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta3" type="radio" value="C" class="radio-input mr-3"> 
                        C) Mejora en el trabajo en equipo.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta3" type="radio" value="D" class="radio-input mr-3"> 
                        D) Satisfacción laboral sostenida.
                    </div>
                </div>
            </div>

            <div class="radio-card-group">
                <label for="pregunta4" class="radio-label">Pregunta 4</label>
                <p>
                    ¿Cuál de las siguientes acciones representa trato diferenciado SIN constituir discriminación?
                </p>
                <div class="d-grid text-left align-content-center h6">
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta4" type="radio" value="A" class="radio-input mr-3"> 
                        A) Negar la atención a una persona por su identidad de género.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta4" type="radio" value="B" class="radio-input mr-3"> 
                        B) Priorizar la atención de una urgencia médica con base en criterios clínicos.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta4" type="radio" value="C" class="radio-input mr-3"> 
                        C) Retrasar la consulta de una persona con discapacidad por falta de tiempo.
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <input name="pregunta4" type="radio" value="D" class="radio-input mr-3"> 
                        D) Brindar información incompleta a personas adultas mayores para “evitar confusión”.
                    </div>
                </div>
            </div>
                <hr>
            <div>
            <label for="escala" class="h3">Nivel de Satisfacción</label>
            <p class="text-justify">
                En una escala del 1 al 10, ¿qué tanto recomendaría nuestros eventos a un familiar, 
                amigo, colega o institución para su desarrollo en el marco de la calidad?
                <br>
                    Donde:
                    <p class="ml-2 text-justify">
                        1 = No lo recomendaría
                    <br> 10 = Lo recomendaría ampliamente</p>
                
            </p>
            <P>
                <span class="d-flex">
                    0 <input type="range" id="escala" 
                        name="escala" min="0" max="10" 
                        step="0.5" value="0" class="mb-2 mx-3"> 
                    10
                </span>
            </P>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </section>