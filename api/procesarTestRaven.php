<?php

require_once 'test_raven/obtenerDiscrepancia.php';
require_once 'test_raven/obtenerPercentil.php';
require_once 'test_raven/obtenerDiagnostico.php';
require_once 'test_raven/paginaError.php';

$seguridad = true;

if ($seguridad) {
    if (!$_POST) {
        echo $paginaError;
        die();
    }
}

$prueba = $_POST;
$contador = count($prueba);

$serieA = 99;
$serieB = 99;
$serieC = 99;
$serieD = 99;
$serieE = 99;

function obtenerSerieA($arreglo)
{
    $serieA = 0;
    $respuestasA = [0, 4, 5, 1, 2, 6, 3, 6, 2, 1, 3, 5, 4];

    for ($i = 1; $i <= 12; ++$i) {
        if ($arreglo[$i] == $respuestasA[$i]) {
            ++$serieA;
        }
    }

    return $serieA;
}

function obtenerSerieB($arreglo)
{
    $serieB = 0;
    $respuestasB = [2, 6, 1, 2, 1, 3, 5, 6, 4, 3, 4, 5];
    $contador = 0;

    for ($i = 13; $i <= 24; ++$i) {
        if ($arreglo[$i] == $respuestasB[$contador]) {
            ++$serieB;
        }
        ++$contador;
    }

    return $serieB;
}

function obtenerSerieC($arreglo)
{
    $serieC = 0;
    $respuestasC = [8, 2, 3, 8, 7, 4, 5, 1, 7, 6, 1, 2];
    $contador = 0;

    for ($i = 25; $i <= 36; ++$i) {
        if ($arreglo[$i] == $respuestasC[$contador]) {
            ++$serieC;
        }
        ++$contador;
    }

    return $serieC;
}

function obtenerSerieD($arreglo)
{
    $serieD = 0;
    $respuestasD = [3, 4, 3, 7, 8, 6, 5, 4, 1, 2, 5, 6];
    $contador = 0;

    for ($i = 37; $i <= 48; ++$i) {
        if ($arreglo[$i] == $respuestasD[$contador]) {
            ++$serieD;
        }
        ++$contador;
    }

    return $serieD;
}

function obtenerSerieE($arreglo)
{
    $serieE = 0;
    $respuestasE = [7, 6, 8, 2, 1, 5, 2, 4, 1, 6, 3, 5];
    $contador = 0;

    for ($i = 49; $i <= 60; ++$i) {
        if ($arreglo[$i] == $respuestasE[$contador]) {
            ++$serieE;
        }
        ++$contador;
    }

    return $serieE;
}

$edad = $prueba[0];
$serieA = obtenerSerieA($prueba);
$serieB = obtenerSerieB($prueba);
$serieC = obtenerSerieC($prueba);
$serieD = obtenerSerieD($prueba);
$serieE = obtenerSerieE($prueba);
$total = $serieA + $serieB + $serieC + $serieD + $serieE;

/*
if ($_POST) {
    foreach ($_POST as $clave => $valor) {
        //echo "El valor de $clave es: $valor <br>";
    }
}
*/

/*
echo 'Edad: '.$edad.'<br>';
echo 'Serie A: '.$serieA.'<br>';
echo 'Serie B: '.$serieB.'<br>';
echo 'Serie C: '.$serieC.'<br>';
echo 'Serie D: '.$serieD.'<br>';
echo 'Serie E: '.$serieE.'<br>';
echo 'Total: '.$total.'<br>';
echo 'Discrepancia: '.obtenerDiscrepancia($total, $serieA, $serieB, $serieC, $serieD, $serieE).'<br>';
echo 'Percentil: '.obtenerPercentil($edad, $total).'<br>';
*/

$aux = obtenerDiagnostico(obtenerPercentil($edad, $total));

/*
echo 'Rango: '.$aux[0].'<br>';
echo 'Diagnóstico: '.$aux[1].'<br>';
*/
