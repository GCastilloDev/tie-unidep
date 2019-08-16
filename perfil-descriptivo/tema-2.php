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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-instrumentos-evaluacion.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-instrumentos-evaluacion.jpg">
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
                <h4 class="center">Tema 2: Selección de las técnicas e instrumentos de evaluación</h4>
                    <p>
                        Como antes se ha mencionado, el objetivo de la evaluación es obtener información de los evaluados, una recolección
                        de datos de importancia para criterios o aspectos que dependan de dichos resultados. La recolección de datos se
                        refiere al uso de una gran diversidad de técnicas y herramientas que pueden ser utilizadas por el evaluador para
                        desarrollar los sistemas de información, estos instrumentos se aplicarán en un momento en particular, con la
                        finalidad de buscar información que será útil a una investigación en común.
                    </p>
                    <p>
                        Es importante determinar cueles son estos instrumentos y cual utilizar según los aspectos que deseamos evaluar.
                        Elegir correctamente, nos garantizara la veracidad y eficacia de la información que este mismo nos proporcione, por
                        tal motivo se debe conocer los aspectos a tomar en cuenta al seleccionar dichas técnicas o instrumentos antes de
                        empezar la evaluación y lo cual se determinara en el desarrollo de este tema.
                    </p>
            </div>


            <div class="center">
            
                <h4 class="center" style="margin-top:50px">Material descargable</h4>
                
                <embed src="../descargable/TEMA 2. SELECCION DE LAS TECNICAS E INSTRUMENTO DE EVALUACION.pdf" type="application/pdf" width="80%" height="500px" />
                <embed src="../descargable/TEMA 2. CARACTERISTICAS PRINCIPALES DE TECNICAS E INSTRUMENTO DE EVALUACION (ANEXO).pdf" type="application/pdf" width="80%" height="500px" style="margin-top: 50px" />

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