<?php

if ($_POST) {
    foreach ($_POST as $clave => $valor) {
        echo "El valor de $clave es: $valor <br>";
    }
}
