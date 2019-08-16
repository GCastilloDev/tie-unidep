<?php

//require_once '../control.php';
require_once 'amarilloTablaDos.php';
require_once 'azulTablaDos.php';
require_once 'cafeTablaDos.php';
require_once 'grisTablaDos.php';
require_once 'negroTablaDos.php';
require_once 'rojoTablaDos.php';
require_once 'verdeTablaDos.php';
require_once 'violetaTablaDos.php';

function obtenerInterpretacionTablaDos($color, $posicion)
{
    $interpretacion = ['', ''];

    //Color Gris
    if ($color == 0) {
        $interpretacion = ['Gris', interpretacionGrisTablaDos($posicion)];
    }

    //Color Azul
    if ($color == 1) {
        $interpretacion = ['Azul', interpretacionAzulTablaDos($posicion)];
    }

    //Color Verde
    if ($color == 2) {
        $interpretacion = ['Verde', interpretacionVerdeTablaDos($posicion)];
    }

    //Color Rojo
    if ($color == 3) {
        $interpretacion = ['Rojo', interpretacionRojoTablaDos($posicion)];
    }

    //Color Amarillo
    if ($color == 4) {
        $interpretacion = ['Amarillo', interpretacionAmarilloTablaDos($posicion)];
    }

    //Color Violeta
    if ($color == 5) {
        $interpretacion = ['Violeta', interpretacionVioletaTablaDos($posicion)];
    }

    //Color Cafe
    if ($color == 6) {
        $interpretacion = ['Cafe', interpretacionCafeTablaDos($posicion)];
    }

    //Color Negro
    if ($color == 7) {
        $interpretacion = ['Negro', interpretacionNegroTablaDos($posicion)];
    }

    return $interpretacion;
}

if ($prueba) {
    $aux = obtenerInterpretacionTablaDos(0, 0);

    echo 'Interpretación Tabla Dos<br>';
    echo 'Color: '.$aux[0].'<br>';
    echo 'Interpretación: '.$aux[1];
}
