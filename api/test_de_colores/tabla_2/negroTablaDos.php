<?php

//require_once '../control.php';

function interpretacionNegroTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Conflictos e insatisfacciones de todo tipo refuerzan la necesidad de las compensaciones indicadas por el grupo +.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Insatisfecho. La necesidad de escapar del compromiso prolongado con su ambiente actual le obliga a encontrar alguna solución.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Necesita paz y tranquilidad. Desea la intimidad y fidelidad de una pareja a quien pueda pedir una especial consideración y un afecto incuestionable. Si no consigue lo que solicita, es capaz de encerrarse dentro de sí y aislarse completamente. 
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        No sólo considera que sus exigencias son mínimas, sino también que son imperativas. Se afana a ellas con tenacidad y no cede un ápice. 
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Se siente obstaculizado en sus deseos e impedido de obtener todo lo que considera fundamental.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        La situación presente contiene elementos críticos o peligrosos para los que es una necesidad imperiosa encontrar algún tipo de solución. Esto puede llevarle a decisiones imprevistas e incluso precipitados. Es terco; rechaza cualquier consejo de los demás.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Necesita e Insiste en tener una asociación íntima y comprensiva o, al menos, algún método de satisfacer la compulsión de sentirse identificado.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Una enfermedad física, una sobretensión o una aflicción sentimental le han golpeado duramente. Su autoestima ha disminuido y ahora necesita condiciones apacibles y un trato considerado que le permitan recuperarse. 
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionNegroTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
