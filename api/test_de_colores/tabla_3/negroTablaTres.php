<?php

//require_once '../control.php';

function interpretacionNegroTablaTres($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Cree que ciertas cosas se le interponen en su camino y Negro que las circunstancias le están forzando a buscar componendas ya abstenerse por el momento de algunos placeres.
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Las circunstancias son tales que por el momento se siente forzado a hacer componendas; así evita la pérdida de afecto y de participación total.
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Inhibe sus sentimientos. Se siente forzado a hacer componendas, lo cual le dificulta formar vínculos afectivos estables. 
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Las circunstancias le están forzando a buscar componendas, a refrenarse en sus exigencias y esperanzas ya abstenerse por el momento de algunas de las cosas que quiere. 
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Las circunstancias son restrictivas y le resultan un impedimento, forzándolo a abstenerse por el momento de algunos goces y placeres. 
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Insiste en que sus objetivos son realistas y se aferra con Negro/Amarillo obstinación a ellos, aun cuando las circunstancias lo están forzando a buscar componendas. Aplica normas muy estrictas en la elección de su pareja.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Las condiciones son tales que no se atreve a vincularse íntimamente con alguien sin mantener ciertas reservas mentales.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Las circunstancias lo están forzando a buscar componendas y a Negro/Marrón abstener se por el momento de algunos placeres. Es capaz de lograr satisfacción física de la actividad sexual.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionNegroTablaTres($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
