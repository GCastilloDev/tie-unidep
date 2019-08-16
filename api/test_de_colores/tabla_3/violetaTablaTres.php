<?php

//require_once '../control.php';

function interpretacionVioletaTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Es egocéntrico y, por lo tanto, fácilmente se siente ofendido. Es sensible y sentimental, pero lo oculta a todos excepto a aquellos que le son muy íntimos.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Quiere estar vinculado sentimentalmente con alguien puesto que se siente aislado y solo. Es egocéntrico y, por lo tanto fácilmente se siente ofendido, aunque trata de evitar conflictos abiertos.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Se siente aislado y solo pero es demasiado reservado para llegar a formar vínculos profundos. Es egocéntrico y, por lo tanto, se siente fácilmente ofendido.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Cree que recibe menos de lo que merece y que no hay nadie en quien pueda apoyarse para conseguir un trato empático y comprensivo. Se siente ofendido con facilidad por sentimientos contenidos y por su egocentrismo pero se da cuenta de que debe sacar el mejor provecho posible de las cosas tal como se le presentan.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Se angustia cuando sus necesidades o sus deseos son mal entendidos; cree que no tiene a nadie en quien confiar ni apoyarse. Es egocéntrico y. por lo tanto, fácilmente se siente ofendido.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Insiste en que sus esperanzas e ideas son realistas, pero necesita reafirmación y ánimo. Es egocéntrico y, por lo tanto, fácilmente se siente ofendido.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Es egocéntrico y, por lo tanto, fácilmente se siente ofendido. Es capaz de lograr satisfacción física en la actividad sexual, pero tiende a ser frío sentimentalmente.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Las condiciones son tales que no se atreve a vincularse íntimamente con alguien sin mantener ciertas reservas mentales.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionVioletaTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
