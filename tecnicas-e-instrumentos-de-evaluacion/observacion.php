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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-observacion.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-observacion.jpg">
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
                <h4 class="center">Observación</h4>
                <p>
                    La observación es una percepción atenta, racional, planificada y sistemática de los fenómenos relacionados con el
                    objetivo de la evaluación, la que se desarrolla en sus condiciones habituales, sin ser provocadas, con vista a
                    ofrecer una explicación sobre los aspectos a evaluar. Nos lleva al conocimiento profundo de éstos a partir del
                    registro de determinada información, la que por lo regular no se puede obtener por otros medios. Tiene como
                    finalidad describir y registrar sistemáticamente las manifestaciones de la conducta del evaluado, como resultado de
                    una constante observación del mismo.
                    
                    <br>
                    <a href="../descargable/observacion/1. FORMATO DE OBSERVACION.pdf" download class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Material de descarga</a>
        
                     
                </p>
                <p>
                    Podemos observar mediante 3 tipos de instrumentos, establecidos por:

                    <ol>
                        <li type="disc" style="font-weight:600">Registros</li>
                        <p>Como ya se estableció, la observación es uno de los instrumentos empleados usualmente, pero la misma no cubre
                            todo lo posible sino que, por el contrario, solo permite aproximarse a parte de aquello que se espera
                            evaluar. El registro de aquello que se observa permite dejar una marca de lo visto. En él se seleccionan los
                            aspectos relevantes, significativos. Como lo registrado siempre es parcial necesita ser contextuado en los
                            hechos ocurridos o por ocurrir.
                            <br>
                            <a href="../descargable/observacion/2. FORMATO DE REGISTRO.pdf" download class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Material de descarga</a>
                        </p>
                    </ol>
                    <ol>
                        <li type="disc" style="font-weight:600">Lista de cotejo</li>
                        <p>Consiste en un listado de aspectos a evaluar (contenidos, capacidades, habilidades, conductas, etc.), dichos
                            aspectos se califica, con un puntaje, una nota o un concepto. Es entendido básicamente como un instrumento
                            de verificación. Es decir, actúa como un mecanismo de revisión durante la evaluación que determina ciertos
                            indicadores prefijados y la revisión de su logro o de la ausencia del mismo.
                            <br>
                            <a href="../descargable/observacion/3. FORMATO DE LISTA DE COTEJO.pdf" download class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Material de descarga</a>
                        </p>
                    </ol>
                    <ol>
                        <li type="disc" style="font-weight:600">Escalas</li>
                        <p>Es una técnica utilizada en la observación sistemática, y consiste en un conjunto de cuestionarios que el
                            observador cumplimenta anotando las conductas que observa. El observador debe anotar la presencia de cada
                            tipo de conducta en la que está interesado en forma cuantitativa, tratando de utilizar términos que sigan
                            una serie escalonada.
                            <br>
                            <a href="../descargable/observacion/4. FORMATO DE ESCALAS.pdf" download class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Material de descarga</a>
                        </p>
                    </ol>
                </p>
            </div>


            <div class="center">
            
                <h4 class="center" style="margin-top:50px">Material descargable</h4>

                <h5>Observación</h5>
                <embed src="../descargable/observacion/1. FORMATO DE OBSERVACION.pdf" type="application/pdf" width="80%" height="500px" />

                <h5>Registro</h5>
                <embed src="../descargable/observacion/2. FORMATO DE REGISTRO.pdf" type="application/pdf" width="80%" height="500px" />

                <h5>Cotejo</h5>
                <embed src="../descargable/observacion/3. FORMATO DE LISTA DE COTEJO.pdf" type="application/pdf" width="80%" height="500px" />

                <h5>Escalas</h5>
                <embed src="../descargable/observacion/4. FORMATO DE ESCALAS.pdf" type="application/pdf" width="80%" height="500px" />
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