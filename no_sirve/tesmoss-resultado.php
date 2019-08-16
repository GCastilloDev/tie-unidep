<!DOCTYPE html>
<html lang="es">

<?php
        require_once 'api/procesarTestMoss.php';
?>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Hoja de estilos propia -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Hoja de estilos de fontello -->
    <link rel="stylesheet" href="css/fontello.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TÉCNICAS E INSTRUMENTOS DE EVALUACIÓN</title>


</head>

<body style="background-color: #f7f7f7">

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    <nav>
        <div class="navbar-fixed" style="background-color: #66b9bf;">
            <a style="padding-left: 10%" href="#" class="brand-logo left hide-on-med-and-down">TÉCNICAS E INSTRUMENTOS
                DE EVALUACIÓN</a>
            <ul class="right">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Recursos</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Test's<i
                            class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>



    <div class="container">
        <div class="col s12">
            <h1 class="center">Resultado test de moss</h1>

            <table class="responsive-table">
                    <caption style="font-size: 25px; font-weight: 600;">General<caption>
                        <thead>
                    <tr>
                        <th>Aciertos</th>
                        <th>Porcentaje</th>
                        <th>Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $general; ?></td>
                            <td><?php echo $generalPorcentaje; ?>%</td>
                            <td><?php echo $generalRango; ?></td>
                        </tr>
                    </tbody>
                </table>

            <table class="responsive-table">
                <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Habilidad en supervisión<caption>
                    <thead>
                <tr>
                    <th>Aciertos</th>
                    <th>Porcentaje</th>
                    <th>Rango</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $habilidadSupervision; ?></td>
                        <td><?php echo $habilidadSupervisionPorcentaje; ?>%</td>
                        <td><?php echo $habilidadSupervisionRango; ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="responsive-table">
                <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Capacidad de decisión en relaciones
                    humanas<caption>
                    <thead>
                <tr>
                    <th>Aciertos</th>
                    <th>Porcentaje</th>
                    <th>Rango</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $capacidadDecision; ?></td>
                        <td><?php echo $capacidadDecisionPorcentaje; ?>%</td>
                        <td><?php echo $capacidadDecisionRango; ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="responsive-table">
                <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Capacidad de evaluación de
                    problemas interpersonales<caption>
                    <thead>
                <tr>
                    <th>Aciertos</th>
                    <th>Porcentaje</th>
                    <th>Rango</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $capacidadEvaluacion; ?></td>
                        <td><?php echo  $capacidadEvaluacionPorcentaje; ?>%</td>
                        <td><?php echo $capacidadEvaluacionRango; ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="responsive-table">
                <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Habilidad para establecer relaciones interpersonales<caption>
                    <thead>
                <tr>
                    <th>Aciertos</th>
                    <th>Porcentaje</th>
                    <th>Rango</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $habilidadRelaciones; ?></td>
                        <td><?php echo $habilidadRelacionesPorcentaje; ?>%</td>
                        <td><?php echo $habilidadRelacionesRango; ?></td>
                    </tr>
                </tbody>
            </table>

            <table class="responsive-table">
                    <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Sentido común y tacto en relaciones interpersonales<caption>
                        <thead>
                    <tr>
                        <th>Aciertos</th>
                        <th>Porcentaje</th>
                        <th>Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $sentidoComun; ?></td>
                            <td><?php echo $sentidoComunPorcentaje; ?>%</td>
                            <td><?php echo  $sentidoComunRango; ?></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>




    <!-- Footer -->
    <footer class="page-footer" style="padding: 0px; margin: 0px; background-color: #e98e4e">
        <div class="footer-copyright">
            <div class="container">
                Desarrollado por <a class="white-text text-lighten-3"
                    href="https://www.facebook.com/gustavo.castillonajera.31">LastShadow</a>
            </div>
        </div>
    </footer>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Inicializar los JS del proyecto -->
    <script>

        M.toast({ html: 'Bienvenido!', classes: 'rounded' });
        document.addEventListener('DOMContentLoaded', function () {
            M.AutoInit();
        })


        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });


        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
                fullWidth: true,
                indicators: true,
                noWrap: true
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems, {
                indicators: false,
                interval: 1000
            });
        });
    </script>
</body>

</html>