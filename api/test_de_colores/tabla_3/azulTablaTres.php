<?php

//require_once '../control.php';

function interpretacionAzulTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Permanece desvinculado sentimentalmente, aun cuando se encuentre relacionado con una asociación íntima.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Tiene grandes exigencias sentimentales y quiere relacionarse en una asociación íntima, pero sin gran profundidad de sentimiento.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Cree que no está recibiendo lo que se le debe y que no es adecuadamente comprendido ni apreciado en su justo valor. Juzga que está obligado a conformase; las asociaciones íntimas lo dejan sin ninguna sensación de relación afectiva.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Se siente interceptado y desgraciado a causa de las dificultades que tiene en conseguir el nivel básico de colaboración y armonía que desea.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Es impositivo en sus exigencias sentimentales y muy especial en su elección de pareja. Su deseo de independencia afectiva le impide todo tipo de asociación profunda.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Es egocéntrico y, por lo tanto, fácilmente se siente ofendido, dejándole este estado muy alejado de vínculos.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Es capaz de lograr satisfacción física de la actividad sexual, pero está inclinado a retraerse sentimentalmente, lo cual le impide llegar a asociarse con profundidad.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Inhibe sus sentimientos. Se siente forzado a hacer componendas, lo cual le dificulta formar vínculos afectivos estables.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionAzulTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
