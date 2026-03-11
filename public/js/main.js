// Header

class main extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = 
        `
            <body>
                <!-- Header -->
                <section class="header">
                        <a class="logo" href="https://salud.cdmx.gob.mx/" target="_blank" rel="no-referrer">
                    <img src="/Base/imagen/SEDESAV.png" alt="">
                        </a>
                    <header class="headerA">
                        ...Soy un encabezado...
                    </header>
                </section>
            </body>
        `;
    }
}

// Menú corregido y funcional para Laravel en XAMPP
class menu extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        const base = "/evento/public"; 

this.innerHTML = 
         `
             <body>
     <section class="header">
         <nav class="nav container" id="nav">
             <ul class="nav_links">
                 <li class="nav_item">
                     <a href="${base}/home" class="nav_link">Inicio</a>
                 </li>
                 <li class="nav_item">
                     <a href="${base}/objetivos" class="nav_link">Objetivos</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/ponentes" class="nav_link">Ponentes</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/formulario/create" class="nav_link">Registro</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/programa" class="nav_link">Programa</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/memorias" class="nav_link">Memorias del evento</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/encuesta" class="nav_link">Encuesta de satisfacción</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/preguntas" class="nav_link">Preguntas frecuentes</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/registro-asistencia" class="nav_link">Asistencia</a>
                 </li>
                 <li class="nav_item">
                    <a href="${base}/contacto" class="nav_link">Contactos</a>
                 </li>
             </ul>
             <a href="#nav" class="nav_hamburguer">
                 <i class="fa-solid fa-bars"></i>
             </a>
             <a href="#" class="nav_close">
                 <i class="fa fa-times"></i>
             </a>
         </nav>
     </section>
             </body>
         `;
    }
}

// Footer
class footer extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = 
        `
          <body>
            <footer class="footer">
                <div class="SEDESA">
                    SEDESA © 2026
                </div>
                <div class="redes">
                    <a href="https://www.facebook.com/SSaludCdMx/" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://x.com/SSaludCdMx" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/c/SSaludCdMxComunicacion" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <div class="priv">
                    <a href=" ">
                        Aviso de privacidad
                    </a>
                </div>
            </footer>
        </body>
        `;
    }
}

window.customElements.define("my-header", main);
window.customElements.define("my-menu", menu);
window.customElements.define("my-footer", footer);