<?php

//require_once '../control.php';

function interpretacionVerdeTablaCuatro($posicion)
{
    $interpretacion = ['', '', '', '', '', ''];

    if ($posicion == 0) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'La fuerza de voluntad, la resistencia y la capacidad para mantenerse firme ante la oposición están en peligro de ser arrolladas por la excesiva tensión.',
            'Interpretación psicológica:',
            'La tenacidad y la fuerza de voluntad necesarias para luchar contra las dificultades presentes se han debilitado. Se siente sobrecargado, agotado y desorientado, pero continúa manteniéndose firme en su puesto. Se resiente de esta situación adversa que considera como una presión tangible real que es intolerable y de la que quiere escapar, pero cree que es incapaz de tomar la decisión apropiada.',
            'Resumen:',
            'Resistencia a adoptar las medidas necesarias para resolver la situación tensa.',
        ];
    }

    if ($posicion == 1) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'La capacidad de resistir presiones se ha sobrecargado. conduciéndolo a tensión y frustración, impaciencia e irritabilidad.',
            'Interpretación psicológica:',
            'Ha perdido la resistencia y la fuerza de voluntad necesarias para luchar contra las dificultades presentes. Se siente sobrecargado y desorientado, pero continúa manteniéndose firme y todavía persigue sus objetivos con gran intensidad. Esto lo somete a una presión intolerable de la cual quiere escapar, pero no puede decidirse a tomar la decisión apropiada. Como resultado, permanece profundamente envuelto en el problema y no puede encararlo objetivamente ni salirse de él: no puede abandonarlo y cree que sólo estará en paz cuando haya alcanzado sus objetivos.',
            'Resumen:',
            'Compromiso sin resolver.',
        ];
    }

    if ($posicion == 2) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Una insatisfacción sentimental y la capacidad reducida de soportar oposición o dificultades están produciendo tensión y frustración.',
            'Interpretación psicológica:',
            'Ha perdido la resistencia y la fuerza de voluntad necesarias para luchar contra las dificultades presentes que se le aparecen como una Oposición deliberada. Permanece firme. pero está sometido a una intolerable presión. Necesita colaboración y realización sentimental; cree que con esa carencia le es imposible mejorar dicha situación. Quiere "escapar de todo" pronto.',
            'Resumen:',
            'Presión que se origina de tensión y discordia.',
        ];
    }

    if ($posicion == 3) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'El intento de evitar cualquier forma de estimulación o excitación da lugar a angustia y agitación. Considera su ambiente como hostil y está bajo gran presión. Es irritable y tiene accesos de ira, con la posibilidad de que sobrevengan neurosis sexuales o molestias cardíacas.',
            'Interpretación psicológica:',
            'Se halla angustiado por la hostilidad aparente del ambiente. Se siente coartado y sometido a intolerable presión. Es rebelde y se resiente de todo lo que considera como exigencias irrazonables que se le hacen, pero se considera sin fuerzas para controlar la situación e incapaz de protegerse de ella.',
            'Resumen:',
            'Rebelión impotente.',
        ];
    }

    if ($posicion == 4) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Tensión y ansiedad que se han originado por un conflicto entre la esperanza y la necesidad, después de un gran desengaño.',
            'Interpretación psicológica:',
            'Decepciones y esperanzas irrealizadas han dado lugar a una incertidumbre ansiosa; al mismo tiempo, duda que las cosas sean mejor en el futuro y, en consecuencia, pospone las decisiones esenciales. Este conflicto entre la esperanza y la necesidad está creando una gran tirantez; en vez de resolver éste, encarándolo para tomar decisiones definitivas, es muy probable que se dedique a la búsqueda de futilidades como escapatoria.',
            'Resumen:',
            'Vacilación frustrada.',
        ];
    }

    if ($posicion == 5) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'El sentimiento de haber recibido desprecios e incomprensiones se ha convertido en una gran tensión.',
            'Interpretación psicológica:',
            'Se siente en una posición desagradable; la confianza el aprecio y la comprensión le son negados y es tratado con una falta de consideración humillante. Juzga que se lo ha valorado de un modo inferior al que necesita para su autoestima, y que no hay nada que pueda hacer sobre ello. Está desanimado por la batalla solitaria que sostiene contra todas las adversidades, sin recibir ningún aliento. Se siente desorientado y que. en lugar de la admiración que necesita, es siempre mal interpretado. Quiere escapar de esta situación, pero no puede encontrar la fuerza mental para tomar la decisión apropiada.',
            'Resumen:',
            'Humillado por falta de aprecio.',
        ];
    }

    if ($posicion == 6) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Un excesivo autodominio al tratar de ganar la consideración y estima de los demás ha dado lugar a tensión.',
            'Interpretación psicológica:',
            'Tiene una necesidad, que todavía no ha sido satisfecha, de asociarse con aquellos cuyas normas de vida sean tan elevadas como las suyas y descollar sobre el común de la gente. Esto lo somete a una gran tensión. pero permanece firme en sus actitudes a pesar de la falta de aprecio. Encuentra esta situación incómoda y le gustaría salir de ella, mas evita compro meterse con cualquier juicio. Incapaz de resolverse, porque siempre pospone el tomar las decisiones apropiadas dudando de su capacidad para sostener la oposición que resultaría de ello. Necesita el afecto de los demás, la aceptación de sus deseos y el respeto a sus opiniones hasta que pueda sentirse tranquilo y seguro.',
            'Resumen:',
            'Exigencia terca pero ineficaz de estima.',
        ];
    }

    if ($posicion == 7) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Una frustración derivada de restricciones inaceptables sobre su libertad de acción está produciendo tensión.',
            'Interpretación psicológica:',
            'Busca Independencia y estar libre de cualquier restricción y, por lo tanto, evita obligaciones o todo lo que pueda ser un impedimento. Está sometido a una gran presión y quiere escapar de ella de modo que pueda obtener lo que necesita, pero le falta con frecuencia la suficiente fortaleza en sus propósitos para tener éxito.',
            'Resumen:',
            'Deseo frustrado de independencia y libertad de acción.',
        ];
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        $aux = interpretacionVerdeTablaCuatro($i);
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
