<?php

function obtenerRangoSerieI($puntaje)
{
    $rango = '';

    if ($puntaje >= 16) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje == 15) {
        $rango = 'Superior';
    }

    if ($puntaje == 14) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 12 && $puntaje <= 13) {
        $rango = 'Medio';
    }

    if ($puntaje >= 10 && $puntaje <= 11) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje >= 8 && $puntaje <= 9) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 7) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieII($puntaje)
{
    $rango = '';

    if ($puntaje >= 22) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje >= 20 && $puntaje <= 21) {
        $rango = 'Superior';
    }

    if ($puntaje >= 18 && $puntaje <= 19) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 12 && $puntaje <= 17) {
        $rango = 'Medio';
    }

    if ($puntaje >= 10 && $puntaje <= 11) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje >= 8 && $puntaje <= 9) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 7) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieIII($puntaje)
{
    $rango = '';

    if ($puntaje >= 29) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje >= 27 && $puntaje <= 28) {
        $rango = 'Superior';
    }

    if ($puntaje >= 23 && $puntaje <= 26) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 14 && $puntaje <= 22) {
        $rango = 'Medio';
    }

    if ($puntaje >= 12 && $puntaje <= 13) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje >= 8 && $puntaje <= 11) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 7) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieIV($puntaje)
{
    $rango = '';

    if ($puntaje >= 18) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje >= 16 && $puntaje <= 17) {
        $rango = 'Superior';
    }

    if ($puntaje >= 14 && $puntaje <= 15) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 10 && $puntaje <= 13) {
        $rango = 'Medio';
    }

    if ($puntaje >= 7 && $puntaje <= 9) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje == 6) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 5) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieV($puntaje)
{
    $rango = '';

    if ($puntaje >= 23) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje >= 20 && $puntaje <= 22) {
        $rango = 'Superior';
    }

    if ($puntaje >= 16 && $puntaje <= 19) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 12 && $puntaje <= 15) {
        $rango = 'Medio';
    }

    if ($puntaje >= 8 && $puntaje <= 11) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje >= 5 && $puntaje <= 7) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 4) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieVI($puntaje)
{
    $rango = '';

    if ($puntaje >= 20) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje >= 18 && $puntaje <= 19) {
        $rango = 'Superior';
    }

    if ($puntaje >= 15 && $puntaje <= 17) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 9 && $puntaje <= 14) {
        $rango = 'Medio';
    }

    if ($puntaje >= 7 && $puntaje <= 8) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje >= 5 && $puntaje <= 6) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 4) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieVII($puntaje)
{
    $rango = '';

    if ($puntaje >= 19) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje == 18) {
        $rango = 'Superior';
    }

    if ($puntaje >= 16 && $puntaje <= 17) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 9 && $puntaje <= 15) {
        $rango = 'Medio';
    }

    if ($puntaje >= 6 && $puntaje <= 8) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje == 5) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 4) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieVIII($puntaje)
{
    $rango = '';

    if ($puntaje >= 17) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje >= 15 && $puntaje <= 16) {
        $rango = 'Superior';
    }

    if ($puntaje >= 13 && $puntaje <= 14) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 8 && $puntaje <= 12) {
        $rango = 'Medio';
    }

    if ($puntaje == 7) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje == 6) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 5) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieIX($puntaje)
{
    $rango = '';

    if ($puntaje >= 18) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje == 17) {
        $rango = 'Superior';
    }

    if ($puntaje == 16) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 10 && $puntaje <= 15) {
        $rango = 'Medio';
    }

    if ($puntaje == 9) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje >= 7 && $puntaje <= 8) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 6) {
        $rango = 'Deficiente';
    }

    return $rango;
}

function obtenerRangoSerieX($puntaje)
{
    $rango = '';

    if ($puntaje >= 20) {
        $rango = 'Sobresaliente';
    }

    if ($puntaje >= 18 && $puntaje <= 19) {
        $rango = 'Superior';
    }

    if ($puntaje >= 16 && $puntaje <= 17) {
        $rango = 'Medio Alto';
    }

    if ($puntaje >= 10 && $puntaje <= 15) {
        $rango = 'Medio';
    }

    if ($puntaje >= 8 && $puntaje <= 9) {
        $rango = 'Medio Bajo';
    }

    if ($puntaje >= 5 && $puntaje <= 7) {
        $rango = 'Inferior';
    }

    if ($puntaje <= 4) {
        $rango = 'Deficiente';
    }

    return $rango;
}
