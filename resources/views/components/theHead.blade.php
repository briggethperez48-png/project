<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<!-- Header -->
    <section class="header">
            <a class="logo" href="https://salud.cdmx.gob.mx/" target="_blank" rel="no-referrer">
        <img src="/Base/imagen/SEDESAV.png" alt="">
            </a>
        <header class="">
            ...Soy un encabezado...
        </header>
    </section>
    {{$slot}}
</body>
</html>