<?php

//require_once '../control.php';

function interpretacionVerdeTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Quiere conseguir la determinación y la constancia de voluntad necesarias para establecer su propia personalidad e independizarse, a pesar de todas las dificultades inherentes a su situación. Quiere superar toda oposición y conseguir el reconocimiento de los demás. Quiere establecer su propia personalidad e influir sobre otros, a pesar de las circunstancias desfavorables y de una falta general de aprecio por parte de los demás.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Quiere establecer su propia personalidad e influir sobre otros a pesar de las circunstancias desfavorables y de una falta general de aprecio por parte de los demás.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Quiere impresionar favorablemente a los demás y conseguir su reconocimiento. Necesita sentirse apreciado y admirado. Se vuelve suspicaz y es herido en su amor propio con facilidad si no se advierte su presencia o si no se le proporciona la consideración apropiada.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Busca el éxito. Quiere superar los obstáculos y la oposición y tomar sus propias decisiones. Persigue sus objetivos con la tenacidad del que tiene una sola idea en la mente, y lo hace con iniciativa. No acepta sentirse dependiente de la buena voluntad de otros.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Necesita el reconocimiento de los demás. Ambicioso, quiere impresionar y ser propuesto como ideal, ser tanto popular como admirado. Se esfuerza por llenar el vacío que cree que lo separa de los demás.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Quiere causar una impresión favorable sobre los demás y ser visto por ellos como alguien con una personalidad especial. Y está, por lo tanto, constantemente observándolos para ver si logra esto y constatar cómo reaccionan ante su presencia; obrar así le hace sentir que mantiene el control de la situación. Emplea con astucia táctica para tener influencia y obtener un especial reconocimiento. Es sensible a todo lo que sea estético u original.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Tiene la impresión de que se le exige demasiado y esto lo hastía; sin embargo, todavía quiere superar sus dificultades y establecer su propia personalidad a pesar de las consecuencias que le sobrevendrán de tales propósitos. Es orgulloso, pero condescendiente en sus actitudes. Necesita reconocimiento, seguridad y desenvolverse con menos problemas.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Quiere demostrar a sí mismo y a los demás que nada puede afectarlo, que es superior a cualquier tipo de debilidad. Como consecuencia, actúa con austeridad o severidad y adopta actitudes autocráticas y tercas.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionVerdeTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
