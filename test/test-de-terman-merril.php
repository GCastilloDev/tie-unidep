<!DOCTYPE html>
<html lang="es">

<?php
    require_once '../api/testDomino.php';
?>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Hoja de estilos propia -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Hoja de estilos de fontello -->
    <link rel="stylesheet" href="../css/fontello.css">
    <!-- Hoja de estilos domino -->
    <link rel="stylesheet" href="../css/domino.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TÉCNICAS E INSTRUMENTOS DE EVALUACIÓN</title>
</head>

<body style="background-color: #f7f7f7">


<?php
    /*
    Menú flotante
    */
    require_once 'includes/menu-flotante.php';

    /*
    Cabecera
    */
    require_once 'includes/header.php';
?>

<!-- Banner con efecto parallax -->
<div class="parallax-container hide-on-small-only">
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-test-terman.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-test-terman.jpg">
    </div>
</div>

    <div class="row">

        <!-- Menú expandible izquierdo -->
        <div class="col s12 m3">
            <?php
                /*
                Menu expandible lado izquierdo
                */
                require_once 'includes/menu-izquierdo.php';
            ?>
        </div>

        <!-- Contenido de la página -->
        <div class="col s12 m9">
            <div class="container">
                <h4 class="center">Test Terman Merril</h4>
                <p>
                    <h5>Instrucciones:</h5>
                    <p>
                    Conteste todas las secciones dentro del tiempo asignado para cada una.
                    </p>
                </p>
                <p>
                    <h5>Material de descarga:</h5>
                    <div class="col s6 center">
                    <p class="center">
                    <b>Manual:</b>
                    </p>
                    <a href="../descargable/manuales/Terman - Manual de Aplicacion.pdf" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Descarga</a>
                    </div>
                    <div class="col s6 center">
                    <p class="center">
                    <b>Hoja de respuesta:</b>
                    </p>
                    <a href="../descargable/manuales/Terman - Hoja de Respuesta-Claves de Correccion-Interpretacion-puntajes.xls" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>descarga</a> 
                    </div>
                </p>
                <div class="col s12">
                <p class="red-text" style="font-weight: 600">
                    Debe responder todas las preguntas para poder obtener un resultado.
                </p>
                </div>

                <div style="margin-top: 50px">
                    <p>
                        <h5 class="center">Serie I</h5>
                    </p>
                    <p>
                        Seleccione la palabra que complete correctamente la oración.
                    </p>
                </div>

                    <!-- PREGUNTAS TEST DE TERMAN -->
                    <p style="margin-top: 50px">
                    <form action="test-de-terman-merril-resultado.php" method="POST">


                        <!-- INICIO DE SERIE I -->
                        <ol>
                            <!-- Pregunta 1 -->
                            <li>La gasolina se extrae de:</li>
                            <div class="input-field">
                                <select name="p01" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">Granos</option>
                                    <option value="1">Petróleo</option>
                                    <option value="0">Trementina</option>
                                    <option value="0">Semilla</option>
                                </select>
                            </div>
                            <!-- Pregunta 2 -->
                            <li>Una tonelada tiene:</li>
                            <div class="input-field">
                                <select name="p02" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">1000 Kgs.</option>
                                    <option value="0">2000 Kgs.</option>
                                    <option value="0">3000 Kgs.</option>
                                    <option value="0">4000 Kgs.</option>
                                </select>
                            </div>
                            <!-- Pregunta 3 -->
                            <li>La mayoría de nuestras exportaciones salen por:</li>
                            <div class="input-field">
                                <select name="p03" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Mazatlán</option>
                                    <option value="1">Veracruz</option>
                                    <option value="0">Progreso</option>
                                    <option value="0">Acapulco</option>
                                </select>
                            </div>
                            <!-- Pregunta 4 -->
                            <li>El nervio óptico sirve para:</li>
                            <div class="input-field">
                                <select name="p04" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="1">Ver</option>
                                    <option value="0">Oír</option>
                                    <option value="0">Probar</option>
                                    <option value="0">Sentir</option>
                                </select>
                            </div>
                            <!-- Pregunta 5 -->
                            <li>El café es una especie de:</li>
                            <div class="input-field">
                                <select name="p05" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Corteza</option>
                                    <option value="1">Fruto</option>
                                    <option value="0">Hojas</option>
                                    <option value="0">Raíz</option>
                                </select>
                            </div>
                            <!-- Pregunta 6 -->
                            <li>El jamón es carne de:</li>
                            <div class="input-field">
                                <select name="p06" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Carnero</option>
                                    <option value="0">Vaca</option>
                                    <option value="0">Gallina</option>
                                    <option value="1">Cerdo</option>
                                </select>
                            </div>
                            <!-- Pregunta 7 -->
                            <li>La laringe está en:</li>
                            <div class="input-field">
                                <select name="p07" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Abdomen</option>
                                    <option value="0">Cabeza</option>
                                    <option value="1">Garganta</option>
                                    <option value="0">Espalda</option>
                                </select>
                            </div>
                            <!-- Pregunta 8 -->
                            <li>La guillotina causa:</li>
                            <div class="input-field">
                                <select name="p08" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="1">Muerte</option>
                                    <option value="0">Enfermedad</option>
                                    <option value="0">Fiebre</option>
                                    <option value="0">Malestar</option>
                                </select>
                            </div>
                            <!-- Pregunta 9 -->
                            <li>La grúa se usa para:</li>
                            <div class="input-field">
                                <select name="p09" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Perforar</option>
                                    <option value="0">Cortar</option>
                                    <option value="1">Levantar</option>
                                    <option value="0">Exprimir</option>
                                </select>
                            </div>
                            <!-- Pregunta 10 -->
                            <li>Una figura de seis lados se llama:</li>
                            <div class="input-field">
                                <select name="p10" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Pentágono</option>
                                    <option value="0">Paralelogramo</option>
                                    <option value="1">Hexágono</option>
                                    <option value="0">Trapecio
                                </select>
                            </div>
                            <!-- Pregunta 11 -->
                            <li>El kilowatt mide:</li>
                            <div class="input-field">
                                <select name="p11" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Lluvia</option>
                                    <option value="0">Viento</option>
                                    <option value="1">Electricidad</option>
                                    <option value="0">Presión</option>
                                </select>
                            </div>
                            <!-- Pregunta 12 -->
                            <li>La pauta se usa en:</li>
                            <div class="input-field">
                                <select name="p12" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Agricultura</option>
                                    <option value="1">Música</option>
                                    <option value="0">Fotografía</option>
                                    <option value="0">Estenografía</option>
                                </select>
                            </div>
                            <!-- Pregunta 13 -->
                            <li>Las esmeraldas son:</li>
                            <div class="input-field">
                                <select name="p13" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Azules</option>
                                    <option value="1">Verdes</option>
                                    <option value="0">Rojas</option>
                                    <option value="0">Amarillas</option>
                                </select>
                            </div>
                            <!-- Pregunta 14 -->
                            <li>El metro es aproximadamente igual a:</li>
                            <div class="input-field">
                                <select name="p14" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Pie</option>
                                    <option value="0">Pulgada</option>
                                    <option value="1">Yarda</option>
                                    <option value="0">Milla</option>
                                </select>
                            </div>
                            <!-- Pregunta 15 -->
                            <li>Las esponjas se obtienen de:</li>
                            <div class="input-field">
                                <select name="p15" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="1">Animales</option>
                                    <option value="0">Hierbas</option>
                                    <option value="0">Bosques</option>
                                    <option value="0">Minas</option>
                                </select>
                            </div>
                            <!-- Pregunta 16 -->
                            <li>Fraude es un término usado en:</li>
                            <div class="input-field">
                                <select name="p16" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta.</option>
                                    <option value="0">Medicina</option>
                                    <option value="0">Teología</option>
                                    <option value="1">Leyes</option>
                                    <option value="0">Pedagogía</option>
                                </select>
                            </div>
                        </ol><!-- FIN SERIE I -->


                        <!-- INICIO SERIE II -->
                        <div style="margin-top: 50px">
                            <p>
                                <h5 class="center">Serie II</h5>
                            </p>
                            <p>
                                Seleccione la palabra que complete correctamente la oración.
                            </p>
                        </div>

                        <ol>
                            <!-- PREGUNTA 1 -->
                            <li>
                                <p>Si la Tierra estuviera más cerca del Sol:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p17" type="radio" value="0" required />
                                        <span>Las estrellas desaparecerían</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p17" type="radio" value="0" />
                                        <span>Los meses serían más largos</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p17" type="radio" value="1" />
                                        <span>La tierra estaría más caliente</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 2 -->
                            <li style="margin-top: 40px">
                                <p>Los rayos de una rueda están frecuentemente hechos de nogal porque:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p18" type="radio" value="1" required />
                                        <span>El nogal es fuerte</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p18" type="radio" value="0" />
                                        <span>Se corta fácilmente</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p18" type="radio" value="0" />
                                        <span>Sus frenos no son buenos</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 3 -->
                            <li style="margin-top: 40px">
                                <p>Un tren se detiene con más dificultad que un automóvil porque:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p19" type="radio" value="0" required />
                                        <span>Tiene más ruedas</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p19" type="radio" value="1" />
                                        <span>Es más pesado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p19" type="radio" value="0" />
                                        <span>Sus frenos no son buenos</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 4 -->
                            <li style="margin-top: 40px">
                                <p>El dicho * A golpecitos se derriba un roble * quiere decir:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p20" type="radio" value="0" required />
                                        <span>Que los robles son débiles</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p20" type="radio" value="0" />
                                        <span>Que son mejores los golpes pequeños</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p20" type="radio" value="1" />
                                        <span>Que el esfuerzo constante logra resultados sorprendentes</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 5 -->
                            <li style="margin-top: 40px">
                                <p>El dicho * Una olla vigilada nunca hierve * quiere decir:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p21" type="radio" value="0" required />
                                        <span>Que no debemos vigilarla cuando está en el fuego</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p21" type="radio" value="0" />
                                        <span>Que tarda en hervir</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p21" type="radio" value="1" />
                                        <span>Que el tiempo se alarga cuando esperamos algo</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 6 -->
                            <li style="margin-top: 40px">
                                <p>El dicho * Siembra pasto mientras haya sol * quiere decir:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p22" type="radio" value="0" required />
                                        <span>Que el pasto se siembra en el verano</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p22" type="radio" value="1" />
                                        <span>Que debemos aprovechar nuestras oportunidades</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p22" type="radio" value="0" />
                                        <span>Que el pasto no debe cortarse en la noche</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 7 -->
                            <li style="margin-top: 40px">
                                <p>El dicho * Zapatero a tus zapatos * quiere decir:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p23" type="radio" value="0" required />
                                        <span>Que un zapatero no debe abandonar sus zapatos</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p23" type="radio" value="0" />
                                        <span>Que los zapateros no deben estar ociosos</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p23" type="radio" value="1" />
                                        <span>Que debemos trabajar en lo que podamos hacer mejor</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 8 -->
                            <li style="margin-top: 40px">
                                <p>El dicho * La cuña para que apriete tiene que ser del mismo palo * quiere decir:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p24" type="radio" value="0" required />
                                        <span>Que el palo sirve para apretar</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p24" type="radio" value="0" />
                                        <span>Que las cuñas siempre son de madera</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p24" type="radio" value="1" />
                                        <span>Nos exigen más las personas que nos conocen</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 9 -->
                            <li style="margin-top: 40px">
                                <p>Un acorazado de acero flota porque:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p25" type="radio" value="0" required />
                                        <span>La máquina lo hace flotar</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p25" type="radio" value="1" />
                                        <span>Porque tiene grandes espacios huecos</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p25" type="radio" value="0" />
                                        <span>Contiene algo de madera</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 10 -->
                            <li style="margin-top: 40px">
                                <p>Las plumas de las alas ayudan al pájaro a volar porque:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p26" type="radio" value="1" required />
                                        <span>Las alas ofrecen una amplia superficie ligera</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p26" type="radio" value="0" />
                                        <span>Mantiene el aire fuera del cuerpo</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p26" type="radio" value="0" />
                                        <span>Disminuyen el peso</span>
                                    </label>
                                </p>
                            </li>
                            <!-- PREGUNTA 11 -->
                            <li style="margin-top: 40px">
                                <p>El dicho * Una golondrina no hace verano * quiere decir:</p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p27" type="radio" value="0" required />
                                        <span>Que las golondrinas regresan</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p27" type="radio" value="1" />
                                        <span>Que un simple dato no es suficiente</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="p27" type="radio" value="0" />
                                        <span>Que los pájaros se agregan a nuestros placeres del verano</span>
                                    </label>
                                </p>
                            </li>
                        </ol> <!-- FIN SERIE II -->

                        <!-- INICIO SERIE III -->
                        <div style="margin-top: 50px">
                            <p>
                                <h5 class="center">Serie III</h5>
                            </p>
                            <p>
                                Cuando las dos palabras signifiquen lo mismo, seleccione la letra <b>i</b> de igual
                                cuando
                                signifiquen lo opuesto, seleccione la letra <b>o</b>.
                            </p>
                        </div>

                        <ol>
                            <!-- Pregunta 1 -->
                            <li>Salado - Dulce</li>
                            <div class="input-field">
                                <select name="p28" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 2 -->
                            <li>Alegrarse - Regocijarse</li>
                            <div class="input-field">
                                <select name="p29" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 3 -->
                            <li>Mayor - Menor</li>
                            <div class="input-field">
                                <select name="p30" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 4 -->
                            <li>Sentarse - Pararse</li>
                            <div class="input-field">
                                <select name="p31" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 5 -->
                            <li>Desperdiciar - Aprovechar</li>
                            <div class="input-field">
                                <select name="p32" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 6 -->
                            <li>Conceder - Negar</li>
                            <div class="input-field">
                                <select name="p33" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 7 -->
                            <li>Tónico - Estimulante</li>
                            <div class="input-field">
                                <select name="p34" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 8 -->
                            <li>Rebajar - Denigrar</li>
                            <div class="input-field">
                                <select name="p35" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 9 -->
                            <li>Prohibir - Permitir</li>
                            <div class="input-field">
                                <select name="p36" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 10 -->
                            <li>Osado - Audaz</li>
                            <div class="input-field">
                                <select name="p37" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 11 -->
                            <li>Arrebatado - Prudente</li>
                            <div class="input-field">
                                <select name="p38" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 12 -->
                            <li>Obtuso - Agudo</li>
                            <div class="input-field">
                                <select name="p39" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 13 -->
                            <li>Inepto - Experto</li>
                            <div class="input-field">
                                <select name="p40" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 14 -->
                            <li>Esquivar - Huir</li>
                            <div class="input-field">
                                <select name="p41" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 15 -->
                            <li>Rebelarse - Someterse</li>
                            <div class="input-field">
                                <select name="p42" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 16 -->
                            <li>Monotonía - Variedad</li>
                            <div class="input-field">
                                <select name="p43" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 17 -->
                            <li>Confortar - Consolar</li>
                            <div class="input-field">
                                <select name="p44" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 18 -->
                            <li>Expeler - Retener</li>
                            <div class="input-field">
                                <select name="p45" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 19 -->
                            <li>Dócil - Sumiso</li>
                            <div class="input-field">
                                <select name="p46" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 20 -->
                            <li>Transitorio - Permanente</li>
                            <div class="input-field">
                                <select name="p47" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 21 -->
                            <li>Seguridad - Riesgo</li>
                            <div class="input-field">
                                <select name="p48" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 22 -->
                            <li>Aprobar - Objetar</li>
                            <div class="input-field">
                                <select name="p49" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 23 -->
                            <li>Expeler - Arrojar</li>
                            <div class="input-field">
                                <select name="p50" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 24 -->
                            <li>Engaño - Impostura</li>
                            <div class="input-field">
                                <select name="p51" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 25 -->
                            <li>Mitigar - Apaciguar</li>
                            <div class="input-field">
                                <select name="p52" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 26 -->
                            <li>Incitar - Aplacar</li>
                            <div class="input-field">
                                <select name="p53" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 27 -->
                            <li>Reverencia - Veneración</li>
                            <div class="input-field">
                                <select name="p54" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 28 -->
                            <li>Sobriedad - Frugalidad</li>
                            <div class="input-field">
                                <select name="p55" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 29 -->
                            <li>Aumentar - Menguar</li>
                            <div class="input-field">
                                <select name="p56" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="1">o</option>
                                    <option value="0">i</option>
                                </select>
                            </div>
                            <!-- Pregunta 30 -->
                            <li>Incitar - Instigar</li>
                            <div class="input-field">
                                <select name="p57" class="browser-default" required>
                                    <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                    <option value="0">o</option>
                                    <option value="1">i</option>
                                </select>
                            </div>
                        </ol>
                        <!-- FIN SERIE III-->


                        <!-- INICIO SERIE IV -->
                        <div style="margin-top: 50px">
                            <p>
                                <h5 class="center">Serie IV</h5>
                            </p>
                            <p>
                                Selecciona las dos palabras que indican algo que <i>SIEMPRE TIENE EL SUJETO</i>.
                                Seleccione solamente dos por pregunta. Ejemplo:
                                <br>
                                <p>Un hombre tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" disabled="disabled" />
                                                    <span>Cuerpo</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" disabled="disabled" />
                                                    <span>Gorra</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" disabled="disabled" />
                                                    <span>Guantes</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" disabled="disabled" />
                                                    <span>Boca</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" disabled="disabled" />
                                                    <span>Dinero</span>
                                                </label>
                                            </p>

                                        </div>
                                    </div>
                                </p>
                            </p>
                        </div>

                        <p>
                            <b><i>Inicio del cuestionario.</i></b>
                        </p>

                        <ol>
                            <!-- PREGUNTA 1-->
                            <li>
                                <p>Un CIRCULO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p58" value="0" required
                                                        onclick="recorridoCheckbox(p58,p59,p60,p61,p62)" />
                                                    <span>Altura</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p59" value="1" required
                                                        onclick="recorridoCheckbox(p58,p59,p60,p61,p62)" />
                                                    <span>Circunferencia</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p60" value="0" required
                                                        onclick="recorridoCheckbox(p58,p59,p60,p61,p62)" />
                                                    <span>Latitud</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p61" value="0" required
                                                        onclick="recorridoCheckbox(p58,p59,p60,p61,p62)" />
                                                    <span>Longitud</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p62" value="1" required
                                                        onclick="recorridoCheckbox(p58,p59,p60,p61,p62)" />
                                                    <span>Radio</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 2-->
                            <li>
                                <p>Un PÁJARO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p63" value="1" required
                                                        onclick="recorridoCheckbox(p63,p64,p65,p66,p67)" />
                                                    <span>Huesos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p64" value="0" required
                                                        onclick="recorridoCheckbox(p63,p64,p65,p66,p67)" />
                                                    <span>Huevos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p65" value="1" required
                                                        onclick="recorridoCheckbox(p63,p64,p65,p66,p67)" />
                                                    <span>Pico</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p66" value="0" required
                                                        onclick="recorridoCheckbox(p63,p64,p65,p66,p67)" />
                                                    <span>Nido</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p67" value="0" required
                                                        onclick="recorridoCheckbox(p63,p64,p65,p66,p67)" />
                                                    <span>Canto</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 3-->
                            <li>
                                <p>La MÚSICA tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p68" value="0" required
                                                        onclick="recorridoCheckbox(p68,p69,p70,p71,p72)" />
                                                    <span>Oyente</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p69" value="0" required
                                                        onclick="recorridoCheckbox(p68,p69,p70,p71,p72)" />
                                                    <span>Piano</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p70" value="1" required
                                                        onclick="recorridoCheckbox(p68,p69,p70,p71,p72)" />
                                                    <span>Ritmo</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p71" value="1" required
                                                        onclick="recorridoCheckbox(p68,p69,p70,p71,p72)" />
                                                    <span>Sonido</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p72" value="0" required
                                                        onclick="recorridoCheckbox(p68,p69,p70,p71,p72)" />
                                                    <span>Violín</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 4-->
                            <li>
                                <p>Un BANQUETE tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p73" value="1" required
                                                        onclick="recorridoCheckbox(p73,p74,p75,p76,p77)" />
                                                    <span>Alimentos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p74" value="0" required
                                                        onclick="recorridoCheckbox(p73,p74,p75,p76,p77)" />
                                                    <span>Música</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p75" value="1" required
                                                        onclick="recorridoCheckbox(p73,p74,p75,p76,p77)" />
                                                    <span>Personas</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p76" value="0" required
                                                        onclick="recorridoCheckbox(p73,p74,p75,p76,p77)" />
                                                    <span>Discursos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p77" value="0" required
                                                        onclick="recorridoCheckbox(p73,p74,p75,p76,p77)" />
                                                    <span>Anfitrión</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 5-->
                            <li>
                                <p>Un CABALLO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p78" value="0" required
                                                        onclick="recorridoCheckbox(p78,p79,p80,p81,p82)" />
                                                    <span>Arnés</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p79" value="1" required
                                                        onclick="recorridoCheckbox(p78,p79,p80,p81,p82)" />
                                                    <span>Casco</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p80" value="0" required
                                                        onclick="recorridoCheckbox(p78,p79,p80,p81,p82)" />
                                                    <span>Herradura</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p81" value="0" required
                                                        onclick="recorridoCheckbox(p78,p79,p80,p81,p82)" />
                                                    <span>Establo</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p82" value="1" required
                                                        onclick="recorridoCheckbox(p78,p79,p80,p81,p82)" />
                                                    <span>Cola</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 6-->
                            <li>
                                <p>Un JUEGO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p83" value="0" required
                                                        onclick="recorridoCheckbox(p83,p84,p85,p86,p87)" />
                                                    <span>Cartas</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p84" value="0" required
                                                        onclick="recorridoCheckbox(p83,p84,p85,p86,p87)" />
                                                    <span>Multas</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p85" value="1" required
                                                        onclick="recorridoCheckbox(p83,p84,p85,p86,p87)" />
                                                    <span>Jugadores</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p86" value="0" required
                                                        onclick="recorridoCheckbox(p83,p84,p85,p86,p87)" />
                                                    <span>Castigos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p87" value="1" required
                                                        onclick="recorridoCheckbox(p83,p84,p85,p86,p87)" />
                                                    <span>Reglas</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 7-->
                            <li>
                                <p>Un OBJETO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p88" value="0" required
                                                        onclick="recorridoCheckbox(p88,p89,p90,p91,p92)" />
                                                    <span>Calor</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p89" value="1" required
                                                        onclick="recorridoCheckbox(p88,p89,p90,p91,p92)" />
                                                    <span>Tamaño</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p90" value="0" required
                                                        onclick="recorridoCheckbox(p88,p89,p90,p91,p92)" />
                                                    <span>Sabor</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p91" value="0" required
                                                        onclick="recorridoCheckbox(p88,p89,p90,p91,p92)" />
                                                    <span>Valor</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p92" value="1" required
                                                        onclick="recorridoCheckbox(p88,p89,p90,p91,p92)" />
                                                    <span>Peso</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 8-->
                            <li>
                                <p>Una CONVERSACIÓN tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p93" value="0" required
                                                        onclick="recorridoCheckbox(p93,p94,p95,p96,p97)" />
                                                    <span>Acuerdos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p94" value="1" required
                                                        onclick="recorridoCheckbox(p93,p94,p95,p96,p97)" />
                                                    <span>Personas</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p95" value="0" required
                                                        onclick="recorridoCheckbox(p93,p94,p95,p96,p97)" />
                                                    <span>Preguntas</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p96" value="0" required
                                                        onclick="recorridoCheckbox(p93,p94,p95,p96,p97)" />
                                                    <span>Ingenio</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p97" value="1" required
                                                        onclick="recorridoCheckbox(p93,p94,p95,p96,p97)" />
                                                    <span>Palabras</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 9-->
                            <li>
                                <p>Una DEUDA implica siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p98" value="1" required
                                                        onclick="recorridoCheckbox(p98,p99,p100,p101,p102)" />
                                                    <span>Acreedor</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p99" value="1" required
                                                        onclick="recorridoCheckbox(p98,p99,p100,p101,p102)" />
                                                    <span>Deudor</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p100" value="0" required
                                                        onclick="recorridoCheckbox(p98,p99,p100,p101,p102)" />
                                                    <span>Interés</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p101" value="0" required
                                                        onclick="recorridoCheckbox(p98,p99,p100,p101,p102)" />
                                                    <span>Hipoteca</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p102" value="0" required
                                                        onclick="recorridoCheckbox(p98,p99,p100,p101,p102)" />
                                                    <span>Pago</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 10-->
                            <li>
                                <p>Un CIUDADANO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p103" value="1" required
                                                        onclick="recorridoCheckbox(p103,p104,p105,p106,p107)" />
                                                    <span>País</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p104" value="0" required
                                                        onclick="recorridoCheckbox(p103,p104,p105,p106,p107)" />
                                                    <span>Ocupación</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p105" value="1" required
                                                        onclick="recorridoCheckbox(p103,p104,p105,p106,p107)" />
                                                    <span>Derechos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p106" value="0" required
                                                        onclick="recorridoCheckbox(p103,p104,p105,p106,p107)" />
                                                    <span>Propiedad</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p107" value="0" required
                                                        onclick="recorridoCheckbox(p103,p104,p105,p106,p107)" />
                                                    <span>Voto</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 11-->
                            <li>
                                <p>Un MUSEO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p108" value="0" required
                                                        onclick="recorridoCheckbox(p108,p109,p110,p111,p112)" />
                                                    <span>Animales</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p109" value="1" required
                                                        onclick="recorridoCheckbox(p108,p109,p110,p111,p112)" />
                                                    <span>Orden</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p110" value="1" required
                                                        onclick="recorridoCheckbox(p108,p109,p110,p111,p112)" />
                                                    <span>Colecciones</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p111" value="0" required
                                                        onclick="recorridoCheckbox(p108,p109,p110,p111,p112)" />
                                                    <span>Minerales</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p112" value="0" required
                                                        onclick="recorridoCheckbox(p108,p109,p110,p111,p112)" />
                                                    <span>Visitantes</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 12-->
                            <li>
                                <p>Un COMPROMISO implica siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p113" value="1" required
                                                        onclick="recorridoCheckbox(p113,p114,p115,p116,p117)" />
                                                    <span>Obligación</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p114" value="1" required
                                                        onclick="recorridoCheckbox(p113,p114,p115,p116,p117)" />
                                                    <span>Acuerdo</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p115" value="0" required
                                                        onclick="recorridoCheckbox(p113,p114,p115,p116,p117)" />
                                                    <span>Amistad</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p116" value="0" required
                                                        onclick="recorridoCheckbox(p113,p114,p115,p116,p117)" />
                                                    <span>Respeto</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p117" value="0" required
                                                        onclick="recorridoCheckbox(p113,p114,p115,p116,p117)" />
                                                    <span>Satisfacción</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 13-->
                            <li>
                                <p>Un BOSQUE tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p118" value="0" required
                                                        onclick="recorridoCheckbox(p118,p119,p120,p121,p122)" />
                                                    <span>Animales</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p119" value="0" required
                                                        onclick="recorridoCheckbox(p118,p119,p120,p121,p122)" />
                                                    <span>Flores</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p120" value="1" required
                                                        onclick="recorridoCheckbox(p118,p119,p120,p121,p122)" />
                                                    <span>Sombras</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p121" value="0" required
                                                        onclick="recorridoCheckbox(p118,p119,p120,p121,p122)" />
                                                    <span>Maleza</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p122" value="1" required
                                                        onclick="recorridoCheckbox(p118,p119,p120,p121,p122)" />
                                                    <span>Árboles</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 14-->
                            <li>
                                <p>Los OBSTÁCULOS tienen siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p123" value="1" required
                                                        onclick="recorridoCheckbox(p123,p124,p125,p126,p127)" />
                                                    <span>Dificultad</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p124" value="0" required
                                                        onclick="recorridoCheckbox(p123,p124,p125,p126,p127)" />
                                                    <span>Desaliento</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p125" value="0" required
                                                        onclick="recorridoCheckbox(p123,p124,p125,p126,p127)" />
                                                    <span>Fracaso</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p126" value="1" required
                                                        onclick="recorridoCheckbox(p123,p124,p125,p126,p127)" />
                                                    <span>Impedimento</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p127" value="0" required
                                                        onclick="recorridoCheckbox(p123,p124,p125,p126,p127)" />
                                                    <span>Estímulo</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 15-->
                            <li>
                                <p>El ABORRECIMIENTO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p128" value="1" required
                                                        onclick="recorridoCheckbox(p128,p129,p130,p131,p132)" />
                                                    <span>Aversión</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p129" value="1" required
                                                        onclick="recorridoCheckbox(p128,p129,p130,p131,p132)" />
                                                    <span>Desagrado</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p130" value="0" required
                                                        onclick="recorridoCheckbox(p128,p129,p130,p131,p132)" />
                                                    <span>Temor</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p131" value="0" required
                                                        onclick="recorridoCheckbox(p128,p129,p130,p131,p132)" />
                                                    <span>Ira</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p132" value="0" required
                                                        onclick="recorridoCheckbox(p128,p129,p130,p131,p132)" />
                                                    <span>Timidez</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 16-->
                            <li>
                                <p>Una REVISTA tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p133" value="0" required
                                                        onclick="recorridoCheckbox(p133,p134,p135,p136,p137)" />
                                                    <span>Anuncios</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p134" value="1" required
                                                        onclick="recorridoCheckbox(p133,p134,p135,p136,p137)" />
                                                    <span>Papel</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p135" value="0" required
                                                        onclick="recorridoCheckbox(p133,p134,p135,p136,p137)" />
                                                    <span>Fotografías</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p136" value="0" required
                                                        onclick="recorridoCheckbox(p133,p134,p135,p136,p137)" />
                                                    <span>Grabados</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p137" value="1" required
                                                        onclick="recorridoCheckbox(p133,p134,p135,p136,p137)" />
                                                    <span>Impresión</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 17-->
                            <li>
                                <p>La CONTROVERSIA implica siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p138" value="1" required
                                                        onclick="recorridoCheckbox(p138,p139,p140,p141,p142)" />
                                                    <span>Argumentos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p139" value="1" required
                                                        onclick="recorridoCheckbox(p138,p139,p140,p141,p142)" />
                                                    <span>Desacuerdos</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p140" value="0" required
                                                        onclick="recorridoCheckbox(p138,p139,p140,p141,p142)" />
                                                    <span>Aversión</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p141" value="0" required
                                                        onclick="recorridoCheckbox(p138,p139,p140,p141,p142)" />
                                                    <span>Público</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p142" value="0" required
                                                        onclick="recorridoCheckbox(p138,p139,p140,p141,p142)" />
                                                    <span>Resumen</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                            <!-- PREGUNTA 18-->
                            <li>
                                <p>Un BARCO tiene siempre:
                                    <div class="row">
                                        <div class="col s12">
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p143" value="0" required
                                                        onclick="recorridoCheckbox(p143,p144,p145,p146,p147)" />
                                                    <span>Maquinaria</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p144" value="0" required
                                                        onclick="recorridoCheckbox(p143,p144,p145,p146,p147)" />
                                                    <span>Cañones</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p145" value="1" required
                                                        onclick="recorridoCheckbox(p143,p144,p145,p146,p147)" />
                                                    <span>Quilla</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p146" value="1" required
                                                        onclick="recorridoCheckbox(p143,p144,p145,p146,p147)" />
                                                    <span>Timón</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="p147" value="0" required
                                                        onclick="recorridoCheckbox(p143,p144,p145,p146,p147)" />
                                                    <span>Velas</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </li>
                        </ol>
                        <!-- FIN SERIE IV -->

                        <!-- INICIO SERIE V -->
                        <div style="margin-top: 50px">
                            <p>
                                <h5 class="center">Serie V</h5>
                            </p>
                            <p>
                                Encuentre las respuestas lo más pronto posible. Escribalas en el lugar correspondiente.
                            </p>
                        </div>
                        <ol>
                            <!-- PREGUNTA 1 -->
                            <li>
                                <p>
                                    A 2 por 5 pesos, Cuántos lápices pueden comprarse con 50 pesos?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p148" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 2 -->
                            <li>
                                <p>
                                    Cuántas horas tardaría un automóvil en recorrer 660 kilómetros a la velocidad de 60
                                    kilómetros
                                    por hora?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p149" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 3 -->
                            <li>
                                <p>
                                    Si un hombre gana $200.00 diarios y gasta $140.00. Cuántos días tardará en ahorrar
                                    $3,000.00
                                </p>
                                <div class="input-field col s12">
                                    <input name="p150" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 4 -->
                            <li>
                                <p>
                                    Si dos pasteles cuestan $600.00, Cuántos pesos cuesta la sexta parte de un pastel?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p151" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 5 -->
                            <li>
                                <p>
                                    Cuántas veces más es 2x3x4x6, que 3x4?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p152" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 6 -->
                            <li>
                                <p>
                                    Cuánto es el 15% de $120.00?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p153" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 7 -->
                            <li>
                                <p>
                                    El cuatro por ciento de $1,000.00 es igual al ocho por ciento, de qué cantidad?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p154" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 8 -->
                            <li>
                                <p>
                                    La capacidad de un refrigerador rectangular es de 48 metros cúbicos. Si tiene seis
                                    metros de
                                    largo por cuatro de ancho. Cuál es su altura?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p155" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 9 -->
                            <li>
                                <p>
                                    Si 7 hombres hacen un pozo de 40 metros en 2 días, Cuántos hombres se necesitan para
                                    hacerlo en medio día?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p156" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 10 -->
                            <li>
                                <p>
                                    A tiene $180.00, B tiene 2/3 de lo que tiene A, y C ½ de lo que tiene B, Cuánto
                                    tienen todos
                                    juntos?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p157" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 11 -->
                            <li>
                                <p>
                                    Si un hombre corre 100 metros en 10 segundos, Cuántos metros correrá como promedio
                                    1/5
                                    de segundo?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p158" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                            <!-- PREGUNTA 12 -->
                            <li>
                                <p>
                                    Un hombre gasta ¼ de su sueldo en casa y alimentos y 4/8 en otros gastos, Qué tanto
                                    por
                                    ciento de su sueldo ahorra?
                                </p>
                                <div class="input-field col s12">
                                    <input name="p159" type="number" step="any" class="validate" required>
                                </div>
                            </li>
                        </ol>
                        <!-- FIN SERIE V -->

                        <!-- INICIO SERIE VI -->
                        <div style="margin-top: 80px">
                            <p>
                                <h5 class="center">Serie VI</h5>
                            </p>
                            <p>
                                Anote la contestación correcta como lo muestran los ejemplos:
                                <div class="row">
                                    <ol>
                                        <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                            <li>Se hace el carbón de madera</li>
                                        </div>
                                        <div class="col s12 m2 ">
                                            <select class="browser-default" disabled>
                                                <option value="1" selected>Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>

                                        <div class="col s12 m10 " style="height: 3rem; padding-top: .8rem">
                                            <li>Tienen todos los hombres 1.70 mts. de altura</li>
                                        </div>
                                        <div class="col s12 m2 ">
                                            <select class="browser-default" disabled>
                                                <option value="1">Si</option>
                                                <option value="2" selected>No</option>
                                            </select>
                                        </div>
                                    </ol>
                                </div>
                            </p>
                            <p>
                                <b>
                                    <i>
                                        Inicio test Serie VI
                                    </i>
                                </b>
                            </p>
                            <div class="row">
                                <ol>
                                    <!-- PREGUNTA 1 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>La higiene es esencial para la salud.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p160" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 2 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Los taquígrafos usan el microscopio.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p161" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 3 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Los tíranos son justos con sus inferiores.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p162" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 4 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Las personas desamparadas están sujetas con frecuencia a la caridad.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p163" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 5 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Las personas venerables son por lo común respetadas.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p164" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 6 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Es el escorbuto un medicamento.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p165" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 7 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Es la amonestación una clase de instrumento musical.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p166" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 8 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Son los colores opacos preferidos para las banderas nacionales.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem"> 
                                        <select name="p167" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 9 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Las cosas misteriosas son a veces pavorosas.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p168" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 10 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Personas conscientes cometen alguna vez errores.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p169" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 11 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Son carnívoros los carneros.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p170" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 12 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Se dan asignaturas a los caballos.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p171" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 13 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Las cartas anónimas llevan alguna vez firma de quien las escribe.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p172" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 14 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Son discontinuos los sonidos intermitentes.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p173" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 15 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Las enfermedades estimulan el buen juicio.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p174" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 16 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Son siempre perversos los hechos premeditados.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p175" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 17 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>El contacto social tiende a reducir la timidez.</li>
                                    </div>
                                    <div class="col s12 m2">
                                        <select name="p176" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 18 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Son enfermas las personas que tienen mal carácter.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p177" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 19 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Se caracteriza generalmente el rencor por la persistencia.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p178" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="0">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <!-- PREGUNTA 20 -->
                                    <div class="col s12 m10" style="height: 3rem; padding-top: .8rem">
                                        <li>Meticuloso quiere decir lo mismo que cuidadoso.</li>
                                    </div>
                                    <div class="col s12 m2" style="padding-top: .8rem">
                                        <select name="p179" class="browser-default" required>
                                            <option value="" disabled selected>Selecciona la respuesta correcta.
                                            </option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </ol>
                            </div>
                        </div>

                        <!-- FIN SERIE VI -->

                        <!-- INICIO SERIE VII -->
                        <div style="margin-top: 80px">
                            <p>
                                <h5 class="center">Serie VII</h5>
                            </p>
                            <p>
                                Seleccione la respuesta correspondiente a la palabra que complete
                                correctamente la oración, tal como lo muestra el ejemplo:

                                <ol>
                                    <!-- PREGUNTA 1 -->
                                    <li>
                                        <p>El oído es a oír como el ojo es a:</p>
                                        <div class="row">
                                            <ol type="a">
                                                <div class="col s6 m3">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled />
                                                            <span>Mesa</span>
                                                        </label>
                                                    </li>
                                                </div>
                                                <div class="col s6 m3 ">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled
                                                                checked />
                                                            <span>Ver</span>
                                                        </label>
                                                    </li>
                                                </div>
                                                <div class="col s6 m3 ">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled />
                                                            <span>Mano</span>
                                                        </label>
                                                    </li>
                                                </div>
                                                <div class="col s6 m3 ">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled />
                                                            <span>Jugar</span>
                                                        </label>
                                                    </li>
                                                </div>
                                            </ol>
                                        </div>
                                    </li>


                                    <li>
                                        <p>El sombrero es a la cabeza como el zapato es a:</p>
                                        <div class="row">
                                            <ol type="a">
                                                <div class="col s6 m3">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled />
                                                            <span>Brazo</span>
                                                        </label>
                                                    </li>
                                                </div>
                                                <div class="col s6 m3 ">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled />
                                                            <span>Abrigo</span>
                                                        </label>
                                                    </li>
                                                </div>
                                                <div class="col s6 m3 ">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled
                                                                checked />
                                                            <span>Pie</span>
                                                        </label>
                                                    </li>
                                                </div>
                                                <div class="col s6 m3 ">
                                                    <li>
                                                        <label>
                                                            <input class="with-gap" type="radio" value="0" disabled />
                                                            <span>Pierna</span>
                                                        </label>
                                                    </li>
                                                </div>
                                            </ol>
                                        </div>
                                    </li>
                                </ol>
                            </p>
                            <p style="margin-top:50px">
                                <b>
                                    <i>
                                        Inicio test Serie VII
                                    </i>
                                </b>
                            </p>


                            <ol>
                                <!-- PREGUNTA 1 -->
                                <li>
                                    <p>ABRIGO es a USAR como PAN es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p180" type="radio" value="1"
                                                            required />
                                                        <span>Comer </span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p180" type="radio" value="0" />
                                                        <span>Hambre </span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p180" type="radio" value="0" />
                                                        <span>Agua </span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p180" type="radio" value="0" />
                                                        <span>Cocinar </span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>

                                <!-- PREGUNTA 2 -->
                                <li>
                                    <p>SEMANA es MES como MES es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p181" type="radio" value="1"
                                                            required />
                                                        <span>Año </span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p181" type="radio" value="0" />
                                                        <span>Hora </span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p181" type="radio" value="0" />
                                                        <span>Minuto </span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p181" type="radio" value="0" />
                                                        <span>Siglo </span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 3 -->
                                <li>
                                    <p>LEÓN es a ANIMAL como ROSA es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p182" type="radio" value="0"
                                                            required />
                                                        <span>Olor</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p182" type="radio" value="0" />
                                                        <span>Hoja</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p182" type="radio" value="1" />
                                                        <span>Planta</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p182" type="radio" value="0" />
                                                        <span>Espina</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 4 -->
                                <li>
                                    <p>LIBERTAD es a INDEPENDENCIA como CAUTIVERIO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p183" type="radio" value="0"
                                                            required />
                                                        <span>Negro</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p183" type="radio" value="1" />
                                                        <span>Esclavitud</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p183" type="radio" value="0" />
                                                        <span>Libre</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p183" type="radio" value="0" />
                                                        <span>Sufrir</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 5 -->
                                <li>
                                    <p>DECIR es a DIJO como ESTAR es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p184" type="radio" value="0"
                                                            required />
                                                        <span>Cantar</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p184" type="radio" value="1" />
                                                        <span>Estuvo</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p184" type="radio" value="0" />
                                                        <span>Hablando</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p184" type="radio" value="0" />
                                                        <span>Cantó</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 6 -->
                                <li>
                                    <p>LUNES es a MARTES como VIERNES es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p185" type="radio" value="0"
                                                            required />
                                                        <span>Semana</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p185" type="radio" value="0" />
                                                        <span>Jueves</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p185" type="radio" value="0" />
                                                        <span>Día</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p185" type="radio" value="1" />
                                                        <span>Sábado</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 7 -->
                                <li>
                                    <p>PLOMO es a PESADO como CORCHO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p186" type="radio" value="0"
                                                            required />
                                                        <span>Botella</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p186" type="radio" value="0" />
                                                        <span>Peso</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p186" type="radio" value="1" />
                                                        <span>Ligero</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p186" type="radio" value="0" />
                                                        <span>Flotar</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 8 -->
                                <li>
                                    <p>ÉXITO es a ALEGRÍA como FRACASO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p187" type="radio" value="1"
                                                            required />
                                                        <span>Tristeza</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p187" type="radio" value="0" />
                                                        <span>Suerte</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p187" type="radio" value="0" />
                                                        <span>Fracasar</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p187" type="radio" value="0" />
                                                        <span>Trabajo</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 9 -->
                                <li>
                                    <p>GATO es a TIGRE como PERRO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p188" type="radio" value="1"
                                                            required />
                                                        <span>Lobo</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p188" type="radio" value="0" />
                                                        <span>Ladrido</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p188" type="radio" value="0" />
                                                        <span>Mordida</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p188" type="radio" value="0" />
                                                        <span>Agarrar</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 10 -->
                                <li>
                                    <p>4 es a 16 como 5 es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p189" type="radio" value="0"
                                                            required />
                                                        <span>7</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p189" type="radio" value="0" />
                                                        <span>45</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p189" type="radio" value="0" />
                                                        <span>35</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p189" type="radio" value="1" />
                                                        <span>25</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 11 -->
                                <li>
                                    <p>LLORAR es a REIR como TRISTE es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p190" type="radio" value="0"
                                                            required />
                                                        <span>Muerte</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p190" type="radio" value="1" />
                                                        <span>Alegre</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p190" type="radio" value="0" />
                                                        <span>Mortaja</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p190" type="radio" value="0" />
                                                        <span>Doctor</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 12 -->
                                <li>
                                    <p>VENENO es a MUERTE como ALIMENTO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p191" type="radio" value="0"
                                                            required />
                                                        <span>Comer</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p191" type="radio" value="0" />
                                                        <span>Pájaro</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p191" type="radio" value="1" />
                                                        <span>Vida</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p191" type="radio" value="0" />
                                                        <span>Malo</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 13 -->
                                <li>
                                    <p>1 es a 3 como 9 es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p192" type="radio" value="0"
                                                            required />
                                                        <span>18</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p192" type="radio" value="1" />
                                                        <span>27</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p192" type="radio" value="0" />
                                                        <span>36</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p192" type="radio" value="0" />
                                                        <span>45</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 14 -->
                                <li>
                                    <p>ALIMENTO es a HAMBRE como AGUA es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p193" type="radio" value="0"
                                                            required />
                                                        <span>Beber</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p193" type="radio" value="0" />
                                                        <span>Claro</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p193" type="radio" value="1" />
                                                        <span>Sed</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p193" type="radio" value="0" />
                                                        <span>Puro</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 15 -->
                                <li>
                                    <p>AQUí es a ALLÍ como ESTE es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p194" type="radio" value="0"
                                                            required />
                                                        <span>Estos</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p194" type="radio" value="0" />
                                                        <span>Aquel</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p194" type="radio" value="1" />
                                                        <span>Ese</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p194" type="radio" value="0" />
                                                        <span>Entonces</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 16 -->
                                <li>
                                    <p>TIGRE es a PELO como TRUCHA es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p195" type="radio" value="0"
                                                            required />
                                                        <span>Agua</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p195" type="radio" value="0" />
                                                        <span>Pez</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p195" type="radio" value="1" />
                                                        <span>Escama</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p195" type="radio" value="0" />
                                                        <span>Nadar</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 17 -->
                                <li>
                                    <p>PERVERTIDO es a DEPREVADO como INCORRUPTO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p196" type="radio" value="0"
                                                            required />
                                                        <span>Patria</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p196" type="radio" value="1" />
                                                        <span>Honrado</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p196" type="radio" value="0" />
                                                        <span>Canción</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p196" type="radio" value="0" />
                                                        <span>Estudio</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 18 -->
                                <li>
                                    <p>B es a D como SEGUNDO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p197" type="radio" value="0"
                                                            required />
                                                        <span>Tercero</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p197" type="radio" value="0" />
                                                        <span>Último</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p197" type="radio" value="1" />
                                                        <span>Cuarto</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p197" type="radio" value="0" />
                                                        <span>Posterior</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 19 -->
                                <li>
                                    <p>ESTADO es a GOBIERNO como EJERCITO es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p198" type="radio" value="0"
                                                            required />
                                                        <span>Marina</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p198" type="radio" value="0" />
                                                        <span>Soldado</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p198" type="radio" value="1" />
                                                        <span>General</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p198" type="radio" value="0" />
                                                        <span>Sargento</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                                <!-- PREGUNTA 20 -->
                                <li>
                                    <p>SUJETO es a PREDICADO como NOMBRE es a:</p>
                                    <div class="row">
                                        <ol type="a">
                                            <div class="col s6 m3">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p199" type="radio" value="0"
                                                            required />
                                                        <span>Pronombre</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p199" type="radio" value="0" />
                                                        <span>Adverbio</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p199" type="radio" value="1" />
                                                        <span>Verbo</span>
                                                    </label>
                                                </li>
                                            </div>
                                            <div class="col s6 m3 ">
                                                <li>
                                                    <label>
                                                        <input class="with-gap" name="p199" type="radio" value="0" />
                                                        <span>Adjetivo</span>
                                                    </label>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- FIN SERIE VII -->

                        <!-- INICIO SERIE VIII -->
                        <div style="margin-top: 80px">
                            <p>
                                <h5 class="center">Serie VIII</h5>
                            </p>
                            <p>
                                Las palabras de cada una de las oraciones siguientes están mezcladas. Ordene cada una de
                                las oraciones. Si el significado de la oración es verdadero seleccione Verdadero, si el
                                significado de la oración es falso, seleccione Falso como en los siguientes
                                ejemplos:
                            </p>
                            <p>
                                <ol>
                                    <!-- Pregunta 1 -->
                                    <li>Oír son los para oídos</li>
                                    <div class="input-field">
                                        <select class="browser-default" disabled>
                                            <option value="0" selected>Verdadero</option>
                                            <option value="1">Falso</option>
                                        </select>
                                    </div>
                                    <!-- Pregunta 1 -->
                                    <li>Comer para pólvora la buena es</li>
                                    <div class="input-field">
                                        <select class="browser-default" disabled>
                                            <option value="0">Verdadero</option>
                                            <option value="1" selected>Falso</option>
                                        </select>
                                    </div>
                                </ol>
                            </p>
                            <p style="margin-top:50px">
                                <b>
                                    <i>
                                        Inicio test Serie VIII
                                    </i>
                                </b>
                            </p>
                            <ol>
                                <!-- Pregunta 1 -->
                                <li>con crecen los niños edad la</li>
                                <div class="input-field">
                                    <select name="p200" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 2 -->
                                <li>buena mar beber el para agua de es</li>
                                <div class="input-field">
                                    <select name="p201" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="0">Verdadero</option>
                                        <option value="1">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 3 -->
                                <li>lo es paz la guerra opuesta la a</li>
                                <div class="input-field">
                                    <select name="p202" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 4 -->
                                <li>caballos automóvil un que caminan los despacio más</li>
                                <div class="input-field">
                                    <select name="p203" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 5 -->
                                <li>consejo a veces es buen seguir un difícil</li>
                                <div class="input-field">
                                    <select name="p204" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 6 -->
                                <li>cuatrocientas todos páginas contienen libros los</li>
                                <div class="input-field">
                                    <select name="p205" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="0">Verdadero</option>
                                        <option value="1">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 7 -->
                                <li>crecen las que fresas el mas roble</li>
                                <div class="input-field">
                                    <select name="p206" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="0">Verdadero</option>
                                        <option value="1">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 8 -->
                                <li>verdadera comparada no puede amistad ser</li>
                                <div class="input-field">
                                    <select name="p207" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 9 -->
                                <li>envidia la perjudiciales gula son y la</li>
                                <div class="input-field">
                                    <select name="p208" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 10 -->
                                <li>nunca acciones premiadas las deben buenas ser</li>
                                <div class="input-field">
                                    <select name="p209" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="0">Verdadero</option>
                                        <option value="1">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 11 -->
                                <li>exteriores engañan nunca apariencias las nos</li>
                                <div class="input-field">
                                    <select name="p210" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="0">Verdadero</option>
                                        <option value="1">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 12 -->
                                <li>nunca es hombre las que acciones demuestran un lo</li>
                                <div class="input-field">
                                    <select name="p211" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="0">Verdadero</option>
                                        <option value="1">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 13 -->
                                <li>ciertas siempre muerte de causan clases enfermedades</li>
                                <div class="input-field">
                                    <select name="p212" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 14 -->
                                <li>odio indeseables aversión sentimientos el son y la</li>
                                <div class="input-field">
                                    <select name="p213" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 15 -->
                                <li>frecuentemente por juzgar podemos acciones hombres nosotros sus a los</li>
                                <div class="input-field">
                                    <select name="p214" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 16 -->
                                <li>una es sábana sarapes tan nunca los calientes como</li>
                                <div class="input-field">
                                    <select name="p215" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="1">Verdadero</option>
                                        <option value="0">Falso</option>
                                    </select>
                                </div>
                                <!-- Pregunta 17 -->
                                <li>nunca que descuidados los tropiezan son</li>
                                <div class="input-field">
                                    <select name="p216" class="browser-default" required>
                                        <option value="" disabled selected>Selecciona la respuesta correcta</option>
                                        <option value="0">Verdadero</option>
                                        <option value="1">Falso</option>
                                    </select>
                                </div>
                            </ol>
                        </div>
                        <!-- FIN SERIE VIII -->

                        <!-- INICIO SERIE IX -->
                        <div style="margin-top: 60px">
                            <p>
                                <h5 class="center">Serie IX</h5>
                            </p>
                            <p>
                                Seleccione la letra de la palabra que no corresponde con las demás del renglón como en
                                los siguientes ejemplos:
                            </p>
                            <p>
                                <ol>
                                    <!-- PREGUNTA 1 -->
                                    <div class="row">
                                        <li>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>Bala</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>Cañón</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>Pistola</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>Espada</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled checked />
                                                    <span>Lápiz</span>
                                                </label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="row">
                                        <li>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>Canadá</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled checked />
                                                    <span>Sonora</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>China</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>India</span>
                                                </label>
                                            </div>
                                            <div class="col s6 m2">
                                                <label>
                                                    <input class="with-gap" type="radio" value="0" disabled />
                                                    <span>Francia</span>
                                                </label>
                                            </div>
                                        </li>
                                    </div>
                                </ol>
                            </p>

                            <p style="margin-top:50px">
                                <b>
                                    <i>
                                        Inicio test Serie IX
                                    </i>
                                </b>
                            </p>

                            <ol>
                                <!-- PREGUNTA 1 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p217" type="radio" value="0" required />
                                                <span>Saltar</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p217" type="radio" value="0" />
                                                <span>Correr</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p217" type="radio" value="0" />
                                                <span>Brincar</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p217" type="radio" value="1" />
                                                <span>Pararse</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p217" type="radio" value="0" />
                                                <span>Caminar</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 2 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p218" type="radio" value="0" required />
                                                <span>Monarquía</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p218" type="radio" value="0" />
                                                <span>Comunista</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p218" type="radio" value="0" />
                                                <span>Demócrata</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p218" type="radio" value="0" />
                                                <span>Anarquista</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p218" type="radio" value="1" />
                                                <span>Católico</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 3 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p219" type="radio" value="0" required />
                                                <span>Muerte</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p219" type="radio" value="0" />
                                                <span>Duelo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p219" type="radio" value="1" />
                                                <span>Paseo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p219" type="radio" value="0" />
                                                <span>Pobreza</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p219" type="radio" value="0" />
                                                <span>Tristeza</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 4 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p220" type="radio" value="1" required />
                                                <span>Carpintero</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p220" type="radio" value="0" />
                                                <span>Doctor</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p220" type="radio" value="0" />
                                                <span>Abogado</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p220" type="radio" value="0" />
                                                <span>Ingeniero</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p220" type="radio" value="0" />
                                                <span>Profesor</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 5 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p221" type="radio" value="0" required />
                                                <span>Cama</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p221" type="radio" value="0" />
                                                <span>Silla</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p221" type="radio" value="1" />
                                                <span>Plato</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p221" type="radio" value="0" />
                                                <span>Sofá</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p221" type="radio" value="0" />
                                                <span>Mesa</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 6 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p222" type="radio" value="0" required />
                                                <span>Francisco</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p222" type="radio" value="0" />
                                                <span>Santiago</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p222" type="radio" value="0" />
                                                <span>Juan</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p222" type="radio" value="1" />
                                                <span>Sara</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p222" type="radio" value="0" />
                                                <span>Guillermo</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 7 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p223" type="radio" value="0" required />
                                                <span>Duro</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p223" type="radio" value="0" />
                                                <span>Aspero</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p223" type="radio" value="0" />
                                                <span>Liso</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p223" type="radio" value="0" />
                                                <span>Suave</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p223" type="radio" value="1" />
                                                <span>Dulce</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 8 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p224" type="radio" value="1" required />
                                                <span>Digestión</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p224" type="radio" value="0" />
                                                <span>Oído</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p224" type="radio" value="0" />
                                                <span>Vista</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p224" type="radio" value="0" />
                                                <span>Olfato</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p224" type="radio" value="0" />
                                                <span>Tacto</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 9 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p225" type="radio" value="0" required />
                                                <span>Automóvil</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p225" type="radio" value="0" />
                                                <span>Bicicleta</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p225" type="radio" value="0" />
                                                <span>Guayin</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p225" type="radio" value="1" />
                                                <span>Telégrafo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p225" type="radio" value="0" />
                                                <span>Tren</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 10 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p226" type="radio" value="0" required />
                                                <span>Abajo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p226" type="radio" value="0" />
                                                <span>Acá</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p226" type="radio" value="1" />
                                                <span>Reciente</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p226" type="radio" value="0" />
                                                <span>Arriba</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p226" type="radio" value="0" />
                                                <span>Allá</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 11 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p227" type="radio" value="0" required />
                                                <span>Hidalgo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p227" type="radio" value="0" />
                                                <span>Morelos</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p227" type="radio" value="0" />
                                                <span>Bravo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p227" type="radio" value="0" />
                                                <span>Matamoros</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p227" type="radio" value="1" />
                                                <span>Bolívar</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 12 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p228" type="radio" value="0" required />
                                                <span>Danés</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p228" type="radio" value="0" />
                                                <span>Galgo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p228" type="radio" value="0" />
                                                <span>Buldog</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p228" type="radio" value="0" />
                                                <span>Pequinés</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p228" type="radio" value="1" />
                                                <span>Longhorm</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 13 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p229" type="radio" value="1" required />
                                                <span>Tela</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p229" type="radio" value="0" />
                                                <span>Algodón</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p229" type="radio" value="0" />
                                                <span>Lino</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p229" type="radio" value="0" />
                                                <span>Seda</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p229" type="radio" value="0" />
                                                <span>Lana</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 14 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p230" type="radio" value="0" required />
                                                <span>Ira</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p230" type="radio" value="0" />
                                                <span>Odio</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p230" type="radio" value="0" />
                                                <span>Alegría</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p230" type="radio" value="0" />
                                                <span>Piedad</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p230" type="radio" value="1" />
                                                <span>Razonamiento</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 15 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p231" type="radio" value="0" required />
                                                <span>Edison</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p231" type="radio" value="0" />
                                                <span>Franklin</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p231" type="radio" value="0" />
                                                <span>Marconi</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p231" type="radio" value="0" />
                                                <span>Fulton</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p231" type="radio" value="1" />
                                                <span>Shakespeare</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 16 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p232" type="radio" value="1" required />
                                                <span>Mariposa</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p232" type="radio" value="0" />
                                                <span>Halcón</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p232" type="radio" value="0" />
                                                <span>Avestruz</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p232" type="radio" value="0" />
                                                <span>Petirrojo</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p232" type="radio" value="0" />
                                                <span>Golondrina</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 17 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p233" type="radio" value="0" required />
                                                <span>Dar</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p233" type="radio" value="0" />
                                                <span>Prestar</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p233" type="radio" value="0" />
                                                <span>Perder</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p233" type="radio" value="1" />
                                                <span>Ahorrar</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p233" type="radio" value="0" />
                                                <span>Derrochar</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 18 -->
                                <div class="row">
                                    <li>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p234" type="radio" value="0" required />
                                                <span>Australia</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p234" type="radio" value="0" />
                                                <span>Cuba</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p234" type="radio" value="0" />
                                                <span>Córcega</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p234" type="radio" value="0" />
                                                <span>Irlanda</span>
                                            </label>
                                        </div>
                                        <div class="col s6 m2">
                                            <label>
                                                <input class="with-gap" name="p234" type="radio" value="1" />
                                                <span>España</span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                            </ol>
                        </div>
                        <!-- FIN SERIE IX -->

                        <!-- INICIO SERIE X -->
                        <div style="margin-top: 60px">
                            <p>
                                <h5 class="center">Serie X</h5>
                            </p>
                            <p>
                                Procure encontrar la forma en que están hechas las series. Después escriba en las
                                casillas de
                                respuesta los DOS NÚMEROS que faltan como en los ejemplos:
                            </p>
                            <ol>
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>5</td>
                                                        <td>10</td>
                                                        <td>15</td>
                                                        <td>20</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" value="25" disabled>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" value="30" disabled>
                                        </div>
                                    </li>
                                </div>
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>20</td>
                                                        <td>18</td>
                                                        <td>16</td>
                                                        <td>14</td>
                                                        <td>12</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" value="10" disabled>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" value="8" disabled>
                                        </div>
                                    </li>
                                </div>
                            </ol>


                            <p style="margin-top:50px">
                                <b>
                                    <i>
                                        Inicio test Serie X
                                    </i>
                                </b>
                            </p>
                            <ol>
                                <!-- PREGUNTA 1 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>8</td>
                                                        <td>7</td>
                                                        <td>6</td>
                                                        <td>5</td>
                                                        <td>4</td>
                                                        <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p235"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p236"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 2 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>3</td>
                                                        <td>8</td>
                                                        <td>13</td>
                                                        <td>18</td>
                                                        <td>23</td>
                                                        <td>28</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p237"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p238"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 3 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>4</td>
                                                        <td>8</td>
                                                        <td>16</td>
                                                        <td>32</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p239"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p240"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 4 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>8</td>
                                                        <td>8</td>
                                                        <td>6</td>
                                                        <td>6</td>
                                                        <td>4</td>
                                                        <td>4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p241"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p242"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 5 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>11.75</td>
                                                        <td>12</td>
                                                        <td>12.25</td>
                                                        <td>12.75</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p243"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p244"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 6 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>8</td>
                                                        <td>9</td>
                                                        <td>12</td>
                                                        <td>13</td>
                                                        <td>16</td>
                                                        <td>17</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p245"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p246"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 7 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>16</td>
                                                        <td>8</td>
                                                        <td>4</td>
                                                        <td>2</td>
                                                        <td>1</td>
                                                        <td>0.5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p247"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p248"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 8 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>31.3</td>
                                                        <td>40.3</td>
                                                        <td>49.3</td>
                                                        <td>58.3</td>
                                                        <td>67.3</td>
                                                        <td>76.3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p249"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p250"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 9 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>3</td>
                                                        <td>5</td>
                                                        <td>4</td>
                                                        <td>6</td>
                                                        <td>5</td>
                                                        <td>7</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p251"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p252"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 10 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>7</td>
                                                        <td>11</td>
                                                        <td>15</td>
                                                        <td>16</td>
                                                        <td>20</td>
                                                        <td>24</td>
                                                        <td>25</td>
                                                        <td>29</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p253"
                                                required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" step="any" class="validate center" name="p254"
                                                required>
                                        </div>
                                    </li>
                                </div>
                                <!-- PREGUNTA 11 -->
                                <div class="row">
                                    <li>
                                        <div class="col s8">
                                            <table>
                                                <tbody>
                                                    <tr style="border-bottom: none">
                                                        <td>0.04</td>
                                                        <td>0.2</td>
                                                        <td>1</td>
                                                        <td>5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" class="validate center" name="p255" required>
                                        </div>
                                        <div class="col s2">
                                            <input type="number" class="validate center" name="p256" required>
                                        </div>
                                    </li>
                                </div>
                            </ol>

                        </div>
                        <!-- FIN SERIE X -->




                        <div class="right" style="margin-top: 50px">
                            <button class="btn-small waves-effect waves-light brown darken-3" type="submit"
                                name="action">
                                <i class="material-icons right">send</i>ENVIAR</button>
                            <br>
                        </div>
                
                
                </form>

                </p>
                   
            </div>

        </div>       
    </div>



   <!-- Footer -->
   <?php
    require_once 'includes/footer.php';
   ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JS Propios -->
    <script src="../js/validaciones.js"></script>

    <!-- Inicializar los JS del proyecto -->
    <script>

        M.AutoInit();

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems,
                {
                    edge: 'right',
                    outDuration: 500,
                    inDuration: 500,
                    draggable: false
                });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
        });


        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems,
                {
                    direction: 'left'
                });
        });


        
    </script>
</body>

</html>