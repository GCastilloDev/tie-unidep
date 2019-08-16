<!DOCTYPE html>
<html lang="es">

<?php
        require_once '../api/procesarTestMoss.php';
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
                <h4 class="center">Test de Moss - Resultado</h4>
              
                <div class="row col s12">
                <table class="centered">
                    <caption style="font-size: 25px; font-weight: 600;">General<caption>
                    <thead>
                    <tr>
                        <th >Aciertos</th>
                        <th >Porcentaje</th>
                        <th >Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td ><?php echo $general; ?></td>
                            <td ><?php echo $generalPorcentaje; ?>%</td>
                            <td ><?php echo $generalRango; ?></td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <table >
                    <caption style="font-size: 25px; font-weight: 600;">Habilidad en supervisión<caption>
                        <thead>
                    <tr>
                        <th class="center">Aciertos</th>
                        <th class="center">Porcentaje</th>
                        <th class="center">Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><?php echo $habilidadSupervision; ?></td>
                            <td class="center"><?php echo $habilidadSupervisionPorcentaje; ?>%</td>
                            <td class="center"><?php echo $habilidadSupervisionRango; ?></td>
                        </tr>
                    </tbody>
                </table>

                <table >
                    <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Capacidad de decisión en relaciones
                        humanas<caption>
                        <thead>
                    <tr>
                        <th class="center">Aciertos</th>
                        <th class="center">Porcentaje</th>
                        <th class="center">Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><?php echo $capacidadDecision; ?></td>
                            <td class="center"><?php echo $capacidadDecisionPorcentaje; ?>%</td>
                            <td class="center"><?php echo $capacidadDecisionRango; ?></td>
                        </tr>
                    </tbody>
                </table>

                <table >
                    <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Capacidad de evaluación de
                        problemas interpersonales<caption>
                        <thead>
                    <tr>
                        <th class="center">Aciertos</th>
                        <th class="center">Porcentaje</th>
                        <th class="center">Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><?php echo $capacidadEvaluacion; ?></td>
                            <td class="center"><?php echo  $capacidadEvaluacionPorcentaje; ?>%</td>
                            <td class="center"><?php echo $capacidadEvaluacionRango; ?></td>
                        </tr>
                    </tbody>
                </table>

                <table >
                    <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Habilidad para establecer relaciones interpersonales<caption>
                        <thead>
                    <tr>
                        <th class="center">Aciertos</th>
                        <th class="center">Porcentaje</th>
                        <th class="center">Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><?php echo $habilidadRelaciones; ?></td>
                            <td class="center"><?php echo $habilidadRelacionesPorcentaje; ?>%</td>
                            <td class="center"><?php echo $habilidadRelacionesRango; ?></td>
                        </tr>
                    </tbody>
                </table>

                <table >
                    <caption style="font-size: 25px; font-weight: 600; margin-top:50px;">Sentido común y tacto en relaciones interpersonales<caption>
                        <thead>
                    <tr>
                        <th class="center">Aciertos</th>
                        <th class="center">Porcentaje</th>
                        <th class="center">Rango</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><?php echo $sentidoComun; ?></td>
                            <td class="center"><?php echo $sentidoComunPorcentaje; ?>%</td>
                            <td class="center"><?php echo  $sentidoComunRango; ?></td>
                        </tr>
                    </tbody>
                </table>

                <p class="right">
                <a href="test-de-moss.php" class="waves-effect waves-light btn-small brown darken-3"><i class="material-icons right">reply</i>REGRESAR</a>
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