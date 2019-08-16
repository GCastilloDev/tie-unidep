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
        <div class="parallax"><img style="max-width: 90%" src="img/banner-perfil-descriptivo.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="img/banner-perfil-descriptivo.jpg">
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
                <h4 class="center">Perfil descriptivo</h4>
                <p>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-competencia-laboral.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Tema 1: Evaluación de competencia laboral.</h5></p>
                            <a href="perfil-descriptivo/tema-1.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-instrumentos-evaluacion.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Tema 2: Selección de las técnicas e instrumentos de evaluación.</h5></p>
                            <a href="perfil-descriptivo/tema-2.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-contenidos-evaluacion.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Tema 3: Identificación de los contenidos de evaluación.</h5></p>
                            <a href="perfil-descriptivo/tema-3.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-plan-evaluacion.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Tema 4: Estructura de un plan de evaluación.</h5></p>
                            <a href="perfil-descriptivo/tema-4.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-evidencia.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Tema 5: Comprobación de la autenticidad de la evidencia histórica presentada por el candidato.</h5></p>
                            <a href="perfil-descriptivo/tema-5.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/banner-registro-evidencias.jpg">
                            </div>
                            <div class="card-content grey lighten-4">
                            <p><h5>Tema 6: Como registrar la contrastación de las evidencias recopiladas contra UCL.</h5></p>
                            <a href="perfil-descriptivo/tema-6.php" class="btn-floating halfway-fab waves-effect waves-light " style="background: #003a5c"><i class="material-icons">launch</i></a>
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