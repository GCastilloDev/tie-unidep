<?php

function obtenerClasificacionCI($ci){

    $rango = '';

    if($ci >= 140){
        $rango = 'Sobresaliente';
    }

    if($ci >= 120 && $ci <= 139){
        $rango = 'Superior';
    }

    if($ci >= 110 && $ci <= 119){
        $rango = 'Medio Alto';
    }

    if($ci >= 90 && $ci <= 109){
        $rango = 'Normal';
    }

    if($ci >= 80 && $ci <= 89){
        $rango = 'Medio Bajo';
    }

    if($ci < 80){
        $rango = 'Deficiente';
    }

    return $rango;
}