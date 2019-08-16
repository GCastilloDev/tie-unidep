<?php

//require_once '../control.php';

function interpretacionAmarilloTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Es atraído por todo lo nuevo, moderno o misterioso. Propenso a aburrirse fácilmente con la monotonía de lo tradicional y lo corriente.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Busca una solución a los problemas o ansiedades presentes, pero encuentra difícil decidirse por el camino apropiado a seguir.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        El ambiente le impacta rápidamente y le conmueven con facilidad los sentimientos de los demás. Busca relaciones congeniales y una ocupación que se las proporcione.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Espera obtener una posición y un prestigio mayores de modo que pueda procurarse todas aquellas cosas de las que ha tenido que privarse.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Activo, desenvuelto e inquieto. Se siente frustrado por la lentitud con que los acontecimientos se desarrollan según las líneas previstas. Esto le lleva a irritación, inconstancia y falta de perseverancia en buscar un objetivo concreto.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Imaginativo y sensible; busca una salida para estas cualidades, especialmente en compañía de alguien que sea también sensible. Lo insólito y la aventura con rapidez despiertan en él interés y entusiasmo.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Inseguro. Busca enraizarse, estabilizarse, asegurase sentimentalmente y encontrar un ambiente que le provea de mayor tranquilidad y le cause menos problemas.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        La situación presente contiene elementos críticos o peligrosos para los que es una necesidad imperiosa encontrar algún tipo de solución. Esto puede llevarle a decisiones imprevistas e incluso precipitadas. Es terco; rechaza cualquier consejo de los demás.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionAmarilloTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
