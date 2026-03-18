@extends('layouts.appA')

@section('title', 'Objetivos')

@section('content')
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    @if(session('folio'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Encuesta completada",
                    html: "Tu folio es:<br><b>{{ session('folio') }}</b>",
                    icon: "success",
                    showCancelButton: true,
                    confirmButtonText: "Copiar folio",
                    confirmButtonColor: "#9d2148",
                    cancelButtonText: "Cerrar",
                    cancelButtonColor: " #55585a"
                }).then((result) => {
                    if (result.isConfirmed) {
                        navigator.clipboard.writeText("{{ session('folio') }}");
                        Swal.fire({
                            title: "Copiado",
                            text: "El folio fue copiado al portapapeles",
                            icon: "success",
                            confirmButtonText: "Aceptar",
                            confirmButtonColor: "#9d2148"
                        });
                    }
                });
            });
        </script>
    @endif

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

    <!-- Para asistencia -->
    @if(session('mensaje'))
        <script>
            Swal.fire({
            title: "¡Gracias por tu suscripción!",
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
