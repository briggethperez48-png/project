<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="/evento/resources/css/styleObj.css"> -->
    <link rel="stylesheet" href="{{ asset('css/styleObj.css') }}?v={{ time() }}">

    <script src="{{ asset('js/main.js') }}?v={{ time() }}"></script>
    <link rel="stylesheet" href="{{ asset('css/styleInd.css') }}?v={{ time() }}">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Objetivos</title>

</head>
<body>
        <!-- <my-header class="myHeader"> </my-header>
        <my-menu class="myMenu"> </my-menu> -->
    <section class="content">
        <div class="header2">
            <h2>
                Objetivos
            </h2>
        </div>
        <div class="principal">
            <h2>
                Objetivo General
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ratione cum minima molestias, facilis adipisci temporibus 
                eius nesciunt porro eaque illo! Perferendis autem maxime 
                voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
            </p>
        </div>
        <div class="secundario">
                <h3>
                    Objetivos Específicos
                </h3>
            <p>
                1.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ratione cum minima molestias, facilis adipisci temporibus 
                eius nesciunt porro eaque illo! Perferendis autem maxime 
                voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
            </p>
                <br>
            <p>
                2.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ratione cum minima molestias, facilis adipisci temporibus 
                eius nesciunt porro eaque illo! Perferendis autem maxime 
                voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
            </p>
                <br>
            <p>
                3.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ratione cum minima molestias, facilis adipisci temporibus 
                eius nesciunt porro eaque illo! Perferendis autem maxime 
                voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
            </p>
                <br>
            <p>
                4.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ratione cum minima molestias, facilis adipisci temporibus 
                eius nesciunt porro eaque illo! Perferendis autem maxime 
                voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
            </p>
                <br>
            <p>
                5.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ratione cum minima molestias, facilis adipisci temporibus 
                eius nesciunt porro eaque illo! Perferendis autem maxime 
                voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
            </p>
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

    <!-- <my-footer class="myFooter"> </my-footer> -->
</body>
</html>