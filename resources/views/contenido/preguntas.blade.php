@extends('layouts.appA')

@section('title', 'Preguntas Frecuentes')

@section('content')
<section class="content">
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
                            <span>¿Si asisto al congreso de forma presencial, donde se llevará a cabo?</span>
                            <br>En el auditorio Dr. Héctor Fix-Zamudio del Instituto de Investigaciones Jurídicas de la Universidad Nacional Autónoma de México, ubicado en Circuito Maestro Mario de la Cueva s/n, Ciudad Universitaria, alcaldía Coyoacán, C.P. 04510, Ciudad de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Será transmitido en otras plataformas como Facebook o YouTube?</span>
                            <br><b>Si.</b> Se transmitirá en Facebook y YouTube, en las páginas oficiales de la Secretaria de Salud Pública de la Ciudad de México, así como en la página del Instituto de Investigaciones Jurídicas de la UNAM y la Academia Nacional de Medicina de México.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>¿Puedo obtener constancia si veo el congreso por Facebook o YouTube?</span>
                            <br><b>No.</b>Las constancias solo serán para las personas que tomen el evento presencial y cumplan con la asistencia del 80%; mientras que, para la modalidad virtual, por medio de la plataforma de Zoom únicamente. No se emitirán constancias para los participantes por YouTube o Facebook, sin importar el tiempo de conexión que permanezcan en dichas redes.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            <span>¿En qué fecha se realizará el Congreso?</span>
                            <br>El Congreso se llevará a cabo los días miércoles 25, jueves 26 y viernes 27 de marzo del 2026.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            <span>¿Cuándo estará disponible el programa del Congreso?</span>
                            <br>El programa estará disponible a partir del lunes 19 de marzo de 2026. Sin embargo, al tratarse de un evento internacional, podría tener alguna modificación, por cuestiones de agenda de los ponentes.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            <span>¿Tiene costo de inscripción?</span>
                            <br><b>No</b>, el Congreso es de carácter gratuito, de libre acceso al público a quien va dirigido.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>¿Quiénes pueden participar en el Congreso?</span>
                            <br>Está dirigido especialmente a los profesionales de la salud, profesionales de las áreas del derecho u otras profesiones interesadas en Voluntad Anticipada.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Qué es necesario para asistir al Congreso en modalidad virtual?</span>
                            <br>Deberá contar con conexión a internet y disponer de un equipo de cómputo, smartphone o tableta. Es indispensable descargar o tener instalado el programa Zoom, así como contar con un usuario activo en dicha plataforma, ya que este será necesario para el registro de su asistencia durante los tres días del evento. En caso de no contar con un usuario registrado en Zoom, no será posible participar.
                            <br>El correo electrónico vinculado a su cuenta de Zoom deberá ser el mismo que se utilice tanto para el registro como para el acceso al evento.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>¿Puedo participar en el Congreso de manera virtual, sin tener usuario del programa ZOOM?</span>
                            <br><b>No</b>, ya que la cantidad de participantes es limitada (1000 participantes) y el registro del usuario es necesario para contabilizar la asistencia al final del Congreso, lo cual es un requisito para ser acreedor a la constancia de participación.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            <span>¿Cuál es la fecha límite para inscribirse al Congreso?</span>
                            <br>La inscripción está sujeta a la disponibilidad de lugares tanto presenciales como virtuales. Una vez que la plataforma detecte que el cupo está lleno, no permitirá la inscripción de ningún participante. Por lo que recomendamos hacerlo a brevedad, si es de tu interés participar; para inscribirte deberás completar el formulario disponible en la pestaña de Registro del Participante.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            <span>¿Se otorgan constancias para los participantes virtuales?</span>
                            <br><b>Sí</b>. Una vez finalizado el Congreso, se emitirán constancias digitales de participación únicamente a las personas que se hayan registrado a través de la plataforma Zoom. Dichas constancias se generarán con el nombre proporcionado durante el registro, por lo que no será posible realizar cambios o modificaciones posteriores. Por ello, es indispensable verificar cuidadosamente los datos ingresados al momento de registrarse, ya que la información proporcionada será la utilizada para la emisión de la constancia. La correcta captura de los datos es responsabilidad del participante.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            <span>¿Se otorgan constancias para los participantes presenciales?</span>
                            <br><b>Sí</b>. Una vez finalizado el Congreso, se emitirán constancias digitales de participación únicamente a quienes cumplan con al menos el 80 % de asistencia. Para ello, será necesario registrar la entrada y la salida durante los tres días del evento. El primer día del Congreso se recogerá el registro impreso, y se respetará el nombre que aparezca en dicho registro para la emisión de la constancia. La correcta captura de los datos es responsabilidad del participante.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>¿Cómo se determinará el porcentaje de participación virtual?</span>
                            <br>Se establecerá <b>a través del reporte de asistencia proporcionado por la plataforma de ZOOM</b>, la cual mide los tiempos de conexión de cada participante, por lo que, debe mantener su nombre completo y visible durante todo el evento, tal y como realizaste tu registro. 
                            <br>Al ser la plataforma quien cuantifica los tiempos de conexión, no existe error, por lo que te pedimos consideres el tiempo que permanecerás conectado, ya que será monitoreado y <b>debe ser de un 80%</b>. 
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Cómo se determinará el porcentaje de participación presencial?</span>
                            <br>Para efectos del control de asistencia, el Congreso se llevará a cabo durante tres días, registrándose la entrada y la salida de los participantes en cada jornada, lo que da un total de <b>seis registros, equivalentes al 100% de asistencia.</b>
                            <br>Con el fin de cumplir con el requisito mínimo del <b>80% de participación</b>, será necesario contar con al menos <b>cinco de los seis registros</b>. Los participantes que no alcancen dicho número no serán acreedores a la constancia de participación.
                            <br>La correcta realización de los registros de entrada y salida es responsabilidad del participante
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>¿La constancia tiene alguna validez curricular?</span>
                            <br><b>Sí</b>. Al finalizar su participación en el Congreso, podrá obtener una constancia de participación con validez curricular, la cual otorga tres créditos. Este beneficio aplica únicamente para los participantes que se registren correctamente en cualquiera de las dos modalidades y que cumplan con los requisitos correspondientes a la modalidad en la que se hayan inscrito.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaD.png" alt="">
                        </div>
                        <div>
                            <span>¿Cuándo estará disponible mi constancia si participé de manera virtual?</span>
                            <br>Al concluir el Congreso, se cotejarán los tiempos de conexión de los participantes. A quienes cumplan con al menos el 80% de asistencia, se les enviará su constancia digital al correo electrónico con el que se registraron en la plataforma Zoom, en un plazo aproximado de uno a dos meses posteriores al evento.
                            <br>Lo anterior se debe a que se trata de un evento de carácter internacional, por lo que se prevé un alto número de asistentes, así como a las gestiones administrativas necesarias para la correcta emisión de las constancias.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaE.png" alt="">
                        </div>
                        <div>
                            <span>¿Cuándo estará disponible mi constancia si participé de manera presencial?</span>
                            <br>Al concluir el Congreso, se cotejarán los registros en las listas de asistencia. A quienes cumplan con al menos el 80% de asistencia, lo que corresponde a cinco de los seis registros, se les enviará su constancia digital al correo electrónico con el que se registraron, en un plazo aproximado de uno a dos meses posteriores al evento.
                            <br>Lo anterior se debe a que se trata de un evento de carácter internacional, por lo que se prevé un alto número de asistentes, así como a las gestiones administrativas necesarias para la correcta emisión de las constancias.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaF.png" alt="">
                        </div>
                        <div>
                            <span>¿Mi constancia tiene un error con mi nombre, puedo solicitar el cambio?</span>
                            <br><b>No</b>. Las constancias se emitirán con el nombre proporcionado durante el registro al evento, por lo que es indispensable verificar cuidadosamente sus datos antes de concluir el envío del formulario.
                            <br>Dado que usted realiza directamente el registro, la veracidad y corrección de la información proporcionada es de su entera responsabilidad, y no se realizarán modificaciones posteriores para la emisión de la constancia. 
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaA.png" alt="">
                        </div>
                        <div>
                            <span>Al concluir el congreso ¿Cómo tramito mi constancia?</span>
                            <br>No es necesario que el participante realice trámite alguno. El equipo de Capacitación y Difusión se encargará de recabar la información de asistencia, ya sea a través de los registros generados por la plataforma Zoom para los participantes en la modalidad virtual, o mediante la revisión de las listas de asistencia para quienes participen de manera presencial. Con base en dicha información, se elaborará la constancia de participación, la cual será enviada al correo electrónico con el que se haya realizado el registro.
                            <br>Únicamente se solicita considerar los tiempos establecidos para la entrega, los cuales serán de uno a dos meses posteriores a la conclusión del Congreso.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaB.png" alt="">
                        </div>
                        <div>
                            <span>¿Si en el tiempo señalado no recibo mi constancia a qué se debe?</span>
                            <br>En caso de no haber recibido su constancia de participación, ello se debe a que no se cumplieron los tiempos de conexión establecidos.
                            <br>Si existiera alguna duda al respecto, podrá comunicarse con el equipo de Capacitación y Difusión en materia de Voluntad Anticipada, quienes con gusto le informarán su porcentaje de participación, previa consulta en los registros, y atenderán cualquier aclaración correspondiente.
                        </div>
                    </div>
                    <div class="pregunta">
                        <div>
                            <img src="/project/storage/imagen/monarcaC.png" alt="">
                        </div>
                        <div>
                            <span>A mis compañeros ya les llego su constancia, y a mí no me llegó ¿A qué se debe?</span>
                            <br>Si cumpliste con el porcentaje de asistencia en la modalidad en la que te registraste, y aun no recibes tu constancia, es porque las mismas se envían en orden alfabético del apellido, a veces los tiempos de entrega difieren de uno a dos días debido a ello. 
                            <br>Si tu pregunta no está en el listado, comunícate con el equipo de capacitación y difusión en materia de voluntad anticipada, al siguiente correo: 
                            <a href="mailto:voluntad.anticipada.cdmx@gmail.com">voluntad.anticipada.cdmx@gmail.com</a>
                        </div>
                    </div>
               </ul>
            </div>
        </div>
    </section>
</section>