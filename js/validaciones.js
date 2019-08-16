/*
FUNCIONES PARA TEST HABILITAR O DESHABILITAR INPUT TIPO RADIO Y CHECKBOX
*/

function recorridoRadioButton(nombreGrupo, elementoBloquear) {

    //console.log(elementoBloquear);
    //console.log("/////");

    for (var i = 0; i < nombreGrupo.length; i++) {

        prueba = nombreGrupo[i].id;

        //console.log(prueba);

        if (nombreGrupo[i].id == elementoBloquear.id) {
            //console.log("holiii");
            nombreGrupo[i].disabled = true;
        } else {
            nombreGrupo[i].disabled = false;
        }

    }
};


function recorridoCheckbox(c1, c2, c3, c4, c5) {

    var arreglo = [c1, c2, c3, c4, c5];
    var suma = 0;

    //Ciclo que recorre el arreglo para contar cuantos checkboxs estan
    //activos
    for (var i = 0; i < arreglo.length; i++) {
     if (arreglo[i].checked) {
            suma = suma + 1;
            //console.log(suma);
        }
    }

    //Si hay dos o mas activos desactiva a los demas
    //Si no reactiva
    if (suma >= 2) {
        for (var i = 0; i < arreglo.length; i++) {
            if (arreglo[i].checked == false) {
                arreglo[i].disabled = true;
            }
        }
    } else{
        for (var i = 0; i < arreglo.length; i++) {
            //console.log(i);
            //console.log(arreglo[i]);
            if (arreglo[i].checked == false) {
                arreglo[i].disabled = false;
            }
        }
    }

};