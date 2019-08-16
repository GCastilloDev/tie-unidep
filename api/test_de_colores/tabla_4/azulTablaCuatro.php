<?php

//require_once '../control.php';

function interpretacionAzulTablaCuatro($posicion)
{
    $interpretacion = ['', '', '', '', '', ''];

    if ($posicion == 0) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Rechaza ponerse laxo o darse por vencido. Mantiene el agotamiento y la depresión bajo control conservándose activo.',
            'Interpretación psicológica:',
            'Alguna situación presente o alguna relación es insatisfactoria pero se siente incapaz de cambiarla para conseguir el sentido de pertenencia a algo o a alguien que necesita. No quiere exponer su lado más vulnerable y, por lo tanto, continúa resintiendo ese estado de cosas sintiéndose dependiente de esos vínculos. Esto no sólo lo deprime, sino que lo vuelve también Irritable e impaciente, produciéndole un gran desasosiego y un apremio de escapar de esta situación ya sea de hecho o, al menos, con su imaginación. Su capacidad para concentrarse puede disminuir.',
            'Resumen:',
            'Insatisfacción desasosegada.',
        ];
    }

    if ($posicion == 1) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Muestra impaciencia y desasosiego y tiende a estar deprimido.',
            'Interpretación psicológica:',
            'Cree que no puede controlar la situación para formar el sentido de pertenencia a algo o a alguien que necesita y, así, continúa sin confiar en nadie completamente. Se resiste a aceptar una condición o una relación que considera como una responsabilidad desalentadora. Siente que la vida tiene mucho más que ofrecer y probablemente se vuelva impaciente e irritable hasta que consiga todo lo que cree que le falta. El apremio por salir de ese estado insatisfactorio lo lleva a desasosiego y desequilibrio. Su concentración puede disminuir.',
            'Resumen:',
            'Falta de realización inquieta e impaciente.',
        ];
    }

    if ($posicion == 2) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'La fuerza de voluntad y la perseverancia están en peligro de ser arrolladas por la excesiva tensión.',
            'Interpretación psicológica:',
            'La resistencia y la tenacidad están sobrecargadas por el intento permanente de superar las dificultades existentes. Se aferra a sus objetivos pero se siente a la vez sometido a presiones intolerables. Considera que es imposible modificar la situación y convertirla en una de cooperación y confianza mutua; entonces, desea liberarse de ella completamente.',
            'Resumen:',
            'Presión que se origina de tensión y discordia.',
        ];
    }

    if ($posicion == 3) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Existe una agitación reprimida que resulta de relaciones personales poco satisfactorias o en discordia; esto puede llevarlo a irritabilidad, accesos de ira o incluso neurosis sexuales. Existe la posibilidad de que se sienta afectado por molestias cardiacas.',
            'Interpretación psicológica:',
            'Cierta asociación poco satisfactoria da lugar a una gran angustia. Se siente impotente de restablecer la cordialidad y cualquier tipo de confianza mutua, de modo que esta situación es considerada como depresiva y como un estado de infelicidad que se debe seguir tolerando. Acosado hasta el punto de llegar a una postración nerviosa.',
            'Resumen:',
            'Desarmonía impotente e irritable.',
        ];
    }

    if ($posicion == 4) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Decepciones sentimentales han dado lugar a tensión y ansiedad.',
            'Interpretación psicológica:',
            'Una asociación sentimental ya no se está desarrollando con suavidad, ha sido profundamente decepcionante y es considerada ahora como un vínculo depresivo. Aunque por una parte querría librarse del todo de esa unión, por otra, sin embargo, no quiere perder nada ni arriesgar su seguridad y ponerse en peligro o ante la posibilidad de una nueva decepción. Estos sentimientos contradictorios lo perjudican de tal modo que trata de suprimirlos con una actitud fría y severa.',
            'Resumen:',
            'Tensión originada por una decepción sentimental.',
        ];
    }

    if ($posicion == 5) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Tensión que se origina por falta de comprensión mutua.',
            'Interpretación psicológica:',
            'Una situación presente es poco satisfactoria; se siente incapaz de mejorarla sin una colaboración benévola. La necesidad de comprensión y de concesiones afectivas mutuas permanece sin satisfacer; tiene ahora la impresión de estar atado, produciéndole impaciencia, irritabilidad y deseo de escapar.',
            'Resumen:',
            'Impaciencia originada por una permanente falta de comprensión.',
        ];
    }

    if ($posicion == 6) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'La insatisfacción sentimental y la falta de aprecio lo han llevado a una gran tensión y a un autocontrol excesivo.',
            'Interpretación psicológica:',
            'Juzga que debe recibir colaboración antes de que pueda mejorarse la situación presente. La falta de comprensión y aprecio lo hacen sentir que no existe ninguna ligazón afectiva real, y la insatisfacción da lugar a una susceptible sensibilidad; quiere sentirse más seguro y más tranquilo. Le gustaría romper unas ataduras que ahora considera depresivas y restablecer su propia individualidad. Su autocontrol de los sentidos le impide darse con facilidad, pero el aislamiento resultante lo apremia a entregarse y buscar la unión con alguien. Esto lo perturba puesto que considera tales instintos como una debilidad que se debe superar: cree que sólo puede afirmar su propia individualidad con un permanente autocontrol y que sólo así puede mantenerse firme por encima de sus dificultades presentes.',
            'Resumen:',
            'Insatisfacción sentimental originada por falta de aprecio y autocontrol desproporcionado.',
        ];
    }

    if ($posicion == 7) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'La insatisfacción sentimental ha dado lugar a un deseo susceptible e impaciente de independencia, conduciéndolo a una gran tensión y desasosiego.',
            'Interpretación psicológica:',
            'Alguna situación presente o alguna relación es poco satisfactoria, pero se siente incapaz de mejorarla sin una colaboración benévola. No quiere exponer su lado más vulnerable y, por lo tanto, considera inoportuno mostrar afecto o ser demasiado demostrativo. Considera esa asociación como una unión depresiva porque, aunque quiere ser independiente y estar libre, no desea arriesgar la pérdida de nada. Todo esto lo lleva a reaccionar con susceptibilidad e Impaciencia, mientras su apremio para escapar de todo se convierte en un desasosiego. La capacidad para concentrarse puede disminuir.',
            'Resumen:',
            'Desequilibrio desasosegado originado por falta de satisfacción afectiva.',
        ];
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        $aux = interpretacionAzulTablaCuatro($i);
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
