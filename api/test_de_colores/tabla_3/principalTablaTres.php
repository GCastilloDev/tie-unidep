<?php

//require_once '../control.php';
require_once 'amarilloTablaTres.php';
require_once 'azulTablaTres.php';
require_once 'cafeTablaTres.php';
require_once 'grisTablaTres.php';
require_once 'negroTablaTres.php';
require_once 'rojoTablaTres.php';
require_once 'verdeTablaTres.php';
require_once 'violetaTablaTres.php';

function obtenerInterpretacionTablaTres($color, $posicion)
{
    $interpretacion = ['', ''];

    //Color Gris
    if ($color == 0) {
        $interpretacion = ['Gris', interpretacionGrisTablaTres($posicion)];
    }

    //Color Azul
    if ($color == 1) {
        $interpretacion = ['Azul', interpretacionAzulTablaTres($posicion)];
    }

    //Color Verde
    if ($color == 2) {
        $interpretacion = ['Verde', interpretacionVerdeTablaTres($posicion)];
    }

    //Color Rojo
    if ($color == 3) {
        $interpretacion = ['Rojo', interpretacionRojoTablaTres($posicion)];
    }

    //Color Amarillo
    if ($color == 4) {
        $interpretacion = ['Amarillo', interpretacionAmarilloTablaTres($posicion)];
    }

    //Color Violeta
    if ($color == 5) {
        $interpretacion = ['Violeta', interpretacionVioletaTablaTres($posicion)];
    }

    //Color Cafe
    if ($color == 6) {
        $interpretacion = ['Cafe', interpretacionCafeTablaTres($posicion)];
    }

    //Color Negro
    if ($color == 7) {
        $interpretacion = ['Negro', interpretacionNegroTablaTres($posicion)];
    }

    return $interpretacion;
}

if ($prueba) {
    $aux = obtenerInterpretacionTablaTres(0, 0);

    echo 'Interpretación Tabla Tres<br>';
    echo 'Color: '.$aux[0].'<br>';
    echo 'Interpretación: '.$aux[1];
}
