<?php

//require_once '../control.php';

function interpretacionVerdeTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Persistente. Exige lo que cree que le es debido y se esfuerza para mantener su posición intacta.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Defensivo. Cree que su posición está amenazada o establecida de un modo inadecuado; está determinado a perseguir sus objetivos a pesar de la ansiedad que le produce la oposición.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Ordenado, metódico y autónomo. Necesita el respeto, el reconocimiento y la comprensión de sus íntimos.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Autoritario o en un puesto de autoridad, pero propenso a creer que un mayor progreso va a ser difícil debido a los problemas que existen. Persevera a pesar de la oposición.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Trata de mejorar su posición y prestigio; está insatisfecho con las circunstancias presentes y considera que es necesaria una mejoría para su autoestima.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Lucha para mejorar su imagen a los ojos de los demás y así conseguir que éstos acepten y estén de acuerdo con sus necesidades y deseos.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Trabaja para edificar una base firme en la que pueda construir un futuro seguro, confortable y sin problemas; en esas condiciones espera obtener respeto y reconocimiento.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Persigue sus objetivos y su propio interés con una determinación obstinada. Rechaza hacer componendas o buscar privilegios.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionVerdeTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
