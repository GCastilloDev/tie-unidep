<?php

function obtenerDiagnostico($serie, $puntuacion)
{
    $respuesta = ['SIN DATOS', 'SIN DATOS'];

    if ($serie == 1) {
        if ($puntuacion <= 8) {
            $respuesta =
            [
                'MEMORIA',
                'Muestra baja ambición intelectual, no se preocupa por lograr un aprendizaje de la información que le proporciona su medio ambiente y se encuentran deficiencias en la utilización de la memoria remota, en el proceso asociativo y de asimilación de conceptos.',
            ];
        }

        if ($puntuacion > 8) {
            $respuesta =
            [
                'MEMORIA',
                'Muestra una gran ambición intelectual, constantemente se preocupa por lograr un aprendizaje de la información que le proporciona su medio ambiente, esto lo logra a través de un funcionamiento óptimo de la memoria remota que le permite  revivir impresiones pasadas con rapidez y sin descuidar la importancia de los detalles. Tiene capacidad para asociar los conceptos, asimilarlos y utilizarlos en situaciones de la vida cotidiana.',
            ];
        }
    }

    if ($serie == 2) {
        if ($puntuacion <= 11) {
            $respuesta =
            [
                'ABSTRACCIÓN',
                'Carece de un juicio y de una capacidad para comprender  y responder a situaciones dadas en la práctica. Su funcionamiento intelectual se encuentra por debajo de la norma lo que remarca inteligencia concreta y probables dificultades de ajuste a las normas sociales establecidas. No logra un aprovechamiento de las experiencias previas.',
            ];
        }

        if ($puntuacion > 11) {
            $respuesta =
            [
                'ABSTRACCIÓN',
                'Cuenta con un excelente sentido común, juicio y razonamiento lógico que le ayudan a comprender y responder a situaciones dadas en la práctica adecuadamente.  El nivel de funcionamiento intelectual sugiere una marcada inteligencia abstracta y concreta que le dan la capacidad de un aprovechamiento de experiencias previas y ajuste hacia las normas sociales establecidas. Logra un análisis profundo de las situaciones cotidianas y muestra objetividad en sus enfoques.',
            ];
        }
    }

    if ($serie == 3) {
        if ($puntuacion <= 15) {
            $respuesta =
            [
                'EXPRESIÓN Y SÍNTESIS',
                'Pobreza de vocabulario, dificultad para expresarse, bajo nivel cultural, ya que, muestra deficiencias en el manejo de símbolos verbales. No ha logrado desarrollar un vocabulario rico y muestra deficiencias en la atención dirigida y en la comprensión de ideas o conceptos.',
            ];
        }

        if ($puntuacion > 15) {
            $respuesta =
            [
                'EXPRESIÓN Y SÍNTESIS',
                'Cuenta con un excelente manejo de símbolos verbales, ya que se ha esmerado en fomentar la riqueza de su vocabulario a partir de un aprendizaje permanente en el medio ambiente, la correcta operación de su atención dirigida y la comprensión de ideas o conceptos. Muestra un manejo adecuado del pensamiento abstracto y un nivel cultural elevado.',
            ];
        }
    }

    if ($serie == 4) {
        if ($puntuacion <= 9) {
            $respuesta =
            [
                'ORGANIZACIÓN Y LÓGICA',
                'Carece  de habilidad para conceptualizar los principios de la cosas y lograr una clasificación en base a la importancia de la organización misma del material por lo que esta persona, tendrá dificultad en lograr una selección rápida y adecuada en base a la lógica establecida. Utiliza un tipo de pensamiento únicamente práctico y concreto con un análisis superficial de las cosas, carece de elementos de juicio.',
            ];
        }

        if ($puntuacion > 9) {
            $respuesta =
            [
                'ORGANIZACIÓN Y LÓGICA',
                'Esta persona logra conceptualizar los principios de las cosas a través de una clasificación, en base a importancia de la organización misma del material y finalmente lograr una selección en base a una lógica establecida, por lo que la calidad en la información lograda tiene un nivel alto y presenta objetividad para apreciar su medio ambiente y lograr un análisis profundo de las cosas. Puede elaborar una selección lógica, una clasificación y organización del material.',
            ];
        }
    }

    if ($serie == 5) {
        if ($puntuacion <= 12) {
            $respuesta =
            [
                'CONCENTRACIÓN Y RAZONAMIENTO',
                'Tiene dificultad para concentrase en el trabajo, ansiedad ante la presión de tiempo y dificultad para manejar operaciones aritméticas, ya que no tiene habilidad para manejar cantidades y problemas basados en las matemáticas. Carece de un razonamiento abstracto y de proporciones por lo que no puede entender el problema, manejarlo mentalmente ni proponer las operaciones aritméticas necesarias para encontrar un resultado satisfactorio.',
            ];
        }

        if ($puntuacion > 12) {
            $respuesta =
            [
                'CONCENTRACIÓN Y RAZONAMIENTO',
                'Muestra gran habilidad para manejar operaciones de tipo aritmético, refleja práctica y experiencia en el manejo de cantidades y problemas basados en las matemáticas, utiliza adecuadamente el razonamiento de proporciones, atención y concentración para entender el problema, manejarlo mentalmente y proponer las operaciones aritméticas necesarias para encontrar un resultado. Bajo presión de tiempo no pierde precisión y logra llegar a resultados satisfactorios.',
            ];
        }
    }

    if ($serie == 6) {
        if ($puntuacion <= 10) {
            $respuesta =
            [
                'COMPRENSIÓN Y SENTIDO COMÚN',
                'Cuenta con una cultura limitada ya que no se le facilita la comprensión del sentido de las frases por lo que no presenta un juicio acertado de la realidad y su actuación social carece de adaptabilidad a las normas sociales establecidas. Tiene dificultad en la comprensión de textos y la información que posee es limitada.',
            ];
        }

        if ($puntuacion > 10) {
            $respuesta =
            [
                'COMPRENSIÓN Y SENTIDO COMÚN',
                'Cuenta con una cultura amplia, comprensión ágil de la lectura y un juicio acertado de la realidad que le permite una actuación de acuerdo a las normas sociales establecidas, ya que tiene facilidad para la comprensión del sentido de las frases y se preocupa por mantener una memoria activa que le abren un campo amplio en cuanto a conocimientos generales se refiere.',
            ];
        }
    }

    if ($serie == 7) {
        if ($puntuacion <= 10) {
            $respuesta =
            [
                'TOMA DE DECISIONES Y RAZONAMIENTO',
                'Es una persona con un vocabulario reducido, baja posibilidad para entender una analogía y encontrar semejanzas en su fase abstracta y verbal, no encuentra proporciones sobre una base de clasificación y, por lo tanto, se vuelve lento para elegir o decidir entre alternativas. Su toma de decisiones es deficiente.',
            ];
        }

        if ($puntuacion > 10) {
            $respuesta =
            [
                'TOMA DE DECISIONES Y RAZONAMIENTO',
                'Tiene gran  habilidad para encontrar analogías y semejanzas basadas en áreas abstractas encontrando proporciones sobre una base de clasificación y vocabulario adecuados, tiene facilidad de palabra y precisión en la utilización de conceptos lo que lo torna ágil en la elección entre alternativas.',
            ];
        }
    }

    if ($serie == 8) {
        if ($puntuacion <= 8) {
            $respuesta =
            [
                'SÍNTESIS Y ANÁLISIS',
                'Esta persona no puede concentrase ni mantener su atención fija  en una tarea, pierde cuidado en los detalles por lo que no logra conjuntar un material organizado, su capacidad de síntesis se encuentra disminuída, no distingue las partes que conforman el todo por lo que es lenta para buscar caminos de solución a los problemas, poco creativo y con falta de iniciativa.',
            ];
        }

        if ($puntuacion > 8) {
            $respuesta =
            [
                'SÍNTESIS Y ANÁLISIS',
                'Muestra capacidad para ordenar  sobre la base de una organización lógica un material desestructurado utilizando detalles y clasificación lógica para llegar a formar una frase. Tiene un excelente grado de atención y cuidado en los detalles ya que puede llegar a conjuntar un material y así sintetizar los elementos hasta llegar a formar un programa, encuentra soluciones rápidas, creativas y con iniciativa. Es capaz de mantener su atención fija en una sola tarea hasta llegar a conclusiones correctas.',
            ];
        }
    }

    if ($serie == 9) {
        if ($puntuacion <= 9) {
            $respuesta =
            [
                'CONCEPTUALIZACIÓN Y PLANEACIÓN',
                'Se indica limitación en la conceptualización, problemas en la organización y clasificación de materiales así como limitación en el ambiente cultural donde se desarrolla. Esta persona no es capaz de organizar un material en base al nivel de importancia por lo que su análisis se torna superficial y se vuelve desorganizado.',
            ];
        }

        if ($puntuacion > 9) {
            $respuesta =
            [
                'CONCEPTUALIZACIÓN Y PLANEACIÓN',
                'Presenta rapidez de conceptualización, procede a realizar la clasificación de los conceptos mismos, se torna ágil en la comprensión del significado de los conceptos y palabras, no pierde precisión para clasificar y encontrar diferencias y similitudes en el material que maneja. Es capaz de elaborar niveles de jerarquización y asi adaptar la información en forma organizada.',
            ];
        }
    }

    if ($serie == 10) {
        if ($puntuacion <= 11) {
            $respuesta =
            [
                'ATENCIÓN Y DEDUCCIÓN',
                'Baja atención a los detalles, ansiedad ante la presión del tiempo y manejo limitado de números y proporciones.  No se observa práctica y habilidad en el manejo de un razonamiento basado en cantidades por lo que se le dificulta llegar a encontrar la respuesta a algún problema. Se distrae fácilmente y puede permanecer largo tiempo en una tarea sin llegar a una solución.',
            ];
        }

        if ($puntuacion > 11) {
            $respuesta =
            [
                'ATENCIÓN Y DEDUCCIÓN',
                'Tiene una forma especial y apta para aplicar el razonamiento basado en las cantidades, puede llegar a una respuesta por medio de la abstracción de un principio y llegar a conclusiones. Maneja las proporciones aritméticas gracias a la habilidad y experiencia en el manejo de números, símbolos y proporciones, puede analizar una norma y aplicarla, atender un trabajo  y permanecer largo tiempo en la tarea, aún ante la presión del tiempo.',
            ];
        }
    }

    return $respuesta;
}
