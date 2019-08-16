<?php

//require_once '../control.php';

function interpretacionNegroTablaCuatro($posicion)
{
    $interpretacion = ['', '', '', '', '', ''];

    if ($posicion == 0) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Tensión que se origina por la intensidad de sentimiento, de esfuerzo, etc.',
            'Interpretación psicológica:',
            'Desea ser independiente, estar desligado de ataduras y libre de cualquier limitación o restricción, excepto aquellas que él mismo se imponga por su propia elección y decisión.',
            'Resumen:',
            'Deseo de tener control sobre su propio destino.',
        ];
    }

    if ($posicion == 1) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Existe una susceptibilidad acentuada a todos los estímulos externos.',
            'Interpretación psicológica:',
            'Quiere superar la falta de sentido de su existencia y la brecha que lo separa de los demás. Cree que la vida tiene mucho que ofrecer y que él puede perder su parte correspondiente de experiencias si fracasa en hacer el mejor empleo posible de todas las oportunidades. En consecuencia, persigue sus objetivos con vehemente intensidad y se entrega a ello con profundidad y rapidez. Se siente totalmente competente en cualquier campo al que se dedique; algunas veces puede ser considerado por los demás como entrometido y curioso.',
            'Resumen:',
            'Dedicación intensa.',
        ];
    }

    if ($posicion == 2) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'La insatisfacción sentimental ha dado lugar a un deseo susceptible e impaciente de independencia, conduciéndolo a una gran tensión y desasosiego.',
            'Interpretación psicológica:',
            'Alguna situación presente o alguna relación es poco satisfactoria, pero se siente incapaz de mejorarla sin colaboración benévola. No quiere exponer su lado más vulnerable y, por lo tanto, considera inoportuno mostrar afecto o ser demasiado demostrativo. Considera esa asociación como una unión depresiva porque, aunque quiere ser independiente y estar libre, no desea arriesgar la pérdida de nada. Todo esto lo lleva a reaccionar con susceptibilidad e impaciencia, mientras su apremio para escapar se convierte en un gran desasosiego. La capacidad para concentrase puede disminuir.',
            'Resumen:',
            'Desequilibrio desasosegado originado por falta de satisfacción afectiva.',
        ];
    }

    if ($posicion == 3) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Una frustración derivada de restricciones inaceptables sobre su libertad de acción está produciendo tensión.',
            'Interpretación psicológica:',
            'Busca independencia y estar libre de cualquier restricción y, por lo tanto, evita obligaciones o todo lo que pueda ser un impedimento. Está sometido a una gran presión y quiere escapa de ella de modo que pueda obtener lo que necesita, pero le falta con frecuencia la suficiente fortaleza en sus propósitos para tener éxito.',
            'Resumen:',
            'Deseo frustrado de independencia y libertad de acción.',
        ];
    }

    if ($posicion == 4) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Frustraciones causadas por una. situación que no se quería han dado lugar a tensión.',
            'Interpretación psicológica:',
            'Se considera aprisionado en una situación desagradable e impotente para solucionarla. Está enojado y disgustado, al mismo tiempo que duda Si será capaz de lograr sus objetivos; se siente frustrado casi hasta el punto de postración nerviosa. Quiere escapar, sentirse menos coartado y más libre para tomar sus propias decisiones.',
            'Resumen:',
            'Deseo frustrado de independencia.',
        ];
    }

    if ($posicion == 5) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Tensión que resulta de decepciones y una vigilante autoprotección contra posteriores contrariedades.',
            'Interpretación psicológica:',
            'Esperanzas irrealizadas lo han llevado a una inseguridad y a una tensa vigilancia. Insiste en la libertad de acción y se resiente de cualquier tipo de control que no sea el que él mismo se imponga. Reticente a irse sin algo o a abandonarlo; exige seguridad como protección contra posteriores contrariedades o pérdidas de posición y prestigio. Duda que las cosas mejoren en el futuro y esa actitud negativa lo lleva a exigir demasiado; rechaza comprometerse en algo razonable.',
            'Resumen:',
            'Vigilante y cauteloso.',
        ];
    }

    if ($posicion == 6) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Tensiones que resultan de restricciones o limitaciones molestas.',
            'Interpretación psicológica:',
            'Es sensible, impresionable e inclinado a dejarse llevar por entusiasmos absorbentes. Busca una situación ideal (irrealizada hasta el momento) que pueda compartir con otro en total acuerdo y mutua profundidad de comprensión. Cree que existe el riesgo de ser explotado si está excesivamente inclinado a confiar en los demás y, por lo tanto, exige pruebas de su sinceridad. Necesita saber con exactitud en qué situación se halla en las relaciones que entabla.',
            'Resumen:',
            'Exigencias de independencia compartida.',
        ];
    }

    if ($posicion == 7) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Tensiones que resultan de restricciones o limitaciones molestas.',
            'Interpretación psicológica:',
            'Resiste cualquier forma de presión que provenga de los demás e insiste en su independencia como persona. Quiere determinarse sin interferencias, sacar él mismo conclusiones y tomar sus propias decisiones. Detesta la uniformidad y la mediocridad. Al desear ser considerado como alguien que expresa sus opiniones con autoridad, encuentra difícil reconocer que se ha equivocado y, a la vez, en algunas ocasiones es refractario a aceptar o comprender los puntos de vista de otro.',
            'Resumen:',
            'Exigencias de independencia y perfeccionismo.',
        ];
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        $aux = interpretacionNegroTablaCuatro($i);
        echo 'Posición: '.$i.'<br>';
        echo '<b>'.$aux[0].'</b><br>';
        echo $aux[1].'<br>';
        echo '<b>'.$aux[2].'</b><br>';
        echo $aux[3].'<br>';
        echo '<b>'.$aux[4].'</b><br>';
        echo $aux[5].'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
