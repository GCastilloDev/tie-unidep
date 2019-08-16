<?php

//require_once '../control.php';

function interpretacionAzulTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Desea un estado armonioso de vida tranquila y apacible que ofrezca una serena satisfacción y una sensación de pertenencia a algo o a alguien.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Necesita estar libre de tensiones. Anhela paz, tranquilidad y estar satisfecho.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Necesita un ambiente apacible. Quiere estar libre de tensiones, conflictos y desacuerdos. Toma trabajos sin fin para dominar la situación y los problemas inherentes a ella, procediendo de un modo cauteloso. Tiene finura de sentimiento y un tacto delicado para los detalles.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Busca relaciones afectivas satisfactorias y armoniosas. Desea una unión íntima en la que haya amor, sacrificio de sí mismo y confianza mutua.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Busca una relación afectiva, que le ofrezca la posibilidad de realizarse y le dé felicidad. Es capaz de un entusiasmo sentimental muy poderoso. Colabora y está deseoso de adaptar su personalidad, si es necesario, para lograr la unión afectiva que anhela. Necesita el mismo trato y comprensión de parte de los demás.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Ansia ternura y compartir una unión delicada de sentimiento. Es sensible a todo lo que sea estético y de buen gusto.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Desea alcanzar un lugar apacible que esté libre de problemas y que ofrezca seguridad y bienestar físico. Necesita un trato delicado y un cuidado amoroso. Teme al vacío y a la soledad de la separación.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Necesita con urgencia reposo, descanso, paz y ser comprendido afectivamente. Siente que ha sido tratado desconsideradamente y, como consecuencia, está contrariado y desasosegado. Juzga su situación inaguantable mientras sus exigencias no sean cumplidas.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionAzulTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
