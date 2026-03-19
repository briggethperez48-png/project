@extends('layouts.appA')

@section('title', 'Programa')

@section('content')
    <section class="mt-5 mb-5 ml-4 mr-4 shadow rounded text-justify">
        <div class="m-4 p-3">
            <div class="text-center mb-3">
                <div class="d-flex align-items-center justify-content-center mx-4 mt-1">
                    <img src="/project/storage/imagen/congreso-monarca-removebg-preview.png" alt=""
                    class="img-fluid" style="max-width: 60%; height: auto;">
                </div>
                <h1 class="text-justify">
                    Programa
                </h1>
            </div>
                <div class="card mb-4 shadow-sm">
    <div class="card-header text-white">
        <h4 class="mb-0">Miércoles 25 de Marzo 2026</h4>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-0">
            <thead class="thead-light text-center">
                <tr>
                    <th style="width: 15%;">Hora</th>
                    <th style="width: 35%;">Ponente</th>
                    <th style="width: 50%;">Tema/Actividad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center font-weight-bold">08:40 - 09:00</td>
                    <td colspan="2" class="text-center text-uppercase font-weight-bold bg-light">Registro</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">09:00 - 09:45</td>
                    <td colspan="2" class="text-center text-uppercase font-weight-bold bg-light">Acto Protocolario de Inauguración</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">09:45 - 10:30</td>
                    <td><strong>Dr. Diego Valadés</strong><br><small>Investigador Emérito (México - IIJ UNAM)</small></td>
                    <td>La voluntad anticipada en el Estado constitucional de derecho: autonomía personal, dignidad humana y límites del poder público</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">10:30 - 11:15</td>
                    <td><strong>Dr. Ignacio Maglio</strong><br><small>Vicepresidente Red Bioética Unesco (Argentina)</small></td>
                    <td>Decisiones anticipadas y cuidado al final de la vida; una mirada desde la bioética centrada en la persona</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">11:15 - 12:00</td>
                    <td><strong>Dr. José Luis Vargas Ovalle</strong><br><small>Médico Intensivista (Colombia)</small></td>
                    <td>La voluntad anticipada como derecho fundamental en Colombia: desarrollo normativo, jurisprudencial y desafíos actuales</td>
                </tr>
                <tr class="table-warning text-center">
                    <td class="font-weight-bold">12:00 - 12:20</td>
                    <td colspan="2">RECESO</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">12:20 - 14:05</td>
                    <td>
                        <ul class="list-unstyled mb-0 small">
                            <li>• Dr. José Alejandro Esquivel</li>
                            <li>• Dr. Andrés Ortiz Hernández</li>
                            <li>• Dra. Silvia Allende</li>
                        </ul>
                        <p class="mt-2 mb-0"><strong>Moderador:</strong> Dr. Raúl Carrillo Esper</p>
                    </td>
                    <td><strong>Mesa de Trabajo:</strong> Voluntad Anticipada, Directrices Médicas, Planificación Compartida de la Atención y Adecuación del Esfuerzo Terapéutico</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card mb-4 shadow-sm">
    <div class="card-header text-white">
        <h4 class="mb-0">Jueves 26 de Marzo 2026</h4>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-0">
            <thead class="thead-light text-center">
                <tr>
                    <th style="width: 15%;">Hora</th>
                    <th style="width: 35%;">Ponente</th>
                    <th style="width: 50%;">Tema / Actividad</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="font-weight-bold">09:15 - 09:30</td>
                    <td colspan="2" class="text-uppercase font-weight-bold bg-light">Registro</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">09:35 - 10:20</td>
                    <td><strong>Dra. Carla Faralli</strong><br><small>Emeritus Professor (Italia - Univ. Bolonia)</small></td>
                    <td>Aspectos filosóficos del debate sobre el tema de la eutanasia y suicidio asistido. Comparación entre EE.UU. e Italia</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">10:20 - 11:05</td>
                    <td><strong>Dra. María Lourdes Labaca Zabala</strong><br><small>Profesora e Investigadora (España - UPV)</small></td>
                    <td>Modelos Europeos de eutanasia y suicidio asistido en Bélgica, Suiza, Luxemburgo y Francia</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">11:05 - 11:50</td>
                    <td><strong>Dr. Esteban David Buriticá</strong><br><small>Profesor e Investigador (Colombia)</small></td>
                    <td>Eutanasia, Suicidio asistido y derechos humanos: un estudio de jurisprudencia comparada</td>
                </tr>
                <tr class="table-warning text-center">
                    <td class="font-weight-bold">11:50 - 12:10</td>
                    <td colspan="2">RECESO</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">12:10 - 14:00</td>
                    <td>
                        <ul class="list-unstyled mb-0 small">
                            <li>• Dra. Asunción Álvarez del Río</li>
                            <li>• Dra. Jennifer Hincapié Sánchez</li>
                            <li>• Samara Martínez y Aurelien Guilabert</li>
                        </ul>
                        <p class="mt-2 mb-0"><strong>Moderador:</strong> Dr. David Benítez Valladares</p>
                    </td>
                    <td><strong>Mesa de Trabajo:</strong> Bioética, Eutanasia y Muerte Médicamente Asistida: Panorama legislativo Nacional y Mundial</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card mb-4 shadow-sm">
    <div class="card-header text-white">
        <h4 class="mb-0">Viernes 27 de Marzo 2026</h4>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-0">
            <thead class="thead-light text-center">
                <tr>
                    <th style="width: 15%;">Hora</th>
                    <th style="width: 35%;">Ponente</th>
                    <th style="width: 50%;">Tema / Actividad</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="font-weight-bold">09:15 - 09:30</td>
                    <td colspan="2" class="text-uppercase font-weight-bold bg-light">Registro</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">09:35 - 10:20</td>
                    <td><strong>Dr. Víctor Manuel Martínez Bullé Goyri</strong><br><small>Investigador Titular C (México - IIJ UNAM)</small></td>
                    <td>Voluntad anticipada y políticas públicas de salud: retos para su implementación efectiva</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">10:20 - 11:05</td>
                    <td><strong>Dr. Federico Preve Cocco</strong><br><small>Diputado (Uruguay)</small></td>
                    <td>El proceso legislativo de la eutanasia en Uruguay: debates, consensos y lecciones para la regulación</td>
                </tr>
                <tr class="table-warning text-center">
                    <td class="font-weight-bold">11:05 - 11:25</td>
                    <td colspan="2">RECESO</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">11:25 - 12:25</td>
                    <td>
                        <ul class="list-unstyled mb-0 small">
                            <li>• Dra. Pastora Melgar</li>
                            <li>• Lic. José Luis Belmont Lugo</li>
                            <li>• Dra. María del Pilar Hernández Martínez</li>
                        </ul>
                        <p class="mt-2 mb-0"><strong>Moderador:</strong> Dr. Fernando Cano Valle</p>
                    </td>
                    <td><strong>Mesa de Trabajo:</strong> Eje temático Jurídico y legislativo en torno a la Voluntad Anticipada en México</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold">12:25 - 12:50</td>
                    <td><strong>Dr. Daniel Márquez Gómez</strong><br><small>Investigador de Tiempo Completo (IIJ UNAM)</small></td>
                    <td>Pasos hacia una iniciativa Federal en materia de Voluntad Anticipada</td>
                </tr>
                <tr class="text-center">
                    <td class="font-weight-bold">12:50 - 13:35</td>
                    <td colspan="2" class="text-uppercase font-weight-bold bg-light">Clausura</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
        </div>
    </section>