<?php

//require_once '../control.php';

function interpretacionVioletaTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Necesita sentirse identificado con algo o alguien y desea ganar el apoyo de los demás por su trato agradable y amabilidad. Es sentimental y anhela una ternura de tipo romántico.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Ansía una comprensión sensible y empática; quiero estar a salvo de discusiones, conflictos o cualesquiera tensiones agotadoras.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Ansía una ligazón tierna y empática y una situación idealizada de armonía. Tiene necesidad imperiosa de ternura y afecto. Es sensible a todo lo que sea estético.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Quiere causar una impresión favorable sobre los demás y ser visto por ellos como alguien con una personalidad especial. Y está, por lo tanto, constantemente observándolos para ver si logra esto y constatar cómo reaccionan ante su presencia; obrar así le hace sentir que mantiene el control de la situación. Emplea con astucia tácticas para tener influencia y obtener especial reconocimiento. Es sensible a todo lo que sea estético u original.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Acepta fácil y rápidamente todo lo que le proporcione estimulación. Se preocupa por cosas que tienen una índole de intensa excitación, sea de tipo estimulante erótico u otro cualquiera. Quiere ser considerado como una personalidad emocionante e interesante, de un gran atractivo y una tremenda influencia sobre los demás. Emplea tácticas hábiles para evitar poner en peligro sus posibilidades de éxito o socavar la confianza que los otros tienen puesta en él.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Quiere que sucedan hechos interesantes y emocionantes. Tiene capacidad para hacerse querer por los demás debido a su interés manifiesto y a su trato agradable muy abierto. Es imaginativo en exceso e inclinado al fantaseo y a soñar despierto.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Desea encontrar su propia estimulación en una atmósfera de fausto sensual.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Tiene una imperiosa necesidad de una ligazón o unión con otro que lo llene de verdad sensualmente y que no esté en conflicto con sus convicciones o con su sentido de lo que es conveniente.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionVioletaTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
