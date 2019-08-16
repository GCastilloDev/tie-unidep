<?php

function puntajeSerieI($arreglo)
{
    $puntaje = 0;

    for ($i = 1; $i <= 16; ++$i) {
        $puntaje += $arreglo[$i];
    }

    return $puntaje;
}

function puntajeSerieII($arreglo)
{
    $puntaje = 0;

    for ($i = 17; $i <= 27; ++$i) {
        $puntaje += $arreglo[$i];
    }

    return $puntaje * 2;
}

function puntajeSerieIII($arreglo)
{
    $puntaje = 0;
    $correctas = 0;
    $incorrectas = 0;

    if (!empty($arreglo)) {
        for ($i = 28; $i <= 57; ++$i) {
            if ($arreglo[$i] == 1) {
                ++$correctas;
            }
            if ($arreglo[$i] == 0) {
                ++$incorrectas;
            }
        }
    }

    $puntaje = $correctas - $incorrectas;

    if ($puntaje < 0) {
        $puntaje = $puntaje * (-1);
    }

    return $puntaje;
}

function puntajeSerieIV($arreglo)
{
    $puntaje = 0;
    $contador = 58;

    while ($contador <= 93) {
        $subtotal = $arreglo[$contador] + $arreglo[$contador + 1];

        if ($subtotal == 2) {
            ++$puntaje;
        }

        $contador += 2;
    }

    return $puntaje;
}

function puntajeSerieV($arreglo)
{
    $puntaje = 0;
    $respuestas = [20, 11, 50, .5, 12, 18, 500, 2, 28, 360, 12, 25];
    $contadorAuxiliar = 0;

    for ($i = 94; $i <= 105; ++$i) {
        if ($arreglo[$i] == $respuestas[$contadorAuxiliar]) {
            ++$puntaje;
        }
        ++$contadorAuxiliar;
    }

    return $puntaje * 2;
}

function puntajeSerieVI($arreglo)
{
    $puntaje = 0;
    $correctas = 0;
    $incorrectas = 0;

    if (!empty($arreglo)) {
        for ($i = 106; $i <= 125; ++$i) {
            if ($arreglo[$i] == 1) {
                ++$correctas;
            }
            if ($arreglo[$i] == 0) {
                ++$incorrectas;
            }
        }
    }

    $puntaje = $correctas - $incorrectas;

    if ($puntaje < 0) {
        $puntaje = $puntaje * (-1);
    }

    return $puntaje;
}

function puntajeSerieVII($arreglo)
{
    $puntaje = 0;

    for ($i = 126; $i <= 145; ++$i) {
        $puntaje += $arreglo[$i];
    }

    return $puntaje;
}

function puntajeSerieVIII($arreglo)
{
    $puntaje = 0;
    $correctas = 0;
    $incorrectas = 0;

    if (!empty($arreglo)) {
        for ($i = 146; $i <= 162; ++$i) {
            if ($arreglo[$i] == 1) {
                ++$correctas;
            }
            if ($arreglo[$i] == 0) {
                ++$incorrectas;
            }
        }
    }

    $puntaje = $correctas - $incorrectas;

    if ($puntaje < 0) {
        $puntaje = $puntaje * (-1);
    }

    return $puntaje;
}

function puntajeSerieIX($arreglo)
{
    $puntaje = 0;

    for ($i = 163; $i <= 180; ++$i) {
        $puntaje += $arreglo[$i];
    }

    return $puntaje;
}

function puntajeSerieX($arreglo)
{
    $puntaje = 0;
    $respuestas = [2, 1, 33, 38, 64, 128, 2, 2, 13, 13.25, 20, 21, .25, .125, 85.3, 94.3, 6, 8, 33, 34, 25, 125];
    $contadorAuxiliar = 0;
    $contador = 181;

    while ($contador <= 202) {
        if (($arreglo[$contador] == $respuestas[$contadorAuxiliar]) && ($arreglo[$contador + 1] == $respuestas[$contadorAuxiliar + 1])) {
            ++$puntaje;
        }
        /*
        echo $arreglo[$contador].' = '.$respuestas[$contadorAuxiliar].'<br>';
        echo $arreglo[$contador + 1].' = '.$respuestas[$contadorAuxiliar + 1].'<br>';
        */
        $contador = $contador + 2;
        $contadorAuxiliar = $contadorAuxiliar + 2;
    }

    return $puntaje * 2;
}
