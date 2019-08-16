<?php

function obtenerPercentil($edad, $puntaje)
{
    $tabla = array(
        array(12, 53, 47, 43, 39, 33, 24, 14),
        array(13, 54, 49, 45, 40, 34, 27, 17),
        array(14, 54, 49, 45, 40, 34, 27, 17),
        array(15, 55, 50, 46, 41, 35, 29, 19),
        array(16, 55, 50, 46, 41, 35, 29, 19),
        array(17, 56, 52, 49, 45, 39, 35, 28),
        array(18, 57, 53, 50, 46, 42, 36, 29),
        array(19, 57, 54, 51, 47, 42, 37, 30),
        array(20, 58, 54, 51, 47, 43, 37, 30),
        array(21, 58, 54, 51, 47, 43, 37, 30),
        array(22, 59, 55, 52, 48, 44, 38, 31),
    );
    $percentil = -99;

    if ($edad >= 22) {
        if ($puntaje <= $tabla[10][7]) {
            $percentil = 1;
        }

        if ($puntaje <= $tabla[10][6] && $puntaje > $tabla[10][7]) {
            $percentil = 10;
        }

        if ($puntaje <= $tabla[10][5] && $puntaje > $tabla[10][6]) {
            $percentil = 25;
        }

        if ($puntaje <= $tabla[10][4] && $puntaje > $tabla[10][5]) {
            $percentil = 50;
        }

        if ($puntaje <= $tabla[10][3] && $puntaje > $tabla[10][4]) {
            $percentil = 75;
        }

        if ($puntaje <= $tabla[10][1] && $puntaje > $tabla[10][3]) {
            $percentil = 90;
        }

        if ($puntaje >= $tabla[10][1]) {
            $percentil = 99;
        }
    } else {
        $aux = 0;

        for ($i = 0; $i < 11; ++$i) {
            if ($edad == $tabla[$i][0]) {
                $aux = $i;
                break;
            }
        }

        if ($puntaje <= $tabla[$aux][7]) {
            $percentil = 1;
        }

        if ($puntaje <= $tabla[$aux][6] && $puntaje > $tabla[$aux][7]) {
            $percentil = 10;
        }

        if ($puntaje <= $tabla[$aux][5] && $puntaje > $tabla[$aux][6]) {
            $percentil = 25;
        }

        if ($puntaje <= $tabla[$aux][4] && $puntaje > $tabla[$aux][5]) {
            $percentil = 50;
        }

        if ($puntaje <= $tabla[$aux][3] && $puntaje > $tabla[$aux][4]) {
            $percentil = 75;
        }

        if ($puntaje <= $tabla[$aux][1] && $puntaje > $tabla[$aux][3]) {
            $percentil = 90;
        }

        if ($puntaje >= $tabla[$aux][1]) {
            $percentil = 99;
        }
    }

    return $percentil;
}

/*
for ($i = 59; $i > 13; --$i) {
    echo 'Aciertos: '.$i.'  Percentil '.obtenerPercentil(20, $i).'<br>';
}
*/
