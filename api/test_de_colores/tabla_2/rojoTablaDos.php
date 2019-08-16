<?php

//require_once '../control.php';

function interpretacionRojoTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Es activo pero juzga que hace progresos limitados y que obtiene una recompensa insuficiente por los esfuerzos que realiza.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Impulsivo e irritable. Sus deseos y acciones concomitantes son muy altos, pero se concede poca importancia a las consecuencias. Esto lleva a tensión y conflicto o al resultado de ellos.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Trabaja bien en colaboración con los demás. Necesita una vida personal de comprensión mutua y sin discordias.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Desarrolla iniciativa para superar los obstáculos y las dificultades. Ocupa, o lo desea, un puesto de autoridad en el cual pueda ejercer control sobre los acontecimientos.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Ligero y desenvuelto. Necesita sentir que los acontecimientos se desarrollan según las líneas previstas; de otro modo, la irritación puede llevarle a la inconstancia y a actividades superficiales.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Participa con facilidad en todo lo que lleva consigo emociones o estimulación. Quiere sentirse excitado.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        No quiere comunicarse con los demás ni hacer esfuerzos excesivos (con la sola posible excepción de la actividad sexual). Siente que un mayor progreso significaría para él más de lo que puede o quiere dar. Prefiere una comodidad y seguridad razonables por encima de recompensas a ambiciones mayores.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Se siente obstaculizado en sus deseos e impedido de obtener todo lo que considera fundamental. 
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionRojoTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
