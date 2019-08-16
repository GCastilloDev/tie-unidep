<!DOCTYPE html>
<html lang="es">

<?php
        require_once '../api/procesarTestColores.php';
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
                <h4 class="center">Test de Colores - Resultado</h4>
                <h5 class="center"><b>Diagnóstico</b></h5>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <p><b>Color:</b> <?php echo $a[0] ?>
                    </p>
                    <p><b>Diagnóstico:</b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $a[1] ?>
                    </blockquote>
                </div>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <b>Color: </b> <?php echo $b[0] ?>
                    </p>
                    <p><b>Diagnóstico:</b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $b[1] ?>
                    </blockquote>
                </div>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <b>Color: </b> <?php echo $c[0] ?>
                    </p>
                    <p><b>Diagnóstico:</b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $c[1] ?>
                    </blockquote>
                </div>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <b>Color: </b> <?php echo $d[0] ?>
                    </p>
                    <p><b>Diagnóstico:</b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $d[1] ?>
                    </blockquote>
                </div>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <b>Color: </b> <?php echo $e[0] ?>
                    </p>
                    <p><b>Diagnóstico:</b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $e[1] ?>
                    </blockquote>
                </div>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <b>Color: </b> <?php echo $f[0] ?>
                    </p>
                    <p><b>Diagnóstico:</b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $f[1] ?>
                    </blockquote>
                </div>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <b>Color: </b> <?php echo $g[0] ?>
                    </p>
                    <p><b><?php echo $g[1] ?></b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $g[2] ?>
                    </blockquote>
                    <p><b><?php echo $g[3] ?></b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $g[4] ?>
                    </blockquote>
                    <p><b><?php echo $g[5] ?></b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $g[6] ?>
                    </blockquote>
                </div>
                <div class="row col s12 blue-grey lighten-5">
                    <p>
                    <b>Color: </b> <?php echo $h[0] ?>
                    </p>
                    <p><b><?php echo $h[1] ?></b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $h[2] ?>
                    </blockquote>
                    <p><b><?php echo $h[3] ?></b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $h[4] ?>
                    </blockquote>
                    <p><b><?php echo $h[5] ?></b></p>
                    <blockquote class="justify-aling" style="border-left: 5px solid #efa33f">
                    <?php echo $h[6] ?>
                    </blockquote>
                </div>

                <p class="right">
                <a href="test-de-colores.php" class="waves-effect waves-light btn-small brown darken-3"><i class="material-icons right">reply</i>REGRESAR</a>
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