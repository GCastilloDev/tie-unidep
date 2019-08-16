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
        <div class="parallax"><img style="max-width: 90%" src="img/banner-tests.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="img/banner-tests.jpg">
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
                <h4 class="center">Test's</h4>
                <p>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-test-domino.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Test Domino</h5></p>
                            <a href="test/test-domino.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-test-raven.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Test de Raven</h5></p>
                            <a href="test/test-de-raven.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-test-terman.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Test de Terman Merril</h5></p>
                            <a href="test/test-de-terman-merril.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-test-colores.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Test de Colores</h5></p>
                            <a href="test/test-de-colores.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-test-moss.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Test de Moss</h5></p>
                            <a href="test/test-de-moss.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-test-cleaver.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Test de Cleaver</h5></p>
                            <a href="test/test-de-cleaver.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
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