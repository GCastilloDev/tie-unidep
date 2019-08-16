<?php

//require_once '../control.php';

function interpretacionAmarilloTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Se apega a la creencia de que sus esperanzas e ideas son realistas, pero necesita ánimo y reformación. Aplica normas muy estrictas para la elección de su pareja y quiere garantías contra cualquier pérdida o decepción.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Quiere estar vinculado sentimentalmente con alguien, pero es exigente y muy especial con la elección de su pareja y en las relaciones con sus íntimos. Necesita reafirmación y tiene cuidado de evitar cualquier conflicto abierto ya que esto podría reducir las probabilidades de llevar a cabo sus esperanzas.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Es impositivo en sus exigencias sentimentales, en especial durante los momentos de intimidad, dejándolo de este modo frustrado en su deseo de una perfecta unión.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Juzga que soporta una carga de problemas que es bastante superior a lo que en justicia le corresponde. Sin embargo, permanece firme en sus objetivos y trata de superar sus dificultades comportándose de un modo flexible y acomodaticio.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Quiere ampliar su campo de actividades e insiste en que sus esperanzas e ideas son realistas. Está preocupado temiendo que se le pueda impedir hacer lo que quiere; necesita tanto condiciones apacibles Como una reafirmación tranquila donde desea posible restablecer su confianza.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Insiste en que sus esperanzas e ideas son realistas, pero necesita reafirmación y ánimo. Es egocéntrico y, por lo tanto, fácilmente se siente ofendido.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Aplica normas muy estrictas para la elección de su pareja y busca una perfección muy poco realista en su vida sexual.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Insiste en que sus objetivos son realistas y se aferra con obstinación a ellos, aun cuando las circunstancias lo están forzando a buscar componendas. Aplica normas muy estrictas en la elección de su pareja.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionAmarilloTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
