<?php

//require_once '../control.php';

function interpretacionRojoTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Trata de tranquilizarse y desembrollarse después de un período de sobreexcitación que lo ha dejado indiferente y carente de energía. Necesita paz y tranquilidad: si esto se le niega, se vuelve irritable.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Está preocupado con los obstáculos que enfrenta y sin humor para todo tipo de actividad o petición que se le solicite. Necesita paz, tranquilidad y evitar todo lo que pueda procurarle mayores problemas.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Se siente interceptado y desgraciado a causa de las dificultades que tiene en conseguir el nivel básico de colaboración y armonía que desea.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Se siente desgraciado por la resistencia que encuentra siempre que trata de hacer valer sus derechos. Empero, cree que puede hacer muy poco al respecto y que debe sacar el mejor provecho posible de la situación.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Quiere ampliar su campo de actividades e insiste en que sus esperanzas e ideas son realistas. Está preocupado temiendo que se le pueda impedir hacer lo que quiere; necesita tanto condiciones apacibles como una reafirmación tranquila donde le sea posible restablecer su confianza.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Se angustia cuando sus necesidades o sus deseos son mal entendidos; cree que no tiene a nadie en quien confiar ni apoyarse. Es egocéntrico y, por lo tanto, fácilmente se siente ofendido.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Se siente atrapado en una situación angustiosa e incómoda, y busca el modo de conseguir un alivio. Es capaz de lograr satisfacción de la actividad sexual.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Las circunstancias son restrictivas y le resultan un impedimento forzándolo a abstenerse por el momento de algunos goces y placeres.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionRojoTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
