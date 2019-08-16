<?php

require_once 'test_de_colores/main.php';
require_once 'test_de_colores/paginaError.php';

$seguridad = true;

if ($seguridad) {
    if (!$_POST) {
        echo $paginaError;
        die();
    }
}

$color = $_POST;

/*
if ($_POST) {
    foreach ($_POST as $clave => $valor) {
        echo "El valor de $clave es: $valor <br>";
    }
}
*/

$colorUno = $color[0];
$colorDos = $color[1];
$colorTres = $color[2];
$colorCuatro = $color[3];
$colorCinco = $color[4];
$colorSeis = $color[5];
$colorSiete = $color[6];
$colorOcho = $color[7];

$a = obtenerInterpretacionColores($colorUno, 0);
$b = obtenerInterpretacionColores($colorDos, 1);
$c = obtenerInterpretacionColores($colorTres, 2);
$d = obtenerInterpretacionColores($colorCuatro, 3);
$e = obtenerInterpretacionColores($colorCinco, 4);
$f = obtenerInterpretacionColores($colorSeis, 5);
$g = obtenerInterpretacionColores($colorSiete, 6);
$h = obtenerInterpretacionColores($colorOcho, 7);

/*
echo '<b>Color: </b>'.$a[0].'<br>';
echo '<b>Interpretación: </b>'.$a[1].'<br>';
echo '---------------------------------------------------------------------<br>';

echo '<b>Color: </b>'.$b[0].'<br>';
echo '<b>Interpretación: </b>'.$b[1].'<br>';
echo '---------------------------------------------------------------------<br>';

echo '<b>Color: </b>'.$c[0].'<br>';
echo '<b>Interpretación: </b>'.$c[1].'<br>';
echo '---------------------------------------------------------------------<br>';

echo '<b>Color: </b>'.$d[0].'<br>';
echo '<b>Interpretación: </b>'.$d[1].'<br>';
echo '---------------------------------------------------------------------<br>';

echo '<b>Color: </b>'.$e[0].'<br>';
echo '<b>Interpretación: </b>'.$e[1].'<br>';
echo '---------------------------------------------------------------------<br>';

echo '<b>Color: </b>'.$f[0].'<br>';
echo '<b>Interpretación: </b>'.$f[1].'<br>';
echo '---------------------------------------------------------------------<br>';

echo '<b>Color: </b>'.$g[0].'<br>';
echo '<b>'.$g[1].'</b><br>';
echo $g[2].'<br>';
echo '<b>'.$g[3].'</b><br>';
echo $g[4].'<br>';
echo '<b>'.$g[5].'</b><br>';
echo $g[6].'<br>';
echo '---------------------------------------------------------------------<br>';

echo '<b>Color: </b>'.$h[0].'<br>';
echo '<b>'.$h[1].'</b><br>';
echo $h[2].'<br>';
echo '<b>'.$h[3].'</b><br>';
echo $h[4].'<br>';
echo '<b>'.$h[5].'</b><br>';
echo $h[6].'<br>';
echo '---------------------------------------------------------------------<br>';
*/
