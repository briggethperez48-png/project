@extends('layouts.appA')

@section('title', 'Objetivos')

@section('content')
<section class="content">
    <section class="mt-5 mb-5 ml-4 mr-4 shadow rounded text-justify">
        <div class="m-4">
            <div class="text-center">
                <h1>
                    Objetivos
                </h1>
            </div>
            <div class="">
                <h2 class="text-center">
                    Objetivo General
                </h2>
                <p>
                    Fomentar un diálogo interdisciplinario y global sobre la voluntad anticipada 
                    como derecho humano fundamental, promoviendo su implementación efectiva, la 
                    sensibilización social y la elaboración de propuestas normativas.
                </p>
            </div>
            <div class="objetivosEsp">
                <ul>
                    <h2 class="text-center">
                        Objetivos Específicos
                    </h2>
                    <div class="objetivo">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            Promover el intercambio internacional de mejores prácticas: 
                            Reunir a expertos nacionales e internacionales en bioética, derecho, 
                            medicina y ciencias sociales para analizar y adaptar modelos 
                            exitosos de voluntad anticipada al contexto mexicano, 
                            con énfasis en la experiencia pionera de la Ciudad de México.
                        </div>
                    </div>
                    <div class="objetivo">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            Fortalecer la capacitación profesional al desarrollar competencias 
                            en profesionales de la salud, juristas y académicos para la aplicación 
                            ética y legal de la voluntad anticipada, mediante conferencias y mesas 
                            de trabajo que aborden desde la redacción de documentos hasta el 
                            acompañamiento en el proceso de una voluntad anticipada.
                        </div>
                    </div>
                    <div class="objetivo">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            Sensibilizar a la sociedad, aprovechando la relevancia 
                            del mes de marzo como mes de la voluntad anticipada para 
                            generar actividades que informen a la población sobre su derecho 
                            a decidir con autonomía sobre el final de la vida, desmitificando 
                            tabúes culturales.
                        </div>
                    </div>
                    <div class="objetivo">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            Generar propuestas normativas y operativas, para poder elaborar 
                            recomendaciones para perfeccionar la figura de la Voluntad Anticipada 
                            en la Ciudad de México y su implementación a nivel nacional, incluyendo 
                            protocolos para instituciones de salud y sistemas de registro accesibles.
                        </div>
                    </div>
                    <div class="objetivo">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            Consolidar redes de colaboración interdisciplinaria: Establecer alianzas entre 
                            la Secretaría de Salud Pública, la Universidad Nacional Autónoma de México 
                            y la Academia Nacional de Medicina, Instituciones Internacionales y 
                            organizaciones de la sociedad civil para impulsar proyectos de investigación, 
                            educación y políticas públicas en torno a la muerte digna.
                        </div>
                    </div>
                    <div class="objetivo">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            Posicionar a México como líder en el diálogo global al consolidar a la 
                            Ciudad de México, al Instituto de Investigaciones Jurídicas de la UNAM y a 
                            la Academia Nacional de Medicina como referentes en el estudio y promoción 
                            de la voluntad anticipada, destacando su marco jurídico y su enfoque 
                            humanista en el contexto latinoamericano.
                        </div>
                    </div>
               </ul>
            </div>
        </div>
    </section>
</section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

    <!-- Para asistencia -->
    @if(session('asistencia'))
        <script>
            Swal.fire({
            title: "Asistencia registrada",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    <!-- Para registro -->
    @if(session('mensaje'))
        <script>
            Swal.fire({
            title: "¡Gracias por tu registro!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            confirmButtonColor: "#9d2148"
            });
        </script>
    @endif

    <!-- Para Evaluación -->
<div id="datos-evaluacion" 
     data-finalizada="{{ session('aprobado') !== null ? 'true' : 'false' }}"
     data-aprobado="{{ session('aprobado') ? 'true' : 'false' }}"
     data-aciertos="{{ session('aciertos') ?? 0 }}"
     data-folio="{{ session('folio') ?? '' }}"
     data-error="{{ session('error') ?? '' }}"
     style="display: none;">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        const contenedor = document.getElementById('datos-evaluacion');
        
        const finalizada = contenedor.getAttribute('data-finalizada') === 'true';
        const aprobado = contenedor.getAttribute('data-aprobado') === 'true';
        const aciertos = contenedor.getAttribute('data-aciertos');
        const folio = contenedor.getAttribute('data-folio');
        const mensajeError = contenedor.getAttribute('data-error');

        if (mensajeError && mensajeError !== "") {
            Swal.fire({
                title: 'Atención',
                text: mensajeError,
                icon: 'error',
                confirmButtonColor: '#3085d6'
            });
            return;
        }

        if (finalizada) {
            if (aprobado) {
                // MODAL APROBADO
                Swal.fire({
                    title: '¡Felicidades!',
                    icon: 'success',
                    html: `
                        <div class="text-center">
                            <p class="h5">Has aprobado la evaluación.</p>
                            <p>Tus aciertos: <strong>${aciertos} / 4</strong></p>
                            <div style="background-color: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; margin-top: 15px;">
                                <strong>Folio generado:</strong><br>
                                <span style="font-size: 1.5rem; font-weight: bold;">${folio}</span>
                            </div>
                        </div>
                    `,
                    confirmButtonColor: '#28a745'
                });
            } else {
                // MODAL NO APROBADO (El que te faltaba)
                Swal.fire({
                    title: 'Evaluación no aprobada',
                    icon: 'warning',
                    html: `
                        <div class="text-center">
                            <p class="h5">Lo sentimos, no has alcanzado el puntaje mínimo.</p>
                            <p>Obtuviste: <strong>${aciertos} de 4 aciertos</strong></p>
                        </div>
                    `,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Regresar'
                });
            }
        }
    });
</script>