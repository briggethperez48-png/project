<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/styleMem.css') }}?v={{ time() }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <my-header class="myHeader"> </my-header>
    <my-menu class="myMenu"> </my-menu>
   

    <section class="cursos container">
        <h2>Memorias de eventos</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href=" http://eventos.salud.cdmx.gob.mx/Inicio" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/1.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/HigieneManos/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/2.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/AtencionPersona/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/3.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/QuintoCongreso/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/4.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/AvalesCiudadanos/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/5.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/PrimerSeminarioAcademico/public/Inicio" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/6.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href=" http://189.240.225.200/CongresoCalidad/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/7.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href=" http://eventos.salud.cdmx.gob.mx/Inicio" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/1.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/HigieneManos/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/2.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/AtencionPersona/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/3.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/QuintoCongreso/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/4.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/AvalesCiudadanos/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/5.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://189.240.225.200/PrimerSeminarioAcademico/public/Inicio" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/6.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href=" http://189.240.225.200/CongresoCalidad/public/" target="_blank" rel="no-referrer">
                    <img src="/evento/storage/img/7.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <my-footer class="myFooter"> </my-footer>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}?v={{ time() }}"></script>
</body>
</html>