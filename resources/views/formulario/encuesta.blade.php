   <section class="content">
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
            <div>
                <!-- Respuesta: A -->
            <label for="pregunta1">Pregunta 1</label>
            <p>
                Desde la perspectiva de mejora continua, el manejo adecuado de quejas permite:
            </p>
            
                <input name="pregunta1" type="radio" value="A"> A) Identificar oportunidades de mejora en los procesos.
                <input name="pregunta1" type="radio" value="B"> B) Sancionar automáticamente al personal involucrado.
                <input name="pregunta1" type="radio" value="C"> C) Evitar que las personas usuarias regresen al servicio.
                <input name="pregunta1" type="radio" value="D"> D) Reducir la carga administrativa sin análisis adicional.
            
            </div>

            <div>
                <!-- Respuesta: C -->
            <label for="pregunta2">Pregunta 2</label>
            <p>
                ¿Cuál es un ejemplo de eliminación de barrera actitudinal en la práctica cotidiana?
            </p>
            
                <input name="pregunta2" type="radio" value="A"> A) Colocar una rampa en la entrada principal.
                <input name="pregunta2" type="radio" value="B"> B) Proporcionar formatos impresos en letra pequeña únicamente.
                <input name="pregunta2" type="radio" value="C"> C) Explicar directamente a la persona con discapacidad su 
                    diagnóstico, estudios y tratamiento, solicitando su opinión y consentimiento, 
                    y no solo hablar con su acompañante.
                
                <input name="pregunta2" type="radio" value="D"> D) Solicitar que la persona usuaria “traiga a alguien que le explique”.
            
            </div>

            <div>
                <!-- Respuesta: B -->
            <label for="pregunta3">Pregunta 3</label>
            <p>
                ¿Cuál es una manifestación temprana de desgaste profesional que requiere intervención preventiva?
            </p>
            
                <input name="pregunta3" type="radio" value="A"> A) Aumento de empatía y compromiso.
                <input name="pregunta3" type="radio" value="B"> B) Irritabilidad constante y respuestas impulsivas ante usuarios.
                <input name="pregunta3" type="radio" value="C"> C) Mejora en el trabajo en equipo.
                <input name="pregunta3" type="radio" value="D"> D) Satisfacción laboral sostenida.
            
            </div>

            <div>
                <!-- Respuesta: B -->
            <label for="pregunta4">Pregunta 4</label>
            <p>
                ¿Cuál de las siguientes acciones representa trato diferenciado SIN constituir discriminación?
            </p>
            
                <input name="pregunta4" type="radio" value="A"> A) Negar la atención a una persona por su identidad de género.
                <input name="pregunta4" type="radio" value="B"> B) Priorizar la atención de una urgencia médica con base en criterios clínicos.
                <input name="pregunta4" type="radio" value="C"> C) Retrasar la consulta de una persona con discapacidad por falta de tiempo.
                <input name="pregunta4" type="radio" value="D"> D) Brindar información incompleta a personas adultas mayores para “evitar confusión”.
            
            </div>

            <div>
            <label for="escala">Nivel de Satisfacción</label>
            <p>
                <span>En una escala del 1 al 10, ¿qué tanto recomendaría nuestros eventos a un familiar, 
                amigo, colega o institución para su desarrollo en el marco de la calidad?</span>
                <br>
                <span>
                    Donde:
                    1 = No lo recomendaría
                    10 = Lo recomendaría ampliamente
                </span>
            </p>
            <P>
                0 <input type="range" id="escala" 
                    name="escala" min="0" max="10" 
                    step="0.5" value="0"> 
                10
            </P>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </section>