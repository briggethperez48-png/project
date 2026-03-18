@if(count($errors)>0)
    <div>
        <p class="bg-danger rounded text-white-50">¡Responda todos los campos!</p>
    </div>
@endif
<section class="content">
            @if(session('mensaje'))
            <div class="alert alert-warning">
                {{ session('mensaje') }}
            </div>
            @endif
            <div>
                <label for="Nombre">Nombre(es)</label>
                    <input type="text" name="Nombre"
                        value="{{isset($emplead1->Nombre)?$emplead1->Nombre:old('Nombre')}}">
            </div>
            <div>  
                <label for="ApellidoPaterno">Apellido Paterno</label>
                    <input type="text" name="ApellidoPaterno"
                        value="{{isset($emplead1->ApellidoPaterno)?$emplead1->ApellidoPaterno:old('ApellidoPaterno')}}">
            </div>
            <div>    
                <label for="ApellidoMaterno">Apellido Materno</label>
                    <input type="text" name="ApellidoMaterno"
                    value="{{isset($emplead1->ApellidoMaterno)?$emplead1->ApellidoMaterno:old('ApellidoMaterno')}}">
            </div>
            <div>
                <label for="Profesion">Profesión</label>
                    <input type="text" name="Profesion"
                        value="{{isset($emplead1->Profesion)?$emplead1->Profesion:old('Profesion')}}">
            </div>
                <!-- Procedencia -->
                <div class="form-group">
                <label for="Institucion">Institución de procedencia</label>
                    <select type="text" name="Institucion" id="instiPro" 
                            class="form-control input-lg dynamic" data-dependent="unidad">
                            <option value="">Escoja uno</option>
                                @foreach($institucion_list as $instiPro)
                                    <option value="{{ $instiPro->idInsti }}"
                                        {{ old('Institucion', $emplead1->Institucion ?? '') == $instiPro->idInsti ? 'selected' : '' }}>
                                        {{$instiPro->instiPro}}
                                    </option>
                                @endforeach
                    </select>
                </div>
                 
                <div class="form-group">
                <label for="UnidadMedica">Unidad médica</label>
                    <select name="UnidadMedica" id="unidad">

                        <option value="">Escoja uno</option>
                            @if(isset($unidades_list))
                            @foreach($unidades_list as $unidad)

                        <option value="{{ $unidad->unidad }}"
                            {{ old('UnidadMedica', $emplead1->UnidadMedica ?? '') == $unidad->unidad ? 'selected' : '' }}>
                            {{ $unidad->unidad }}
                        </option>
                            @endforeach
                            @endif

                    </select>
                </div>
                        
                <div>
                    <label for="EstadoProcedencia">Estado</label>   
                        <select id="EstadoProcedencia" onchange="obtenerPaises()"
                            name="EstadoProcedencia">
                            
                        </select>
                </div>
                <div class="btnPais">
                <label for="slcPais">País</label>
                        <select id="slcPais" name="Pais">

                        </select>
                </div>

                <!-- General -->
                 <div>
                    <label for="Edad">Edad</label>
                        <input type="number" name="Edad"
                        value="{{isset($emplead1->Edad)?$emplead1->Edad:old('Edad')}}">
                </div>
                <div>
                <label for="inputSexo">Sexo:</label>
                    <input name="Sexo" id="inputSexo" list="sexo" type="text" 
                        placeholder="Selecciona uno" style="margin: 15px;"
                        value="{{isset($emplead1->Sexo)?$emplead1->Sexo:old('Sexo')}}">
                        <datalist id="sexo">
                            <option value="Hombre">
                            <option value="Mujer">
                            <option value="Otro">
                                Escríbelo
                        </datalist>
                </div>
                <div>
                    @if($cuposDisponibles > 0)
                        <p>
                            Cupos presenciales disponibles: 
                            <strong>{{ $cuposDisponibles }} / 250</strong>
                        </p>
                    @else
                        <p style="color:red;">
                            Los cupos presenciales se han agotado.  
                            Solo quedan inscripciones virtuales.
                        </p>
                    @endif
                </div>
                <div>
                    <label for="Modalidad">Modalidad</label>
                        <select name="Modalidad">
                            <option value="PRESENCIAL"
                                {{ old('Modalidad', $emplead1->Modalidad ?? '') == 'PRESENCIAL' ? 'selected' : '' }}>
                                PRESENCIAL
                            </option>
                            <option value="VIRTUAL"
                                {{ old('Modalidad', $emplead1->Modalidad ?? '') == 'VIRTUAL' ? 'selected' : '' }}>
                                VIRTUAL
                            </option>

                        </select>
                </div>
                        
                <div>
                    <label for="Numero">Número telefónico</label>
                        <input type="text" name="Numero"
                            value="{{isset($emplead1->Numero)?$emplead1->Numero:old('Numero')}}">
                </div>
                <!-- Verificacion -->
                <div class="GestorCalidad">
                    <label for="GestorCalidad">¿Eres gestor de calidad?</label>
                    <br>
                        <div>
                            <p>
                                Sí. <input type="radio" name="GestorCalidad" value="1"
                                    {{ old('GestorCalidad', $emplead1->GestorCalidad ?? '') == 1 ? 'checked' : '' }}>
                            </p>
                        </div>
                        <div>
                            <p>
                                No. <input type="radio" name="GestorCalidad" value="0"
                                    {{ old('GestorCalidad', $emplead1->GestorCalidad ?? '') == 0 ? 'checked' : '' }}>
                            </p>
                        </div>
                </div>

                <div>
                    <label for="email">Correo electrónico</label>
                        <input type="email" name="email" id="email"
                            value="{{isset($emplead1->email)?$emplead1->email:''}}">
                </div>
                       
                <div>
                    <label for="psswd">Contraseña</label>
                        <input type="password" name="password">
                </div>

<div class="btn">
    <div class="submit">
        <input type="submit" value="{{$modo}}">
    </div>
    
    <div class="button">
        <a href="{{url('/objetivos')}}">Regresar</a>
    </div>
</div>
</section>