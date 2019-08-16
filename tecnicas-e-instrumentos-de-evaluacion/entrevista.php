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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-entevista.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-entevista.jpg">
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
                <h4 class="center">Entrevista</h4>
                <p>
                    La entrevista es una herramienta fundamental en el proceso de evaluación. Nos proporcionan un marco para recabar
                    información de diferentes áreas a través de multitud de fuentes, dentro del proceso de evaluación y seguimiento nos
                    aclaran las incógnitas acerca de los motivos, el origen y los posibles factores que están interviniendo en la
                    situación, esclareciendo las dudas y permitiendo plantear alternativas al problema. Es el momento más importante del
                    proceso, pues no solo permite analizar la evaluación sino encontrar en conjunto áreas o zonas de posibles mejoras.
                    
                </p>
                <p>
                    La entrevista, se establece mediante:

                    <ol>
                        <li type="disc" style="font-weight:600">Guía de preguntas</li>
                    </ol>
                </p>
                <p>
                    Toda herramienta mantiene una estructura, en la entrevista dependerá abiertamente de la cuestión a evaluar, y
                    mediante esto establecer las preguntas que nos proporcionaran la información que necesitamos. De igual manera, se
                    determinara el enfoque de la entrevista, ya que tiene distintos ámbitos de aplicación y por eso existen distintos
                    tipos de entrevista según para que se utilice.
                    <br>
                    <a href="../descargable/entrevista/5. FORMATO ENTREVISTA (GUIA).pdf" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Material
                        de descarga</a>
                </p>
            </div>


            <div class="center">
            
                <h4 class="center" style="margin-top:50px">Material descargable</h4>

                <h5>Entrevista</h5>
                <embed src="../descargable/entrevista/5. FORMATO ENTREVISTA (GUIA).pdf" type="application/pdf" width="80%" height="500px" />

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