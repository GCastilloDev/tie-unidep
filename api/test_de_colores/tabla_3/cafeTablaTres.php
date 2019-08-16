<?php

//require_once '../control.php';

function interpretacionCafeTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Es capaz de lograr satisfacción de la actividad sexual.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Quiere estar vinculado sentimentalmente con alguien y es capaz de lograr satisfacción de la actividad sexual, pero trata de evitar conflictos.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Es capaz de lograr satisfacción física de la actividad sexual, pero está desasosegado e inclinado a retraerse sentimentalmente, lo cual le impide llegar a asociarse con profundidad.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Tiene la impresión de que es muy poco más lo que puede hacer sobre sus problemas y dificultades presentes y que debo sacar el mejor provecho posible de las cosas tal como se le presentan. Es capaz de lograr satisfacción física de la actividad sexual.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Se siente atrapado en una situación angustiosa e incómoda, y busca el modo de conseguir un alivio. Es capaz de lograr satisfacción de la actividad sexual, en tanto no exista turbulencia o agitación emocional.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Aplica normas muy estrictas para la elección de su pareja y busca una perfección muy poco realista en su vida sexual.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Es egocéntrico y, por lo tanto, fácilmente se siente ofendido. Es capaz de lograr satisfacción física de la actividad sexual, pero tiende a ser frío sentimentalmente.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Las circunstancias lo están forzando a buscar arreglos y abstenerse por el momento de algunos placeres. Es capaz de lograr satisfacción física de la actividad sexual.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionCafeTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
