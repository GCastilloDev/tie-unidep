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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-test-domino.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-test-domino.jpg">
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
                <h4 class="center">Test Domino</h4>
                <p>
                    <h5>Instrucciones:</h5>
                    Selecciona la figura que le corresponde a la serie.
                </p>
                <p>
                    <h5>Material de descarga:</h5>
                    <div class="col s12 center">
                    <p class="center">
                    <b>Manual:</b>
                    </p>
                    <a href="../descargable/manuales/Domino - Manual de Aplicacion-Interpretacion (Completo).pdf" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Descarga</a>
                    </div>
                </p>
                <div class="col s12">
                <p class="red-text" style="font-weight: 600">
                    Debe responder todas las preguntas para poder obtener un resultado.
                </p>
                </div>
                
                <!-- PREGUNTAS TEST DOMINO -->
                <p>
                <form action="test-domino-resultado.php" method="POST">

                    <div class="row">
                        <div class="col s5">
                        Ingresa tu edad:
                        </div>
                        
                        <div class="input-field col s2">
                        <input type="number" min="12" max="65" class="validate" name="0" required>
                        </div>
                    </div>    

                    <ol>
                    <?php
                        $i = 1;
                        while ($i <= 48) {
                            imprimirTest($i);
                            //echo $i.'<br>';
                            ++$i;
                        }
                    ?>       
                    </ol>

                    <button class="btn-small waves-effect waves-light brown darken-3 right" type="submit" name="action">
                    <i class="material-icons right">send</i>ENVIAR</button>
                  
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