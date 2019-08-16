<?php

//require_once '../control.php';

function interpretacionAmarilloTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Necesita un cambio de situación o de amistades que le alivie de la tensión. Busca una solución que le abra nuevas y mejores posibilidades y que le permita realizar sus esperanzas.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Necesita una escapatoria de todo lo que lo Oprime; se aferra a esperanzas vagas e ilusorias.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Confía que los lazos afectivos y de buena camaradería le reportarán alivio y satisfacción. Su propia necesidad de ser aceptado lo hace estar pronto para ayudar a otros; a cambio, quiere cordialidad y comprensión. Es receptivo a nuevas ideas y posibilidades que confía le serán provechosas e interesantes.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Es un observador alerta y agudo. Busca nuevas vías que le ofrezcan más libertad y la oportunidad de sacar el máximo provecho de ellas. Quiere demostrarse a sí mismo que es una persona capaz ya que puede conseguir el reconocimiento de los demás. Se esfuerza por llenar el vacío que cree que lo separa de ellos.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        La necesidad de sentirse más afectivo en su actividad y de tener un ámbito más amplio de influencia lo convierte en una persona desasosegada; se deja llevar por sus deseos y esperanzas. Trata de extender en demasía su campo de acción.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Es imaginativo en exceso e Inclinado al fantaseo y a soñar despierto. Ansía que sucedan cosas interesantes y emocionantes; quiere ser admirado por su trato agradable.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Está desesperado y necesita un cierto alivio. Quiere bienestar físico, una seguridad sin problemas y la oportunidad de recuperarse.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Trata de escapar de sus problemas, dificultades y tensiones por medio de decisiones precipitadas, obstinadas y desconsideradas o por medio de cambios de dirección.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionAmarilloTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
