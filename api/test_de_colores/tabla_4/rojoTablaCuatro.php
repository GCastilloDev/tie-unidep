<?php

//require_once '../control.php';

function interpretacionRojoTablaCuatro($posicion)
{
    $interpretacion = ['', '', '', '', '', ''];

    if ($posicion == 0) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'El intento de resistir cualquier estimulación nueva ha resultado en un estado de agitación reprimida y contenida que lo lleva a irritabilidad, accesos de ira e incluso neurosis sexuales. Existe la posibilidad de que se sienta afectado por trastornos cardiacos.',
            'Interpretación psicológica:',
            'La situación se considera como amenazadora y peligrosa. Se violenta ante la idea de que le es imposible alcanzar sus objetivos y se aflige con su sentimiento de impotencia para solucionarlo. Tiene la sensación de estar solicitado en exceso y de estar acosado posiblemente hasta el punto de llegar a una postración nerviosa.',
            'Resumen:',
            'Impotencia.',
        ];
    }

    if ($posicion == 1) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'El intento de resistir cualquier estimulación nueva ha resultado en un estado de agitación reprimida. Se encuentra impaciente, errático e irritable, con la posibilidad de que se sienta afectado por hipertensión u otros trastornos cardiacos.',
            'Interpretación psicológica:',
            'La situación se considera como amenazadora y peligrosa. Se resiente de que todo aquello por lo cual había luchado con tanta intensidad corre peligro de serle arrebatado y está desesperado porque se considera impotente para impedirlo; teme que va a perderlo todo sin más. Es incapaz de ver la situación objetivamente, y está tan agitado que no puede descansar en sus intentos de apartar esa amenaza a sus deseos. Tiene la sensación de estar solicitado en exceso y de estar acosado posiblemente hasta el punto de una postración nerviosa.',
            'Resumen:',
            'Agitación desesperada.',
        ];
    }

    if ($posicion == 2) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'El intento de resistir cualquier nueva estimulación, unida a la incapacidad de ponerse laxo, han resultado en un estado de agitación reprimida y lo han empujado a ir más allá de sus posibilidades. Se encuentra impaciente, irritable y febril con la posibilidad de que se sienta afectado por trastornos cardiacos.',
            'Interpretación psicológica:',
            'Está angustiado por el estado poco satisfactorio de cierta asociación íntima. Se siente incapaz de hacer algo para restablecer la cordialidad y la confianza mutua y considera que está ligado a una situación desdichada de la que no puede escapar.',
            'Resumen:',
            'Angustia originada por desarmonía.',
        ];
    }

    if ($posicion == 3) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Una impotencia agitada y la incapacidad de controlar los acontecimientos lo están sometiendo a gran tensión. Existe la posibilidad de que se sienta afectado por trastornos cardiacos y/o espasmos musculares.',
            'Interpretación psicológica:',
            'Está gravemente angustiado por todo lo que se le presenta como un ambiente hostil. Se siente sometido a una gran presión y manejado contra su voluntad. Es rebelde y se resiente de todo lo que considera como exigencias irrazonables que se le hacen. pero se considera sin fuerzas para controlar la situación e incapaz de protegerse de ésta de algún modo.',
            'Resumen:',
            'Resentimiento impotente.',
        ];
    }

    if ($posicion == 4) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Existen tensiones, como resultado de frustraciones. Que lo han llevado a un estado agitado y ansioso.',
            'Interpretación psicológica:',
            'Está deseoso de causar una buena impresión pero preocupado e inseguro sobre sus probabilidades de éxito. Juzga que tiene derecho a todo lo que pueda aspirar y se vuelve desvalido y angustiado cuando las circunstancias se ponen en su contra. Encuentra una nueva posibilidad de fracaso muy perturbadora y esto lo puede llevar a una postración nerviosa. Se considera a sí mismo como una "víctima", que ha sido mal dirigido y se ha abusado de él; confunde esta representación con la realidad misma y trata de convencerse de que su fracaso en conseguir posición, y reconocimiento es por culpa de los demás.',
            'Resumen:',
            'Autodefensa poco realista.',
        ];
    }

    if ($posicion == 5) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Se originan tensiones a causa de la frustración por los intentos fallidos de alcanzar seguridad y comprensión.',
            'Interpretación psicológica:',
            'Responde a los estímulos externos y quiere experimentarlo todo con intensidad, pero encuentra la situación presente frustrante en extremo. Necesita comprensión empática y sensación de seguridad. Está angustiado por su aparente impotencia en alcanzar sus objetivos.',
            'Resumen:',
            'Empatía frustrada.',
        ];
    }

    if ($posicion == 6) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Se origina tensión a causa de postración nerviosa o de situaciones tensas sexuales debidas a un excesivo autocontrol.',
            'Interpretación psicológica:',
            'Se siente poco apreciado y halla su situación presente desagradable. Necesita reconocimiento personal y afecto para compensar la ausencia de otros con un modo de pensar igual al suyo y con quien asociarse para sentirse más seguro. Su autocontrol sensual le Impide poder darse con facilidad, pero el aislamiento resultante lo apremia a entregase y unirse con alguien. Esto lo perturba puesto que considera tales instintos como una debilidad que se debe superar; cree que sólo no dejándose arrastrar por ellos puede sostener las dificultades de la situación. Quiere ser considerado como un compañero deseable y ser admirado por sus cualidades personales.',
            'Resumen:',
            'Inseguridad que se origina en la falta de amistades.',
        ];
    }

    if ($posicion == 7) {
        $interpretacion =
        [
            'Interpretación fisiológica:',
            'Frustraciones causadas por una situación que no se quería han dado lugar a tensión.',
            'Interpretación psicológica:',
            'Se considera aprisionando en una situación desagradable e impotente para solucionarla. Está enojado y disgustado, al mismo tiempo que duda si será capaz de lograr sus objetivos; se siente frustrado casi hasta el punto de postración nerviosa. Quiere escapar, sentirse menos coartado y más libre para tomar sus propias decisiones.',
            'Resumen:',
            'Deseo frustrado de Independencia.',
        ];
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        $aux = interpretacionRojoTablaCuatro($i);
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
