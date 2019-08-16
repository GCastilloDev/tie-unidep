<?php

function obtenerDiagnostico($percentil)
{
    $diagnostico = ['', ''];

    if ($percentil >= 95) {
        $diagnostico = ['I', 'SUPERIOR'];
    }

    if ($percentil >= 90 && $percentil < 95) {
        $diagnostico = ['II+', 'SUPERIOR AL TÉRMINO MEDIO'];
    }

    if ($percentil >= 75 && $percentil < 90) {
        $diagnostico = ['II', 'SUPERIOR AL TÉRMINO MEDIO'];
    }

    if ($percentil >= 50 && $percentil < 75) {
        $diagnostico = ['III+', 'TÉRMINO MEDIO'];
    }

    if ($percentil == 50) {
        $diagnostico = ['III', 'TÉRMINO MEDIO'];
    }

    if ($percentil < 50 && $percentil > 25) {
        $diagnostico = ['III-', 'TÉRMINO MEDIO'];
    }

    if ($percentil <= 25 && $percentil > 10) {
        $diagnostico = ['IV+', 'INFERIOR AL TÉRMINO MEDIO'];
    }

    if ($percentil <= 10 && $percentil > 5) {
        $diagnostico = ['IV', 'INFERIOR AL TÉRMINO MEDIO'];
    }

    if ($percentil <= 5) {
        $diagnostico = ['V', 'DEFICIENTE'];
    }

    return $diagnostico;
}

/*

for ($i = 100; $i > 1; --$i) {
    $diagnostico = obtenerDiagnostico($i);

    echo 'Percentil: '.$i.'<br>';
    echo 'Rango: '.$diagnostico[0].'<br>';
    echo 'Diagnóstico: '.$diagnostico[1].'<br>';
    echo '--------------------------------------------<br>';
}

*/
