<?php

//require_once '../control.php';
require_once 'amarilloTablaUno.php';
require_once 'azulTablaUno.php';
require_once 'cafeTablaUno.php';
require_once 'grisTablaUno.php';
require_once 'negroTablaUno.php';
require_once 'rojoTablaUno.php';
require_once 'verdeTablaUno.php';
require_once 'violetaTablaUno.php';

function obtenerInterpretacionTablaUno($color,$posicion){

    $interpretacion = ['',''];

    //Color Gris
    if($color == 0){
        $interpretacion = ['Gris',interpretacionGrisTablaUno($posicion)];
    }

    //Color Azul
    if($color == 1){
        $interpretacion = ['Azul',interpretacionGrisTablaUno($posicion)];
    }

    //Color Verde
    if($color == 2){
        $interpretacion = ['Verde',interpretacionGrisTablaUno($posicion)];
    }

    //Color Rojo
    if($color == 3){
        $interpretacion = ['Rojo',interpretacionGrisTablaUno($posicion)];
    }

    //Color Amarillo
    if($color == 4){
        $interpretacion = ['Amarillo',interpretacionGrisTablaUno($posicion)];
    }

    //Color Violeta
    if($color == 5){
        $interpretacion = ['Violeta',interpretacionGrisTablaUno($posicion)];
    }

    //Color Cafe
    if($color == 6){
        $interpretacion = ['Cafe',interpretacionGrisTablaUno($posicion)];
    }

    //Color Negro
    if($color == 7){
        $interpretacion = ['Negro',interpretacionGrisTablaUno($posicion)];
    }

    return $interpretacion;
}

if($prueba){

    $aux = obtenerInterpretacionTablaUno(0,0);

    echo 'Interpretación Tabla Uno<br>';
    echo 'Color: '.$aux[0].'<br>';
    echo 'Interpretación: '.$aux[1];

}
