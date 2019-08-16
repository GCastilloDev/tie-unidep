<?php

function imprimirTest($numero)
{

    if ($numero == 1){
        $numero3 = $numero * 2;
        $numero2 = $numero3 - 1;
    }else{
        $numero3 = $numero * 2;
        $numero2 = $numero3 - 1;
    }

    echo
    "
    <div class='row'>
        <li>
        <div class='col s12 m7'>
            <img src='../img/domino/$numero.png' class='responsive-img materialboxed' alt=''>
        </div>
        <div class='col s12 m5 center'>
            <p class='center'>Ingresa los número que completan la serie.</p>
            <div class='domino'>
            <div class='input-field col s12' style='margin-top: 40%'>
                <input type='number' min='0' max='6' class='validate center' name='$numero2' required>
            </div>
                <span class='line'></span>
            <div class='input-field col s12' style='margin-top: 50%'>
                <input type='number' min='0' max='6' class='validate center' name='$numero3' required>
            </div>
            </div>

        </div>
        </li>
    </div>
    ";
}
