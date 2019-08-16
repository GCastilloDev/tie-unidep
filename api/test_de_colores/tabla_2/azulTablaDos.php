<?php

//require_once '../control.php';

function interpretacionAzulTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Actúa con calma y con un mínimo de trastornos, de modo que pueda manipular sus amistades presentes. Le gusta sentirse relajado y llevase bien con sus compañeros y todos sus íntimos.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Sensible y comprensivo, pero bajo cierta tirantez; necesita abrirse a alguien que le sea íntimo.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Actúa de un modo ordenado, metódico y autónomo. Necesita la comprensión empática de alguien que reconozca lo que vale y le dé su aprobación.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Trabaja bien en colaboración con los de más, pero no se aviene a representar roles de liderazgo. Necesita una vida personal de comprensión y sin discordias.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Complaciente y adaptable. Se siente en paz sólo cuando está vinculado íntimamente a una persona, grupo u organización en el cual pueda depositar su confianza.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Sensible; necesita entornos estéticos o una pareja tan sensible y comprensiva como él con quien pueda compartir una intimidad cálida.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Evita esfuerzos excesivos: necesita enraizarse en la seguridad y apacibilidad de la amistad.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Necesita amigos afectuosos, pero es intolerante con aquellos íntimos que no le muestran la suficiente consideración. Si esto no lo consigue pronto, es capaz de encerrarse dentro de sí y apartarse de ellos.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionAzulTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
