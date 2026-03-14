<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="{{ asset('css/styleIndex.css') }}?v={{ time() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        html,body{scroll-behavior: smooth;}
        img {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .text{
            font-size: 22px;
        }
        h1{color:#9d2148;} h2{color:#b28e5c;} h3{color:#55585a;} h4{color:#9d2148;}
        a{color: #b28e5c;font-weight: 500;} a:hover{color: #55585a;}
        button{background-color: #9d2148;} button:hover{background-color: #731734;}
        p{font-size: 25px;}
        span{color:#9d2148;font-weight: 700;}
    </style>
    <title>dizqueElCurso</title>
</head>
<body class="mx-auto my-auto text-center">
        <!-- Cuerpo -->
    <div class=" Global mt-5 mb-5 ml-4 mr-4 shadow rounded">
            <!-- Encabezado -->
        <div class="bloque" id="General">
            <div class="d-flex align-items-center justify-content-center mx-4 mt-1">
                <img src="/project/storage/imagen/congreso-monarca.jpg" alt=""
                class="img-fluid" style="max-width: 70%; height: auto;">
            </div>
                <!-- Contenido -->
            <div class="mt-2">
                    <!-- Introduccion -->
                <div class="text text-muted mx-4 text-justify">
                    <p>
                        La migración de la mariposa monarca, desde los bosques de Canadá 
                        hasta los santuarios de Michoacán, simboliza un viaje de memoria biológica, 
                        transformación y retorno al origen. Este recorrido inspira el lema 
                        <span>“Trascender en Paz”</span> y refleja los valores de la voluntad anticipada: 
                        la libertad de decidir con autonomía y dignidad sobre los cuidados y tratamientos 
                        al final de la vida.
                    </p>
                </div>
                    <!-- InfoGen -->
                <div class="row mt-2 mx-2 mx-md-4"
                        style="gap:20px;">
                    <!-- Columna 1 -->
                    <div class="col-12 col-sm shadow-sm p-2 rounded-lg">
                        <div><h3>Curso</h3></div>
                        <div class="">
                            <h4>
                                <i class="fa fa-globe"></i>
                                Modalidad Virtual
                            </h4>
                                    <p>
                                        <a href="">
                                        http://eventos salud.udinx.golume
                                        </a>
                                    <br>
                                        <a href="https://www.facebook.com/SSaludCdMx/">
                                        https://www.facebook.com/SSaludCdMx/
                                        </a>
                                    </p>
                        </div>
                        <div class="">
                            <h4>
                                <i class="fa fa-calendar"></i>
                                Lapso
                            </h4>
                                    <p>
                                        24 al 28 de marzo
                                    <br>
                                        8:00 10:30 horas
                                    </p>
                        </div>
                        <div class="">
                                <h4>Evento gratuito</h4>
                                    <p>10 horas crédito</p>
                        </div>
                    </div>
                    <!--Columna 2-->
                    <div class="col-12 col-sm shadow-sm p-2 rounded-lg">
                        <div><h3>Información</h3></div>
                        <div class="">
                            <h4>
                                <i class="fa fa-pencil"></i>
                                Inscripción
                            </h4>
                                <p>
                                    <a href="{{url('/formulario/create')}}">
                                    http://eventos salud.comx.gob.mx/create
                                    </a>
                                </p>
                        </div>

                        <div class="">
                            <h4>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                Contactos
                            </h4>
                                <p>
                                    <a href="mailto:fabiola.beltran.salud.cdmx@gmail.com">
                                    fabiola.beltran.salud.cdmx@gmail.com
                                    </a>
                                <br>
                                    5551321250 ext. 1339, 1356 y 1424
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloque" id="Presentacion">
            <div class="d-flex align-items-center justify-content-center pt-5 m-4">
                <div class="content text-justify">
                    <h1 class="ml-4">Justificación</h1>
                    <p>
                        El Congreso Internacional e Interinstitucional de Voluntad Anticipada convoca a profesionales de la salud, del derecho, académicos y sociedad en general a reflexionar sobre el final de la vida como un proceso de transiciones conscientes, guiado por la dignidad, la autodeterminación y el acompañamiento humano. Desde una perspectiva interdisciplinaria, el evento reunirá a especialistas en bioética, medicina, derecho y ciencias sociales para fortalecer competencias profesionales y sensibilidad ética en la atención de las personas en esta etapa.
                    </p>
                    <p>
                        Este congreso, organizado por la Secretaría de Salud Pública de la Ciudad de México, la Universidad Nacional Autónoma de México (UNAM), a través de su Instituto de Investigaciones Jurídicas, y la Academia Nacional de Medicina de México, busca contribuir a la construcción de un futuro en el que cada persona pueda decidir su camino con respeto y paz, promoviendo una atención humana y un enfoque de muerte digna.
                    </p>
                    <p>
                        El evento se realizará los días <span>miércoles 25, jueves 26 y viernes 27 de marzo del año en curso</span>, en modalidad híbrida: presencialmente en el Auditorio “Dr. Héctor Fix-Zamudio” del Instituto de Investigaciones Jurídicas de la UNAM y con transmisión en vivo para participantes virtuales, con interacción en tiempo real mediante la plataforma Zoom de la institución sede. Para ambas modalidades se requiere realizar una inscripción previa.
                    </p>
                </div>
            </div>
            <div class="inferior d-flex justify-content-center">
                <div>
                    <a href="{{url('/content/objetivos')}}">
                    <button type="submit" class="mb-4 mt-3 px-4 py-2 shadow-sm rounded border-0"
                            style="color:#fff; font-size:20px; font-weight:600;">Detalles</button>
                    </a>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
