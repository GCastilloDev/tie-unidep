<!DOCTYPE html>
<html lang="es">

<?php
    /*
    En este archivo van lo que esta en el head, los links, title, meta datos, etc.
    */
    require_once 'includes/head.php';
?>

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
        <div class="parallax"><img style="max-width: 90%" src="img/banner-tecnicas-e-instrumentos-de-evaluacion.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="img/banner-tecnicas-e-instrumentos-de-evaluacion.jpg">
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
                <h4 class="center">Técnicas e instrumentos de evaluación</h4>
                <p>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-observacion.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Observación</h5></p>
                            <a href="tecnicas-e-instrumentos-de-evaluacion/observacion.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-entevista.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Entrevista</h5></p>
                            <a href="tecnicas-e-instrumentos-de-evaluacion/entrevista.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-encuesta.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Encuesta</h5></p>
                            <a href="tecnicas-e-instrumentos-de-evaluacion/encuesta.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-prueba.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Pruebas</h5></p>
                            <a href="tecnicas-e-instrumentos-de-evaluacion/prueba.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
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