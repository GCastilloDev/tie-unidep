<?php

//require_once '../control.php';

function interpretacionGrisTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Renuente a participar; quiere evitar todo tipo de estímulos Ha tenido que soportar demasiadas cosas de índole agotadora y exhaustiva y ahora desea protección y desligarse de todo.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Se siente exhausto debido a conflictos y discusiones; desea estar a cubierto de ellos. Necesita condiciones apacibles y un ambiente tranquilo en el que pueda ponerse laxo y recuperarse.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Cree que las circunstancias presentes son hostiles y está exhausto por conflictos y discusiones, Desea estar a cubierto y oculta sus intenciones para de este modo evitar- exponerse a que sean impugnadas; así estará a salvo y le resultará más fácil conseguir lo que quiere. Evita cuidadosamente despertar cualquier oposición que lo pueda perjudicar en sus planes.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Tiene exigencias muy grandes sobre la vida, las cuales están ocultas detrás de una racionalización plausible y una conducta cautelosa. Quiere impresionar a los demás con sus logros, pero disimula este deseo y lo encubre cuanto le es posible.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Se liberan deseos que se originan por situaciones insatisfactorias y cargas presentes, las cuales son tanto depresivas como intolerables. Busca una salida, pero cree que es imposible encontrarla. Trata de ponerse a salvo de todo esto sin comprometerse en discusiones y conflictos.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Está fascinado por la idea de una relación platónica llena de ternura y mutua atracción. Se avergüenza ante el pensamiento de que esto aparezca al exterior, y así emplea con cautela tácticas exploratorias en la prosecución de sus objetivos, asegurándose de que no se ha entregado del todo ni tampoco se ha quedado afuera.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Desea protegerse de todo lo que pueda agotarlo o cansarlo. Busca una vida segura y llena de bienestar físico, libre de cualquier problema y perturbación.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Cree que ha sido tratado de un modo injusto e inmerecido y traicionado en sus esperanzas. Está descontento y en rebelión contra su situación presente que considera una afrenta.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionGrisTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
