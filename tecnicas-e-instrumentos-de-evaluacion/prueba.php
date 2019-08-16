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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-prueba.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-prueba.jpg">
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
                <h4 class="center">Pruebas</h4>
                <p>
                    Las pruebas son instrumentos de evaluación que miden las fortalezas o debilidades particulares de los evaluados,
                    detectan necesidades de mejoras, identifican factores que impactan en el desempeño y observan cambios o progresos en
                    los mismos.
                </p>
                <p>
                    Esta técnica de evaluación es muy útil e importante para el evaluador puesto que permite recoger información de las
                    destrezas cognitivas, dependiendo de la prueba que se desempeñe y los aspectos a evaluar.
                </p>
                <p>
                    Los datos suelen obtenerse mediante el uso de procedimientos estandarizados, esto con la finalidad de que cada
                    persona encuestada responda las preguntas en una igualdad de condiciones para evitar opiniones sesgadas que pudieran
                    influir en el resultado de la investigación o estudio. Una encuesta implica solicitar a las personas información a
                    través de un cuestionario.
                    <ol>
                        <li type="disc" style="font-weight:600">Escritas</li>
                        <p>
                            La prueba escrita es un instrumento de medición cuyo propósito es que el evaluado demuestre diversas
                            características de su aprendizaje, o el desarrollo progresivo de una destreza o habilidad. Por sus
                            características, requiere contestación escrita por parte del mismo.
                            <br>
                            <a href="../descargable/prueba/7. FORMATO DE PRUEBA ESCRITA.pdf" download
                            class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Material
                            de descarga</a>
                        </p>
                    </ol>
                    <ol>
                        <li type="disc" style="font-weight:600">Orales</li>
                        <p>
                            El examen oral es un tipo de interacción, mediante la cual se busca acreditar el conocimiento o desempeño
                            sobre un tema determinado. Las pruebas orales constituyen uno de los procedimientos evaluativos más
                            accesibles al evaluador, principalmente en lo que respecta a su facilidad de medios, por cuanto lo único que
                            se requiere es la interacción evaluador-evaluado.
                        </p>
                    </ol>
                    <ol>
                        <li type="disc" style="font-weight:600">Psicométricas</li>
                        <p>
                            Una prueba psicométrica puede ser definida como cualquier actividad que se realice con el fin de evaluar el
                            desempeño de un individuo. En estas pruebas se miden diferencias entre individuos o las reacciones de los
                            individuos en situaciones diferentes. Es un instrumento experimental que tiene por objeto medir o evaluar
                            una característica psicológica específica, o los rasgos generales de la personalidad de un individuo.
                        </p>
                    </ol>
                </p>
                <p>
                        Estas evalúan habilidades, conocimientos, aptitudes psíquicas, comportamientos, rasgos de personalidad y capacidades del individuo.                       
                </p>
            </div>


            <div class="center">
            
                <h4 class="center" style="margin-top:50px">Material descargable</h4>

                <h5>Prueba escrita</h5>
                <embed src="../descargable/prueba/7. FORMATO DE PRUEBA ESCRITA.pdf" type="application/pdf" width="80%" height="500px" />

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