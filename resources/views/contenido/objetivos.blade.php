<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
     integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Roboto', sans-serif;}
        html, 
        body{background-color: white;max-width: 100%;overflow-y: scroll;}
        img {
            margin: 0;
            padding: 0;
        }
        .text{
            font-size: 22px;
        }
        h2{color:#9d2148;font-weight: 700;} h3{color:#b28e5c;font-weight: 600;} h4{color:#9d2148;}
        a{color: #b28e5c;font-weight: 500;} a:hover{color: #55585a;}
        button{background-color: #9d2148;} button:hover{background-color: #731734;}
        p{font-size: 25px;}
    </style>
    <title>Objetivos</title>
</head>
<body class="mx-auto my-auto text-justify">
    <section class="mt-5 mb-5 ml-4 mr-4 shadow rounded">
        <div class="m-4">
            <div class="text-center">
                <h2>
                    Objetivos
                </h2>
            </div>
            <div class="">
                <h2 class="text-center">
                    Objetivo General
                </h2>
                <p>
                    Fomentar un diálogo interdisciplinario y global sobre la voluntad anticipada como derecho humano fundamental, promoviendo su implementación efectiva, la sensibilización social y la elaboración de propuestas normativas.
                </p>
            </div>
            <div class="">
                    <h3 class="text-center">
                        Objetivos Específicos
                    </h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ratione cum minima molestias, facilis adipisci temporibus 
                    eius nesciunt porro eaque illo! Perferendis autem maxime 
                    voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
                </p>
                <p>
                    2.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ratione cum minima molestias, facilis adipisci temporibus 
                    eius nesciunt porro eaque illo! Perferendis autem maxime 
                    voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
                </p>
                <p>
                    3.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ratione cum minima molestias, facilis adipisci temporibus 
                    eius nesciunt porro eaque illo! Perferendis autem maxime 
                    voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
                </p>
                <p>
                    4.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ratione cum minima molestias, facilis adipisci temporibus 
                    eius nesciunt porro eaque illo! Perferendis autem maxime 
                    voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
                </p>
                <p>
                    5.  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ratione cum minima molestias, facilis adipisci temporibus 
                    eius nesciunt porro eaque illo! Perferendis autem maxime 
                    voluptatum nesciunt reiciendis nemo possimus voluptas ipsa.
                </p>
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
</body>
</html>