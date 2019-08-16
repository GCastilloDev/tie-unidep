<?php

//require_once '../control.php';

function interpretacionVerdeTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        La situación le impide establecerse según su conveniencia, pero cree que debe sacar el mejor provecho posible de todas las cosas tal como se le presentan.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Es muy cuidadoso de evitar conflictos abiertos debido a su inadmisible falta de confianza; cree que debe sacar el mejor provecho posible de todas las cosas tal como se le presentan.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Cree que no está recibiendo lo que se le debe y que no es adecuadamente comprendido ni apreciado en su justo valor. Juzga que está obligado a conformarse; las asociaciones íntimas lo dejan sin ninguna sensación de relación afectiva.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Se siente desgraciado por la resistencia que encuentra siempre que trata de hacer valer sus derechos. Está indignando y resentido por culpa de estas contrariedades, pero cede con apatía y hace las adaptaciones necesarias para sentirse en paz y tranquilidad.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Juzga que soporta una carga de problemas que es bastante superior a lo que en justicia le corresponde. Sin embargo, permanece firme en sus objetivos y trata de superar sus dificultades comportándose de un modo flexible y acomodaticio.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Cree que recibe menos de lo que merece y que no hay nadie en quien pueda apoyarse para conseguir un trato empático y comprensivo. Se siente ofendido con facilidad por sentimientos contenidos pero se da cuenta de que debe sacar el mejor provecho posible de las cosas tal como se le presentan.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Tiene la impresión de que es muy poco más lo que puede hacer sobre sus problemas y dificultades presentes y que debe sacar el mejor provecho posible de las cosas tal como se le presentan. Es capaz de lograr satisfacción física de la actividad sexual.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Las circunstancias le están forzando a buscar componendas, a refrenarse en sus exigencias y esperanzas y abstenerse por el momento de algunas de las cosas que quiere.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionVerdeTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
