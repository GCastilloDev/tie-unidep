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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-competencia-laboral.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-competencia-laboral.jpg">
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
            <h4 class="center">Tema 1: Evaluación de competencia laboral</h4>
            <p>
                La evaluación de competencias puede entenderse como un proceso por el cual se recoge información
                acerca de las competencias desarrolladas por un individuo y se comparan éstas con el perfil de
                competencias requerido por un puesto de trabajo, de tal manera que pueda formularse un juicio de valor
                sobre el ajuste al mismo.
            </p>
            <p>
                Estas competencias evaluadas antes de su incorporación a una organización, cuando se realiza la selección de
                personal y además la evaluación de competencias estarán presentes a lo largo de la vida laboral del sujeto, como
                medio para valorar su desempeño en el puesto de trabajo o sus posibilidades de desarrollo.
            </p>
            <p>
                La evaluación pretende conocer el rendimiento de los empleados, su conducta, sus cualidades, deficiencias,
                logros o su potencial de desarrollo, con lo cual al desarrollar este tema comprenderemos el alcance de evaluar
                las competencias de los individuos a fin de obtener información y resultados de estos.
            </p>
        </div>


        <div class="center">
        
            <h4 class="center" style="margin-top:50px">Material descargable</h4>
            
            <embed src="../descargable/TEMA 1. EVALUACION DE COMPETENCIA LABORAL.pdf" type="application/pdf" width="80%" height="500px" />

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