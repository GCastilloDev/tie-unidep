<?php

//require_once '../control.php';

function interpretacionRojoTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Es una persona con una actividad Intensa, vital y animada que se deleita en la acción. Esta se dirige a conseguir éxitos y conquistas; existe en él un gran deseo de vivir la vida lo más intensamente posible.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Quiere apartar a un lado todas las cosas que le estorban en su camino para poder seguir sus impulsos y, así, estar relacionado con acontecimientos especiales y emocionantes. De esta manera, espera amortiguar la intensidad de sus conflictos; empero, su conducta impulsiva lo lleva a exponerse a riesgos.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Se orienta hacia una vida pletórica de acción y experiencias y hacia un vínculo intimo que le ofrezca la posibilidad de una realización sexual y afectiva.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Persigue sus objetivos con Intensidad, y no se permite desviarse un ápice de su meta. Quiere superar todos los obstáculos con los que se enfrenta, y alcanzar un reconocimiento y una reputación especiales provenientes de su triunfo.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Busca el éxito, el estímulo y una vida plena de experiencias. Quiere desenvolverse con libertad, arrojar de si todas las cadenas de las dudas personales, vencer y vivir intensamente. Le gusta entrar en contacto con otros y es entusiasta por naturaleza; receptivo a todo lo que sea novedoso, moderno o curioso; desarrolla interés por muchas cosas y quiere expandir sus campos de acción. Es optimista acerca del futuro.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Se preocupa por cosas que tienen una índole de intensa excitación, sea de tipo estimulante erótico u otro cualquiera. Quiere ser considerado como una personalidad emocionante e interesante, de un gran atractivo y una tremenda influencia sobre los demás. Emplea tácticas hábiles para evitar poner en peligro sus posibilidades de éxito o socavar la confianza que los otros tienen puesta en él.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Desecha sus ambiciones y renuncia a sus deseos de prestigio por cuanto prefiere tomarse las cosas con calma y condescender a sus ansias de comodidad y seguridad.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Quiere compensar por todo lo que cree que ha perdido viviendo con exagerada intensidad; de este modo, cree que puede librarse de todas las cosas que lo oprimen.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionRojoTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
