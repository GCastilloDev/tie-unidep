<?php

//require_once '../control.php';

function interpretacionVioletaTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Busca expresar su necesidad de identificación en una atmósfera sensible e íntima donde una delicadeza estética y sentimental pueda proveer de protección y educación.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Busca una unión íntima y comprensiva en una atmósfera de intimidad compartida, para ponerse a salvo de ansiedades y conflictos.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Busca compartir una unión íntima y comprensiva en una atmósfera estética de paz y ternura.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Lucha para mejorar su imagen a los ojos de los demás y así conseguir que éstos acepten y estén de acuerdo con sus necesidades y deseos.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Participa con facilidad en todo lo que lleve consigo emociones o estimulación. Quiere sentirse excitado.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Imaginativo y sensible; busca una salida para estas cualidades, especialmente en compañía de alguien que sea también sensible. Lo insólito y la aventura con rapidez despiertan en él interés y entusiasmo.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Sensual. Se inclina por las cosas que proporcionen satisfacción a los sentidos, pero rechaza todo lo que sea de mal gusto, vulgar y ordinario.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Necesita e insiste en tener una asociación íntima y comprensiva o, al menos, algún método de satisfacer la compulsión de sentirse identificado.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionVioletaTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
