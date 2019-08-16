<?php
        require_once '../api/procesarTestTerman.php';
?>
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
                <h4 class="center">Test de Terman Merril - Resultado</h4>

                <div class="row" style="margin-top: 4em">

                    <p>
                    <h5 class="center-align">Puntaje de las series</h5>
                    </p>

                    <p class="center-align">
                    <b>Puntaje total: <?php echo $total; ?></b>
                    </p>

                    <div class="col s12">
                    <table class="centered striped">
                        <thead>
                        <tr>
                            <th>Serie</th>
                            <th>Puntaje</th>
                            <th>Rango</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>I</td>
                            <td><?php echo $serieI; ?></td> 
                            <td><?php echo obtenerRangoSerieI($serieI); ?></td>                           
                        </tr>
                        <tr>
                            <td>II</td>
                            <td><?php echo $serieII; ?></td>    
                            <td><?php echo obtenerRangoSerieI($serieII); ?></td>                         
                        </tr>
                        <tr>
                            <td>III</td>
                            <td><?php echo $serieIII; ?></td> 
                            <td><?php echo obtenerRangoSerieI($serieIII); ?></td>                            
                        </tr>
                        <tr>
                            <td>IV</td>
                            <td><?php echo $serieIV; ?></td>  
                            <td><?php echo obtenerRangoSerieI($serieIV); ?></td>                           
                        </tr>
                        <tr>
                            <td>V</td>
                            <td><?php echo $serieV; ?></td> 
                            <td><?php echo obtenerRangoSerieI($serieV); ?></td>                            
                        </tr>
                        <tr>
                            <td>VI</td>
                            <td><?php echo $serieVI; ?></td>  
                            <td><?php echo obtenerRangoSerieI($serieVI); ?></td>                           
                        </tr>
                        <tr>
                            <td>VII</td>
                            <td><?php echo $serieVII; ?></td>  
                            <td><?php echo obtenerRangoSerieI($serieVII); ?></td>                           
                        </tr>
                        <tr>
                            <td>VIII</td>
                            <td><?php echo $serieVIII; ?></td>  
                            <td><?php echo obtenerRangoSerieI($serieVIII); ?></td>                           
                        </tr>
                        <tr>
                            <td>IX</td>
                            <td><?php echo $serieIX; ?></td> 
                            <td><?php echo obtenerRangoSerieI($serieIX); ?></td>                            
                        </tr>
                        <tr>
                            <td>X</td>
                            <td><?php echo $serieX; ?></td> 
                            <td><?php echo obtenerRangoSerieI($serieX); ?></td>                            
                        </tr>
                        </tbody>
                    </table>
                    </div>                  


                    <div class="col s12">

                    <p>
                    <h5 class="center-align">Tabla de C.I. y Capacidad de aprendizaje</h5>
                    </p>

                    <table class="centered striped">
                        <thead>
                        <tr>
                            <th>C.I.</th>
                            <th>Clasificación C.I.</th>
                            <th>Capacidad de aprendizaje</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                            <?php
                             $aux = obtenerCI($total);

                             if ($aux == -1) {
                                 echo '-';
                             } else {
                                 echo $aux;
                             }

                             ?></td>
                            <td>
                                <?php
                                echo obtenerClasificacionCI($aux);
                                ?></td> 
                            <td><?php echo obtenerCapacidadAprendizaje($total); ?></td>                           
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>


                <div class="col s12">
                    <p>
                    <h5 class="center-align">Diagnóstico</h5>
                    </p>
                    <!-- SERIE I -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(1, $serieI);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div> 
                    <!-- SERIE II -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(2, $serieII);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>   
                    <!-- SERIE III -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(3, $serieIII);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>
                    <!-- SERIE IV -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(4, $serieIV);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>   
                    <!-- SERIE V -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(5, $serieV);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>  
                    <!-- SERIE VI -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(6, $serieVI);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>   
                    <!-- SERIE VII -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(7, $serieVII);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>      
                    <!-- SERIE VIII -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(8, $serieVIII);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>  
                    <!-- SERIE IX -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(9, $serieIX);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>    
                    <!-- SERIE X -->
                    <div class="col s12">
                    <p>
                        <?php
                            $resultado = obtenerDiagnostico(10, $serieX);
                        ?>
                        <h6 class="center-align">Área: <?php echo '<b>'.$resultado[0].'</b>' ?></h6> 
                    </p>
                    <p>
                        <?php echo $resultado[1] ?>
                    </p>           
                    </div>                                                        
                </div>             

                

                <p class="right">
                <a href="test-de-terman-merril.php" class="waves-effect waves-light btn-small brown darken-3"><i class="material-icons right">reply</i>REGRESAR</a>
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