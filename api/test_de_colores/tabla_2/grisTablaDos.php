<?php

//require_once '../control.php';

function interpretacionGrisTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Representa una barrera entre los colores compensatorios que le preceden y los restantes; el punto en el cual la "desconexión" se ha realizado. El grupo + es de este modo el único mecanismo mediante el cual se hace posible una experiencia de participación. Acentúa las características del grupo + y las convierte en más compulsivas.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Es relativamente inactivo y de condición estática, pero ciertos conflictos le impiden obtener tranquilidad de espíritu; incapaz de lograr amistades en un nivel aceptable de mutuo afecto y comprensión.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        La situación es difícil y el sujeto esta tratando de lograr sus objetivos contra toda resistencia. Encuentra necesario ocultar sus intenciones como una precaución complementaria para desarticular la oposición.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Tiene dificultades para progresar. A pesar del intento de ocultar su Impulsividad, sus acciones le acarrean problemas e incertidumbres, volviéndolo tenso e irritable.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        La falta de realización de sus esperanzas y la incapacidad de adoptar las medidas necesarias para su recuperación han contribuido al aumento de tensión. 
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        El temor al desaire y la extrema cautela en sus aproximaciones le hacen difícil alcanzar el grado de intimidad e identificación que desea.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Es incapaz de esforzase lo suficiente para lograr sus objetivos. Se siente olvidado y desea mayor seguridad, cordialidad y menos problemas. 
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Está bajo una gran tensión debido a las exigencias de la situación presente. Trata de desembarazase de las cosas que le restringen o limitan.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionGrisTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
