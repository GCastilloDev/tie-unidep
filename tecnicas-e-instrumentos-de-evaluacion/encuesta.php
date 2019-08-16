<!DOCTYPE html>
<html lang="es">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Hoja de estilos propia -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Hoja de estilos de fontello -->
    <link rel="stylesheet" href="../css/fontello.css">
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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-encuesta.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-encuesta.jpg">
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
                <h4 class="center">Encuesta</h4>
                <p>
                    Las encuestas son un método de investigación y recopilación de datos utilizados para obtener información de personas
                    sobre diversos temas. Las encuestas tienen una variedad de propósitos y se pueden llevar a cabo de muchas maneras
                    dependiendo de la metodología elegida y los objetivos que se deseen alcanzar.

                </p>
                <p>
                    Los datos suelen obtenerse mediante el uso de procedimientos estandarizados, esto con la finalidad de que cada
                    persona encuestada responda las preguntas en una igualdad de condiciones para evitar opiniones sesgadas que pudieran
                    influir en el resultado de la investigación o estudio. Una encuesta implica solicitar a las personas información a
                    través de un cuestionario.
                    <ol>
                        <li type="disc" style="font-weight:600">Guía de preguntas</li>
                        <p>
                            El cuestionario de encuesta es un instrumento de recogida de datos rigurosamente estandarizado que
                            operacionaliza las variables objeto de observación e investigación, por ello las preguntas de un
                            cuestionario constituyen los indicadores de la encuesta.
                        </p>
                    </ol>
                    <a href="../descargable/encuesta/6. FORMATO DE ENCUESTA.pdf" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Material
                        de descarga</a>
                </p>
            </div>


            <div class="center">
            
                <h4 class="center" style="margin-top:50px">Material descargable</h4>

                <h5>Encuesta</h5>
                <embed src="../descargable/encuesta/6. FORMATO DE ENCUESTA.pdf" type="application/pdf" width="80%" height="500px" />

            </div>
        </div>       
    </div>



   <!-- Footer -->
   <?php
    require_once 'includes/footer.php';
   ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

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