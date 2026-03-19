//Pais de procedencia. Está en funcion de EstadoProcedencia
    function obtenerPaises(){
        fetch("https://query.data.world/s/m7hmng2elmrbpffknj26ohjz2zcng3?dws=00000")
        .then(function(response){
            return response.json()
        })
        .then(function(data){
            cargarSelect(data)
        })
        .catch(function(error){
            console.log(error)
        })
    }
    function cargarSelect(listaPaises){
        const EstadoSeleccionado = document.getElementById("EstadoProcedencia").value;
        const paisSelect = document.getElementById("slcPais");
        paisSelect.innerHTML = ""; 

        let miSelect=document.querySelector("#slcPais")
        miSelect.innerHTML=""
        if (EstadoSeleccionado === "Soy extranjero"){
            miSelect.innerHTML+=`<option value=" ">Seleccione uno...</option>`
            for(let unPais of listaPaises){
                let selected = "";

                if(unPais.abbreviation === paisGuardado){
                    selected = "selected";
                }

                miSelect.innerHTML += `<option value="${unPais.abbreviation}" ${selected}>
                    ${unPais.country}
                </option>`
            }
        }
        else{
            // miSelect.innerHTML+=`<option value="MX">Mexico</option>`
            let selected = paisGuardado === "MX" ? "selected" : "";
            miSelect.innerHTML+=`<option value="MX" ${selected}>Mexico</option>`
        }
    }

    //Estado de procedencia. Arreglo ligado al select
    const EstadoProcedencia = [
        "Seleccione uno...","Aguascalientes","Baja California","Baja California Sur",
        "Campeche","Chiapas","Chihuahua","Ciudad de México","Coahuila","Colima","Durango",
        "Estado de México","Guanajuato","Guerrero","Hidalgo","Jalisco","Michoacán","Morelos",
        "Nayarit","Nuevo León","Oaxaca","Puebla","Querétaro","Quintana Roo","San Luis Potosí",
        "Sinaloa","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatán","Zacatecas",
        "Soy extranjero"
    ];
    const select = document.getElementById('EstadoProcedencia');
        EstadoProcedencia.forEach(estado => {
            let option = document.createElement('option');
            option.value = estado;
            option.text = estado;

            if(estado === estadoGuardado){
                option.selected = true;
            }
            select.add(option);
        });
        document.getElementById("EstadoProcedencia").addEventListener("change", function(){
            obtenerPaises();
        });

        // Sexo. Limpia el datalist
    const input = document.getElementById('inputSexo');
        input.addEventListener('input', function () {

            if (this.value.trim().toLowerCase() === 'otro') {
                // Limpiar el campo
                this.value = '';
            }
        });

window.addEventListener("load", function(){

    if(estadoGuardado){
        document.getElementById("EstadoProcedencia").value = estadoGuardado;
        obtenerPaises();
    }
});

                        