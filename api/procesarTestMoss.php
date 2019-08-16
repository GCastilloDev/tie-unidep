<?php

$paginaError = 
"
<!DOCTYPE html>
<html lang='es'>
<head>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!-- Compiled and minified CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <!-- Hoja de estilos propia -->
    <link rel='stylesheet' href='../css/main.css'>
    <!-- Hoja de estilos de fontello -->
    <link rel='stylesheet' href='../css/fontello.css'>
    <!-- Favicon -->
    <link rel='shortcut icon' href='../img/favicon.png' type='image/png'>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>TÉCNICAS E INSTRUMENTOS DE EVALUACIÓN</title>
</head>

<body style='background-color: #f7f7f7'>


<div class='fixed-action-btn'>
        <a href='#!' style='background: #003a5c' data-target='mobile-demo'
            class='btn-floating btn-large sidenav-trigger'>
            <i class='large material-icons'>menu</i>
        </a>
</div>

<ul class='sidenav' id='mobile-demo' style='background: #003a5c'>
        <li><a href='../index.php' class='white-text'>Inicio</a></li>
        <li><a href='../perfil-descriptivo.php' class='white-text'>Perfil descriptivo</a></li>
        <li><a href='../tecnicas-e-instrumentos-de-evaluacion.php' class='white-text'>Técnicas e instrumentos de evaluación</a></li>
        <li><a href='../tests.php' class='white-text'>Test's</a></li>
</ul>
<nav class='nav-extended'>
    <div class='nav-wrapper'>
        <div class='row' style='background: #FFAD40; margin:0'>
            <div class='center'>
                <div class='col s3'>
                    <img src='../img/logo-unidep.png' alt='logo unidep' style='max-height: 50px; margin-top:28px'>
                </div>
                <div class='col s6 '>
                    <p class='center' style='font-size: 30px; margin-top:20px; margin-bottom: 0'>
                        <h1 style='font-size: 30px; margin-top:40px; margin-bottom: 0'>TÉCNICAS E
                            INSTRUMENTOS DE EVALUACIÓN</h1>
                    </p>
                </div>
                <div class='col s3' style='padding: 0'>
                    <img src='../img/logo-psicologia.png' alt='logo unidep' style='max-height:50px; margin-top:28px'>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Banner con efecto parallax -->
<div class='parallax-container'>
        <div class='parallax'><img style='max-width: 90%' src='../img/banner-resultado.jpg'></div>
</div>

    <div class='row'>

        <!-- Menú expandible izquierdo -->
        <div class='col s3'>
            <div style='margin-top:30px'>
    <ul class='collapsible'>
        <li>
            <div class='collapsible-header light-blue-text text-darken-4'>
                <i class='material-icons'>account_box
                </i>
                Perfil descriptivo
                <span class='new badge light-blue darken-4' data-badge-caption='6'></span></div>
            <div class='collapsible-body'>
                <p><a href='../perfil-descriptivo/tema-1.php' class='light-blue-text text-darken-4'>Tema 1: Evaluación de competencia
                        laboral.</a></p>
            </div>
            <div class='collapsible-body'>
                <p> <a href='../perfil-descriptivo/tema-2.php' class='light-blue-text text-darken-4'>Tema 2: Selección de las técnicas e
                        instrumentos de evaluación.</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='../perfil-descriptivo/tema-3.php' class='light-blue-text text-darken-4'>Tema 3: Identificación de los contenidos
                        de evaluación.</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='../perfil-descriptivo/tema-4.php' class='light-blue-text text-darken-4'>Tema 4: Estructura de un plan de
                        evaluación.</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='../perfil-descriptivo/tema-5.php' class='light-blue-text text-darken-4'>Tema 5: Comprobación de la autenticidad
                        de la evidencia histórica presentada
                        por el candidato.</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='../perfil-descriptivo/tema-6.php' class='light-blue-text text-darken-4'>Tema 6: Como registrar la contrastación
                        de las evidencias recopiladas contra
                        UCL.</a></p>
            </div>
        </li>
        <li>
            <div class='collapsible-header  cyan-text text-darken-4'>
                <i class='material-icons'>insert_drive_file
                </i>
                Técnicas e instrumentos de evaluación
                <span class='new badge   cyan darken-4' data-badge-caption='4'></span></div>
            <div class='collapsible-body'>
                <p><a href='../tecnicas-e-instrumentos-de-evaluacion/observacion.php' class='cyan-text text-darken-4'>Observación</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='../tecnicas-e-instrumentos-de-evaluacion/entrevista.php' class='cyan-text text-darken-4'>Entrevista</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='../tecnicas-e-instrumentos-de-evaluacion/encuesta.php' class='cyan-text text-darken-4'>Encuesta</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='../tecnicas-e-instrumentos-de-evaluacion/prueba.php' class='cyan-text text-darken-4'>Prueba</a></p>
            </div>
        </li>
        <li>
            <div class='collapsible-header teal-text text-darken-4'>
                <i class='material-icons'>recent_actors</i>
                Test's
                <span class='new badge teal darken-4' data-badge-caption='6'></span></div>
            <div class='collapsible-body'>
                <p><a href='test-domino.php' class='teal-text text-darken-4'>Test Domino</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='test-de-raven.php' class='teal-text text-darken-4'>Test de Raven</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='test-de-terman-mirrel.php' class='teal-text text-darken-4'>Test de Terman Mirrel</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='test-de-colores.php' class='teal-text text-darken-4'>Test de Colores</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='test-de-moss.php' class='teal-text text-darken-4'>Test de Moss</a></p>
            </div>
            <div class='collapsible-body'>
                <p><a href='test-de-cleaver.php' class='teal-text text-darken-4'>Test de Cleaver</a></p>
            </div>
        </li>
    </ul>
