<?php

//require_once '../control.php';

function interpretacionCafeTablaDos($posicion)
{
    $interpretacion = '';

    if ($posicion == 0) {
        $interpretacion =
        '
        Se siente desasosegado e inseguro en la situación presente. Necesita mayor seguridad y un ambiente más afectuoso o que imponga un esfuerzo físico menor. 
        ';
    }

    if ($posicion == 1) {
        $interpretacion =
        '
        Es incapaz de esforzarse lo suficiente para lograr sus objetivos. Se siente olvidado y desea mayor seguridad, cordialidad y menos problemas. 
        ';
    }

    if ($posicion == 2) {
        $interpretacion =
        '
        Evita esfuerzos excesivos; necesita enraizarse en la seguridad y apacibilidad de la amistad. Puede encontrarse mal físicamente, necesitando que se lo trate con gentileza y consideración.
        ';
    }

    if ($posicion == 3) {
        $interpretacion =
        '
        Tiene dificultad en hacer frente a las exigencias que se le presentan. Le parece que se le está pidiendo que haga un esfuerzo excesivo y desea que la situación se resuelva.
        ';
    }

    if ($posicion == 4) {
        $interpretacion =
        '
        Progresa con dificultad y no quiere esforzase más. Busca condiciones más confortables donde pueda evitar todo lo que le molesta.
        ';
    }

    if ($posicion == 5) {
        $interpretacion =
        '
        Inseguro, busca enraizarse, estabilizarse, asegurarse sentimentalmente y encontrar un ambiente que le provea de mayor tranquilidad y le cause menos problemas, pero o no quiere o es incapaz de esforzase.
        ';
    }

    if ($posicion == 6) {
        $interpretacion =
        '
        Sensual. Se inclina por las cosas que proporcionen satisfacción a los sentidos, pero rechaza todo lo que sea de mal gusto, vulgar y ordinario.
        ';
    }

    if ($posicion == 7) {
        $interpretacion =
        '
        Una enfermedad física, una sobretensión o una aflicción sentimental le han golpeado duramente. Su autoestima ha disminuido y ahora necesita condiciones apacibles y un trato considerado que le permitan recuperase.
        ';
    }

    return $interpretacion;
}

if ($prueba) {
    for ($i = 0; $i < 8; ++$i) {
        echo 'Posición: '.$i.'<br>';
        echo 'Interpretación: '.interpretacionCafeTablaDos($i).'<br>';
        echo '------------------------------------------------------------------------<br>';
    }
}
