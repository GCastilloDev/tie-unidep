<?php

//require_once '../control.php';

function interpretacionCafeTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Busca librarse de problemas y lograr un estado seguro de bienestar físico en el cual pueda ponerse laxo y recuperarse.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Necesita con urgencia sosiego y reposo, librarse de conflictos y la oportunidad de recuperarse. Quiere protegerse contra influencias destructivas y agotadoras. Ansía seguridad y verse libre de problemas.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Quiere estar satisfecho, encontrar bienestar físico y librarse do conflictos. Necesita seguridad, y se apega a ello de tal modo que no tenga que sufrir ni soledad ni separación.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Se mantiene bajo severo control de modo que no le sobrevenga una crisis cuando las dificultades se presenten. Necesita estar en una situación más segura y tranquila en la que pueda sentirse a salvo y tenga la oportunidad de recuperarse.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Se mueve por un poderoso impulso hacia la sensualidad.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Juzga que las perspectivas de realizar sus esperanzas son pocas y, por lo tanto, se entrega a una vida de bienestar sensual, sin ningún problema.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Busca el fausto, la comodidad sensual y la entrega a aficiones voluptuosas.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Se plantea objetivos idealistas e ilusorios. Se ha decepcionado amargamente y se vuelve de espaldas a la vida con una tediosa desazón de si. Quiere olvidarse de todo y recuperarse en una situación cómoda y sin problemas.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionCafeTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