</div>        </div>

        <!-- Contenido de la página -->
        <div class='col s9'>
            <div class='container'>
                <h4 class='center'>Test de Moss - Resultado</h4>

                <h3 class='center red-text'> No puede acceder al resultado sin realizar el test! </h3>
                
                

                <p class='right'>
                <a href='test-de-moss.php' class='waves-effect waves-light btn-small brown darken-3 pulse'><i class='material-icons right'>reply</i>REGRESAR</a>
                </p>
                   
            </div>

        </div>       
    </div>



    <!-- FOOTER -->
    <footer class='page-footer' style='padding: 0px; margin: 0px; background: #FFAD40'>
        <div class='footer-copyright'>
            <div class='row' style='margin-bottom:0; margin-top:0;'>
            <div class='container' style='margin-bottom:0'>
                <div class='col s6' style='padding: 0'>
                <p class='right white-text' style='margin-bottom: 0; padding: 0; margin-top: .3em'>Desarrollado por:</p>         
                </div>
                <div class='col s6'>
                <p class='left' style='margin: 0; padding: 0'>
                <a class='white-text text-lighten-3'
                href='http://www.beekha.com'>
                <img src='../img/beekha_logo_3.png'  style='max-width: 70%' alt='logo beekhá'>
                </a>
                </p>
                </div>
            </div>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>

    <!-- Inicializar los JS del proyecto -->
    <script>

        M.AutoInit();

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems,
                {
                    edge: 'right',
                    outDuration: 1000,
                    inDuration: 1500,
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
";

$seguridad = true;

if($seguridad){
    if (!$_POST) {
        echo $paginaError;
        die();
    }
}

function tipoRango($percentil)
{
    $rango = '';

    if ($percentil >= 1 && $percentil <= 24) {
        $rango = 'V DEFICIENTE';
    } elseif ($percentil >= 25 && $percentil <= 39) {
        $rango = 'IV INFERIOR';
    } elseif ($percentil >= 40 && $percentil <= 49  ) {
        $rango = 'III MEDIO INFERIOR';
    } elseif ($percentil >= 50 && $percentil <= 59) {
        $rango = 'III MEDIO - MEDIO';
    } elseif ($percentil >= 60 && $percentil <= 74) {
        $rango = 'III MEDIO SUPERIOR';
    } elseif ($percentil >= 75 && $percentil <= 90) {
        $rango = 'II SUPERIOR';
    } elseif ($percentil >= 91 && $percentil <= 100) {
        $rango = 'I MUY SUPERIOR';
    }

    return $rango;
}

    $general = 0;

    foreach ($_POST as $clave => $valor) {
        $general += (int) $valor;
    }

    //echo 'Número de elementos de POST '.count($_POST);

    $generalPorcentaje = ($general * 100) / 30;
    $generalRango = tipoRango($generalPorcentaje);

    $habilidadSupervision = $_POST['p02'] + $_POST['p03'] + $_POST['p16'] + $_POST['p18'] + $_POST['p24'] + $_POST['p30'];
    $habilidadSupervisionPorcentaje = ($habilidadSupervision * 100) / 6;
    $habilidadSupervisionRango = tipoRango($habilidadSupervisionPorcentaje);

    $capacidadDecision = $_POST['p04'] + $_POST['p06'] + $_POST['p20'] + $_POST['p23'] + $_POST['p29'];
    $capacidadDecisionPorcentaje = ($capacidadDecision * 100) / 5;
    $capacidadDecisionRango = tipoRango($capacidadDecisionPorcentaje);

    $capacidadEvaluacion = $_POST['p07'] + $_POST['p09'] + $_POST['p12'] + $_POST['p14'] + $_POST['p19'] + $_POST['p21'] + $_POST['p26'] + $_POST['p27'];
    $capacidadEvaluacionPorcentaje = ($capacidadEvaluacion * 100) / 8;
    $capacidadEvaluacionRango = tipoRango($capacidadEvaluacionPorcentaje);

    $habilidadRelaciones = $_POST['p01'] + $_POST['p10'] + $_POST['p11'] + $_POST['p13'] + $_POST['p25'];
    $habilidadRelacionesPorcentaje = ($habilidadRelaciones * 100) / 5;
    $habilidadRelacionesRango = tipoRango($habilidadRelacionesPorcentaje);

    $sentidoComun = $_POST['p05'] + $_POST['p08'] + $_POST['p15'] + $_POST['p17'] + $_POST['p22'] + $_POST['p28'];
    $sentidoComunPorcentaje = ($sentidoComun * 100) / 6;
    $sentidoComunRango = tipoRango($sentidoComunPorcentaje);
