<?php

//require_once '../control.php';

function interpretacionGrisTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Quiere participar y verse envuelto en asuntos, pero trata de resguardarse de conflictos y molestias de modo que la tensión se reduzca.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Sus asociaciones raras veces llegan a alcanzar la medida correspondiente a sus grandes expectativas sentimentales y a su necesidad de ser apreciado; esto le lleva a desilusionase (a menudo característico de la fijación con la madre, tomando la forma de un fuerte vínculo maternal o de resentimiento hacia ella). Tiene reservas mentales y tiende a permanecer aislado y desvinculado sentimentalmente.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Cree que recibe menos de lo que merece pero que tendrá que conformase y saca el mejor provecho posible de esta situación.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Se siente indiferente, cercado y ansioso; considera que las circunstancias le están forzando a refrenar sus deseos. Quiere evitar un conflicto abierto con los demás, y tener paz y tranquilidad.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Exigente y muy especial en las relaciones con su pareja o con sus íntimos; sin embargo, tiene cuidado en evitar cualquier conflicto abierto ya que esto podría reducir las probabilidades de llevar a cabo sus esperanzas e ideas.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Es egocéntrico y, por lo tanto, fácilmente se siente ofendido.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Quiere estar vinculado sentimentalmente con alguien y es capaz de lograr satisfacción de la actividad sexual.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Las circunstancias son tales que por el momento se siente forzado a hacer transacciones; así evita la pérdida de afecto y de participación total.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionGrisTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
