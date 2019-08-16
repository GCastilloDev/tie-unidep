<?php

function obtenerCapacidadAprendizaje($total){

    $ca = '';

    if($total >= 172){
        $ca = 'Sobresaliente';
    }

    if($total >= 157 && $total <= 171){
        $ca = 'Superior';
    }

    if($total >= 137 && $total <= 150){
        $ca = 'Medio Alto';
    }

    if($total >= 123 && $total <= 136){
        $ca = 'Normal';
    }

    if($total >= 102 && $total <= 122){
        $ca = 'Medio Bajo';
    }

    if($total >= 95 && $total <= 101){
        $ca = 'Inferior';
    }

    if($total <= 94){
        $ca = 'Deficiente';
    }

    return $ca;
}