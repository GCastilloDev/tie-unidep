<?php

function obtenerDiscrepancia(
                            $puntajeTotal,
                            $serieA,
                            $serieB,
                            $serieC,
                            $serieD,
                            $serieE
                            ) {
    $arreglo = array(
        array(10, 6, 2, 1, 1, 0),
        array(11, 7, 2, 1, 1, 0),
        array(12, 8, 2, 1, 1, 0),
        array(13, 8, 3, 1, 1, 0),
        array(14, 8, 3, 1, 1, 1),
        array(15, 8, 3, 2, 1, 1),
        array(16, 8, 4, 2, 1, 1),
        array(17, 9, 4, 2, 1, 1),
        array(18, 9, 4, 2, 2, 1),
        array(19, 9, 5, 2, 2, 1),
        array(20, 9, 5, 3, 2, 1),
        array(21, 9, 5, 4, 2, 1),
        array(22, 9, 5, 4, 3, 1),
        array(23, 9, 6, 4, 3, 1),
        array(24, 9, 6, 4, 4, 1),
        array(25, 9, 6, 5, 4, 1),
        array(26, 9, 6, 5, 5, 1),
        array(27, 9, 7, 5, 5, 1),
        array(28, 10, 7, 5, 5, 1),
        array(29, 10, 7, 6, 5, 1),
        array(30, 10, 7, 6, 5, 2),
        array(31, 10, 8, 6, 5, 2),
        array(32, 10, 8, 6, 6, 2),
        array(33, 10, 8, 6, 7, 2),
        array(34, 10, 8, 7, 7, 2),
        array(35, 10, 9, 7, 7, 2),
        array(36, 11, 9, 7, 7, 2),
        array(37, 11, 9, 7, 8, 2),
        array(38, 11, 10, 7, 8, 2),
        array(39, 11, 10, 8, 8, 2),
        array(40, 11, 10, 8, 8, 3),
        array(41, 11, 10, 8, 9, 3),
        array(42, 11, 10, 8, 9, 4),
        array(43, 11, 11, 8, 9, 4),
        array(44, 11, 11, 9, 9, 4),
        array(45, 12, 11, 9, 9, 4),
        array(46, 12, 11, 9, 9, 5),
        array(47, 12, 11, 9, 10, 5),
        array(48, 12, 11, 9, 10, 6),
        array(49, 12, 11, 10, 10, 6),
        array(50, 12, 11, 10, 10, 7),
        array(51, 12, 11, 10, 10, 8),
        array(52, 12, 12, 10, 10, 8),
        array(53, 12, 12, 11, 10, 8),
        array(54, 12, 12, 11, 10, 9),
        array(55, 12, 12, 11, 11, 9),
        array(56, 12, 12, 11, 11, 10),
        array(57, 12, 12, 12, 11, 10),
        array(58, 12, 12, 12, 11, 11),
        array(59, 12, 12, 12, 12, 11),
        array(60, 12, 12, 12, 12, 12),
    );

    $consulta = -99;
    $seCancela = 'no';
    $respuestas = [$puntajeTotal, $serieA, $serieB, $serieC, $serieD, $serieE];

    for ($i = 0; $i < 51; ++$i) {
        if ($puntajeTotal == $arreglo[$i][0]) {
            $consulta = $i;
            break;
        }
    }

    for ($j = 1; $j < 6; ++$j) {
        $aux = $arreglo[$consulta][$j];
        echo $aux.'<br>';
        $limiteA = $aux - 2;
        $limiteB = $aux + 2;

        if (!($respuestas[$j] >= $limiteA) && ($respuestas[$j] <= $limiteB)) {
            $seCancela = 'si';
            break;
        }
    }

    return $seCancela;
}

echo obtenerDiscrepancia(45, 10, 10, 10, 8, 6);

//echo count($respuestas);

/*
for ($i = 0; $i < 51; ++$i) {
    echo $respuestas[$i][0];
    echo '<br>';
}
*/

//echo $respuestas[1][1];
