<?php

require_once 'test_terman/paginaError.php';
require_once 'test_terman/obtenerRangoSerie.php';
require_once 'test_terman/obtenerClasificacionCI.php';
require_once 'test_terman/obtenerCapacidadAprendizaje.php';
require_once 'test_terman/obtenerCI.php';
require_once 'test_terman/obtenerDiagnostico.php';
require_once 'test_terman/obtenerPuntajeSeries.php';

$seguridad = true;

if ($seguridad) {
    if (!$_POST) {
        echo $paginaError;
        die();
    }
}

/*
if ($_POST) {
    foreach ($_POST as $clave => $valor) {
        echo "El valor de $clave es: $valor <br>";
    }
}
*/

$respuestas = [];
$contador = 1;

foreach ($_POST as $clave => $valor) {
    $respuestas = $respuestas + array($contador => $valor);
    ++$contador;
}

/*
foreach ($respuestas as $clave => $valor) {
    echo "El valor de $clave es: $valor <br>";
}
*/

//var_dump($x);

/*
for ($i = 1; $i < $contador; ++$i) {
    $prefijo = 'p'.$i;

    if ($i <= 9) {
        $prefijo = 'p0'.$i;
    }

    echo 'Pregunta: '.$i.' Respuesta: '.$x[$i].'<br>';
}
*/


//var_dump($respuestas);

$serieI = puntajeSerieI($respuestas);
$serieII = puntajeSerieII($respuestas);
$serieIII = puntajeSerieIII($respuestas);
$serieIV = puntajeSerieIV($respuestas);
$serieV = puntajeSerieV($respuestas);
$serieVI = puntajeSerieVI($respuestas);
$serieVII = puntajeSerieVII($respuestas);
$serieVIII = puntajeSerieVIII($respuestas);
$serieIX = puntajeSerieIX($respuestas);
$serieX = puntajeSerieX($respuestas);
$total = $serieI + $serieII + $serieIII + $serieIV + $serieV + $serieVI + $serieVII + $serieVIII + $serieIX + $serieX;

/*
echo 'Puntaje serie I: '.puntajeSerieI($respuestas).'<br>';
echo 'Puntaje serie II: '.puntajeSerieII($respuestas).'<br>';
echo 'Puntaje serie III: '.puntajeSerieIII($respuestas).'<br>';
echo 'Puntaje serie IV: '.puntajeSerieIV($respuestas).'<br>';
echo 'Puntaje serie V: '.puntajeSerieV($respuestas).'<br>';
echo 'Puntaje serie VI: '.puntajeSerieVI($respuestas).'<br>';
echo 'Puntaje serie VII: '.puntajeSerieVII($respuestas).'<br>';
echo 'Puntaje serie VIII: '.puntajeSerieVIII($respuestas).'<br>';
echo 'Puntaje serie IX: '.puntajeSerieIX($respuestas).'<br>';
echo 'Puntaje serie X: '.puntajeSerieX($respuestas).'<br>';
echo 'Puntaje total: '.$total.'<br>';
*/
