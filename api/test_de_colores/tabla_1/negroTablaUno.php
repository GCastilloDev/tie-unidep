<?php

//require_once '../control.php';

function interpretacionNegroTablaUno($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Considera que las circunstancias presentes son desagradables y sobreimpositivas. Se niega a permitir que algo pueda influir sobre sus puntos de vista.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Cree que la situación es desesperada. Rechaza enérgicamente todas aquellas cosas que  encuentra  desagradables. Trata de protegerse de todo lo que pueda molestarlo o deprimirlo más.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Sufre con los efectos de todas las cosas que ha evitado por desagradables y las rechaza enérgicamente. Sólo quiere que lo dejen en paz.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Se opone desafiantemente a cualquier clase de restricción u oposición. Mantiene con obstinación sus propios puntos de vista en la creencia de que esto prueba su independencia y autodeterminación.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Sufre de una contenida sobre estimulación que amenaza con descargarse en accesos de conducta impulsiva y apasionada.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Trata de escapar de sus problemas, dificultades y tensiones por medio de decisiones precipitadas, obstinadas y desconsideradas. Busca con desesperación una escapatoria, y existe el peligro de una conducta precipitada que puede llevarlo a su propia destrucción.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Exige que las ideas y los sentimientos emerjan y se armonicen perfectamente. Rechaza conceder privilegios o hacer componendas.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Se plantea objetivos Idealistas e ilusorios. Se ha decepcionado amargamente y se vuelve de espaldas a la vida con una tediosa desazón de sí. Quiere olvidarse de todo y recuperarse en una situación cómoda y sin problemas.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionNegroTablaUno($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
