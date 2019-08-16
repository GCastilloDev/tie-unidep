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
        <div class="parallax"><img style="max-width: 90%" src="img/banner-principal-1.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="img/banner-principal-1.jpg">
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
                <h4 class="center">Resumen de la materia</h4>
                <p>
                    Las técnicas de evaluación hacen referencia a los métodos que se utilizan para la
                    obtención de información; el instrumento se refiere al recurso específico que se
                    emplea para este fin. Constituyen así un valioso medio didáctico para buscar y
                    controlar información sobre los evaluados en diferentes ámbitos.
                </p>
                <p>
                    Las técnicas e instrumentos de evaluación tienen el objetivo de recoger, analizar y juzgar
                    evidencias o
                    información sobre el aprendizaje que mantienen los sujetos de estudio, es decir sus competencias,
                    habilidades, aptitudes, motivaciones y sin fin de criterios a evaluar y dichos instrumentos nos
                    proporcionan los datos que buscamos de cada uno de ellos para ejercer acción de estas.
                </p>
                <p>
                    De manera más sencilla, las técnicas e instrumentos son en este sentido las pruebas o herramientas
                    de
                    las que se dispone para obtener información, los mecanismos de interpretación y análisis de la
                    información, es por este motivo que los instrumentos deben ser:

                    <ol>
                        <li>Flexibles y/o didácticos</li>
                        <li>Deben mantener información concreta y adecuada</li>
                        <li>Aplicables a las situaciones correspondientes, dependiendo de los criterios a evaluar</li>
                        <li>Funcionales en permitir la transferencia de aprendizaje y retroalimentación</li>

                    </ol>
                </p>
                <p>
                    Cada uno de estos instrumentos, nos permitirán recolectar información exacta para el desarrollo de
                    un
                    diagnóstico del personal, antes y durante su desempeño y el resultado de estos mismos.
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