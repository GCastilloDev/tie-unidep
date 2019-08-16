<?php

require_once 'control.php';
require_once 'tabla_1/principalTablaUno.php';
require_once 'tabla_2/principalTablaDos.php';
require_once 'tabla_3/principalTablaTres.php';
require_once 'tabla_4/principalTablaCuatro.php';

function obtenerInterpretacionColores($color, $posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion = obtenerInterpretacionTablaUno($color, $posicion);
    }

    if ($posicion == 1) {
        $interpretacion = obtenerInterpretacionTablaUno($color, $posicion);
    }

    if ($posicion == 2) {
        $interpretacion = obtenerInterpretacionTablaDos($color, $posicion);
    }

    if ($posicion == 3) {
        $interpretacion = obtenerInterpretacionTablaDos($color, $posicion);
    }

    if ($posicion == 4) {
        $interpretacion = obtenerInterpretacionTablaTres($color, $posicion);
    }

    if ($posicion == 5) {
        $interpretacion = obtenerInterpretacionTablaTres($color, $posicion);
    }

    if ($posicion == 6) {
        $interpretacion = obtenerInterpretacionTablaCuatro($color, $posicion);
    }

    if ($posicion == 7) {
        $interpretacion = obtenerInterpretacionTablaCuatro($color, $posicion);
    }

    return $interpretacion;
}

//var_dump(obtenerInterpretacionColores(0, 7));
