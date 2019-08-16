<!DOCTYPE html>
<html lang="es">

<?php
        require_once '../api/procesarTestRaven.php';
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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-resultado.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-resultado.jpg">
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
                <h4 class="center">Test de Raven - Resultados</h4>
              
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Edad:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $edad;
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Serie A:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $serieA;
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Serie B:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $serieB;
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Serie C:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $serieC;
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Serie D:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $serieD;
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Serie E:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $serieE;
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Total:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $total;
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Discrepancia:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo obtenerDiscrepancia($total, $serieA, $serieB, $serieC, $serieD, $serieE);
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Percentil:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo obtenerPercentil($edad, $total);
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Rango:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $aux[0];
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <p class="right-align">
                        Diagnóstico:
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                        <?php
                        echo $aux[1];
                        ?>
                        </p>
                    </div>
                </div>

                <p class="right">
                <a href="test-de-raven.php" class="waves-effect waves-light btn-small brown darken-3"><i class="material-icons right">reply</i>REGRESAR</a>
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