<?php

//require_once '../control.php';

function interpretacionGrisTablaCuatro($posicion)
{
    $interpretacion = ['', '', '', '', '', ''];

    if ($posicion == 0) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Muestra impaciencia y agitación (en el lugar octavo, y especialmente cuando es clasificado Como "ansiedad").',
            'Interpretación psicológica:',
            'Cree que la vida tiene mucho más que ofrecer y que existen todavía muchas cosas importantes por realiza; es decir, que se debe sacar provecho de la vida lo más intensamente posible. Como resultado, persigue sus objetivos con vehemente intensidad y se apega a las cosas. Se compromete en profundidad y corre el riesgo de ser incapaz de ver todo con la objetividad suficiente o con la necesaria calma; tiene, por lo tanto, el peligro de ponerse inquieto y agotar su energía nerviosa. No permite que los acontecimientos sigan su rumbo; juzga que sólo podrá está en paz cuando finalmente haya alcanzado sus metas.',
            'Resumen:',
            'Dedicación impaciente.',
        ];
    }

    if ($posicion == 1) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'No acepta la idea de ponerse laxo o darse por vencido. Mantiene el agotamiento y la depresión bajo control conservándose activo.',
            'Interpretación psicológica:',
            'Alguna situación presente o alguna relación es insatisfactoria pero se siente incapaz de cambiarla para lograr la sensación de pertenencia a algo o a alguien que necesita. No quiere exponer su lado débil y, por lo tanto, continúa resistiendo ese estado de cosas sintiéndose dependiente en sus vínculos. Esto no sólo lo deprime sino que también lo vuelve irritable e impaciente, produciéndose un gran desasosiego y un apremio por escapar de esa situación, ya sea de hecho o, al menos, mentalmente. Su capacidad para concentrase puede disminuir.',
            'Resumen:',
            'Insatisfacción desasosegada.',
        ];
    }

    if ($posicion == 2) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'La fuerza de voluntad y la perseverancia están en peligro de ser arrolladas por la excesiva tensión.',
            'Interpretación psicológica:',
            'La resistencia y la tenacidad se han debilitado. Se siente sobrecargado, agotado y desorientado, pero continúa manteniéndose firme. Se resiente de esta situación adversa que considera como una presión tangible real que es intolerable y de la que quiere escapar, pero se siente incapaz de tomar la decisión adecuada.',
            'Resumen:',
            'Presión sin resolver.',
        ];
    }

    if ($posicion == 3) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'El intento de resistir toda forma de estimulación o excitación ha resultado en un estado de agitación reprimida; puede llevarlo a irritabilidad, accesos de ira e incluso neurosis sexuales. Existe la posibilidad de que se sienta afectado por molestias cardíacas.',
            'Interpretación psicológica:',
            'La situación se considera como amenazadora y peligrosa. Se violenta ante la idea de que le será imposible alcanzar sus objetivos. Lo angustia el sentimiento de su impotencia para solucionarlo. Tiene la sensación de esta solicitado en exceso y de estar acosado posiblemente hasta el punto de llegar a una postración nerviosa.',
            'Resumen:',
            'Irritabilidad Impotente.',
        ];
    }

    if ($posicion == 4) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Existen tensiones, como resultado de frustraciones, que lo han llevado a un estado de agitación.',
            'Interpretación psicológica:',
            'El resultado de esperanzas irrealizadas ha sido incertidumbre y vigilancia aprensiva. Necesita con urgencia sentirse seguro y protegido contra futuras decepciones, pretensiones o pérdidas de posición y prestigio. Está dudoso de que las cosas le vayan mejor en adelante, pero aun así tiende a exigir en demasía y evita comprometerse.',
            'Resumen:',
            'Inseguridad aprensiva.',
        ];
    }

    if ($posicion == 5) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Existen tensiones debidas a una sensibilidad suprimida.',
            'Interpretación psicológica:',
            'Se recrea en todo lo que es de buen gusto, gracioso y sensible, pero mantiene su actitud crítica y rechaza ser arrastrado por el magnetismo de alguien, a menos de que se le garantice genuinidad e integridad. Conserva, por lo tanto, un control estricto y vigilante sobre sus relaciones sentimentales puesto que debe conocer con exactitud en qué situación se halla. Exige sinceridad total como protección contra su propia tendencia a ser excesivamente confiado.',
            'Resumen:',
            'Correspondencia controlada.',
        ];
    }

    if ($posicion == 6) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Se han suprimido las exigencias orgánicas y nerviosas del cuerpo.',
            'Interpretación psicológica:',
            'La situación presente es desagradable. Tiene un deseo insatisfecho de asociarse con aquellos cuyas normas de vida sean tan elevadas como las suyas y descollar sobre el común de la gente. Su control sobre los instintos sensuales limita su capacidad para darse, pero el aislamiento resultante lo apremia a entregarse y buscar la unión con alguien. Esto lo perturba puesto que considera tales instintos como una debilidad que se debe superar. Cree que sólo con un autocontrol permanente puede esperar mantener su actitud de superioridad individual. Quiere ser amado o admirado por sí mismo; necesita atención, reconocimiento y estima de los demás.',
            'Resumen:',
            'Exige estima como si se tratara de un individuo excepcional.',
        ];
    }

    if ($posicion == 7) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Existe una susceptibilidad acentuada a todos los estímulos externos.',
            'Interpretación psicológica:',
            'Quiere superar la falta de sentido de su vida y llenar el vacío que cree que lo separa de los demás. Está ansioso de experimentar la vida en todos sus aspectos, explorar todas sus posibilidades y vivir intensamente. Se resiente, por lo tanto, de cualquier restricción o limite que se le imponga e insiste en ser libre y estar desligado de ataduras.',
            'Resumen:',
            'Autodeterminación expectante.',
        ];
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        $aux = interpretacionGrisTablaCuatro($i);
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
