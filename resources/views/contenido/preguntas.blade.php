@extends('layouts.appA')

@section('title', 'Objetivos')

@section('content')
    <section class="mt-5 mb-5 ml-4 mr-4 shadow rounded text-justify">
        <div class="m-4">
            <div class="text-center">
                <h1>
                    Preguntas Frecuentes
                </h1>
            </div>
            <div class="preguntasFrec">
                <ul>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Dónde se realizará el Congreso?</span>
                            <br><b>PRESENCIAL.</b> En el Auditorio “Dr. Héctor Fix-Zamudio” del Instituto de Investigaciones Jurídicas de la Universidad Nacional Autónoma de México (UNAM), ubicado en Circuito Maestro Mario de la Cueva s/n, dentro de la Ciudad de la Investigación en Humanidades, en Ciudad Universitaria, Alcaldía Coyoacán, C.P. 04510, Ciudad de México.
                            <br><b>VIRTUAL.</b> Se llevará a cabo con interacción en tiempo real a través de la plataforma Zoom.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>Si quiero participar en el evento de manera virtual, ¿dónde puedo descargar el programa de ZOOM?</span>
                            <br>El programa de Zoom para nuevos usuarios, se puede descargar en el siguiente enlace:
                                <a href="https://zoom.us/signup" target="_blank" rel="noopener noreferrer">https://zoom.us/signup</a>
                            También es posible desde la App Store o Play Store de cualquier Smartphone o Tablet que cumpla con los requerimientos de la aplicación.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            <span>¿Dónde puedo registrarme para tomar el congreso de manera virtual?</span>
                            <br>El registro estará disponible en la pestaña 
                            <a href="{{url('/formulario/create')}}">“Registro de Participantes”</a>.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            <span>¿Dónde puedo registrarme para asistir al congreso de manera presencial?</span>
                            <br>El registro estará disponible en la pestaña 
                            <a href="{{url('/formulario/create')}}">“Registro de Participantes”</a>.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            <span>¿Puedo registrarme en ambas modalidades?</span>
                            <br><b>No.</b> Los participantes únicamente podrán registrarse en una sola modalidad. En caso de detectarse dos registros asociados a la misma cuenta o correo electrónico, el registro en la modalidad presencial será cancelado automáticamente, y la participación se limitará únicamente a la modalidad virtual.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>¿Quién organiza el Congreso Internacional e Interinstitucional?</span>
                            <br>La Secretaría de Salud de la Ciudad de México, a través del Programa de 
                            Voluntad Anticipada y Cuidados Paliativos, en coordinación con la Universidad 
                            Nacional Autónoma de México, por medio de su Instituto de Investigaciones Jurídicas, 
                            y con la Academia Nacional de Medicina de México.
                        </div>
                    </div>
               </ul>
            </div>
        </div>
    </section>