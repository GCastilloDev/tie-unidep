<?php

//require_once '../control.php';
require_once 'amarilloTablaCuatro.php';
require_once 'azulTablaCuatro.php';
require_once 'cafeTablaCuatro.php';
require_once 'grisTablaCuatro.php';
require_once 'negroTablaCuatro.php';
require_once 'rojoTablaCuatro.php';
require_once 'verdeTablaCuatro.php';
require_once 'violetaTablaCuatro.php';

function obtenerInterpretacionTablaCuatro($color, $posicion)
{
    $interpretacion = ['', ''];

    //Color Gris
    if ($color == 0) {
        $aux = interpretacionGrisTablaCuatro($posicion);
        $interpretacion = ['Gris', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    //Color Azul
    if ($color == 1) {
        $aux = interpretacionAzulTablaCuatro($posicion);
        $interpretacion = ['Azul', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    //Color Verde
    if ($color == 2) {
        $aux = interpretacionVerdeTablaCuatro($posicion);
        $interpretacion = ['Verde', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    //Color Rojo
    if ($color == 3) {
        $aux = interpretacionRojoTablaCuatro($posicion);
        $interpretacion = ['Rojo', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    //Color Amarillo
    if ($color == 4) {
        $aux = interpretacionAmarilloTablaCuatro($posicion);
        $interpretacion = ['Amarillo', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    //Color Violeta
    if ($color == 5) {
        $aux = interpretacionVioletaTablaCuatro($posicion);
        $interpretacion = ['Violeta', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    //Color Cafe
    if ($color == 6) {
        $aux = interpretacionCafeTablaCuatro($posicion);
        $interpretacion = ['Cafe', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    //Color Negro
    if ($color == 7) {
        $aux = interpretacionNegroTablaCuatro($posicion);
        $interpretacion = ['Negro', $aux[0], $aux[1], $aux[2], $aux[3], $aux[4], $aux[5]];
    }

    return $interpretacion;
}

if ($prueba) {
    $aux = obtenerInterpretacionTablaCuatro(0, 0);

    echo 'Interpretación Tabla Cuatro<br>';
    echo 'Color: '.$aux[0].'<br>';
    echo '<b>'.$aux[1].'</b><br>';
    echo $aux[2].'<br>';
    echo '<b>'.$aux[3].'</b><br>';
    echo $aux[4].'<br>';
    echo '<b>'.$aux[5].'</b><br>';
    echo $aux[6].'<br>';
}
