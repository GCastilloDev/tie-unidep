<!DOCTYPE html>
<html lang="es">

<?php
    require_once '../api/procesarTestCleaver.php';
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
                <h4 class="center">Test de Cleaver - Resultado</h4>

                <div class="row col s12" style="margin-bottom: 20px">
                    <table class="striped">
                        <caption style="font-size: 25px; font-weight: 600;">General<caption>
                            <thead>
                        <tr>
                            <th class="center"></th>
                            <th class="center">D</th>
                            <th class="center">I</th>
                            <th class="center">S</th>
                            <th class="center">C</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center"><b>M</b></td>
                                <td class="center"><?php echo $d_mas; ?></td>
                                <td class="center"><?php echo $i_mas; ?></td>
                                <td class="center"><?php echo $s_mas; ?></td>
                                <td class="center"><?php echo $c_mas; ?></td>
                            </tr>
                            <tr>
                                <td class="center"><b>L</b></td>
                                <td class="center"><?php echo $d_menos; ?></td>
                                <td class="center"><?php echo $i_menos; ?></td>
                                <td class="center"><?php echo $s_menos; ?></td>
                                <td class="center"><?php echo $c_menos; ?></td>
                            </tr>
                            <tr>
                                <td class="center"><b>TOTAL</b></td>
                                <td class="center"><?php echo $d_total; ?></td>
                                <td class="center"><?php echo $i_total; ?></td>
                                <td class="center"><?php echo $s_total; ?></td>
                                <td class="center"><?php echo $c_total; ?></td>
                            </tr>
                        </tbody>
                    </table>    
                </div>  
                
                <div class="row">
                    <div class="container">
                        <h4 class="center" style="margin-top:100px">Gráfica total</h4>
                        <div class="col s12">
                            <div id="grafica_total"></div>
                            <p class="center">
                                <b>
                                    <?php echo obtenerLetraMayor($d_total, $i_total, $s_total, $c_total); ?>
                                    /
                                    <?php echo obtenerLetraMenor($d_total, $i_total, $s_total, $c_total); ?>
                                </b>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col l12">
                                        
                                        <?php
                                        $temporal = obtenerMatrizBasica(obtenerLetraMayor($d_total, $i_total, $s_total, $c_total), obtenerLetraMenor($d_total, $i_total, $s_total, $c_total));
                                        $count = count($temporal);
                                        ?>

                                        <p>
                                            <h5 class="center"><b>Interpretación (<?php echo obtenerLetraMayor($d_total, $i_total, $s_total, $c_total); ?>/<?php echo obtenerLetraMenor($d_total, $i_total, $s_total, $c_total); ?>)</b></h5>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Matriz de combinaciones básicas del comportamiento:</b></h6>
                                            <ol>
                                                <?php for ($i = 0; $i < $count; ++$i) {
                                            echo '<li>';
                                            echo $temporal[$i].'<br>';
                                            echo '</li>';
                                        }
                                                ?>
                                            </ol>
                                        </p>

                                        <?php
                                        $temporal = obtenerInterpretacion(obtenerLetraMayor($d_total, $i_total, $s_total, $c_total), obtenerLetraMenor($d_total, $i_total, $s_total, $c_total));
                                        $count = count($temporal);
                                        ?>                                                       

                                        <p>
                                            <h6 class="center"><b>Caracteristica:</b></h6>
                                            <?php
                                            echo $temporal[0];
                                            ?>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Factor Humano (F.H.):</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo $temporal[1];
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Factores humanos en la percepción del puesto:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            $aux = factoresHumanosAlta(obtenerLetraMayor($d_total, $i_total, $s_total, $c_total));
                                            $contador = count($aux);

                                            echo '<p style="text-align: justify">';
                                            echo $aux[0];
                                            echo '<ol>';
                                            for ($i = 1; $i < $contador; ++$i) {
                                                echo '<li>';
                                                echo $aux[$i];
                                                echo '</li>';
                                            }
                                            echo '</ol>';
                                            echo '</p>';

                                            $aux = factoresHumanosBaja(obtenerLetraMenor($d_total, $i_total, $s_total, $c_total));
                                            $contador = count($aux);

                                            echo '<p style="text-align: justify">';
                                            echo $aux[0];
                                            echo '<ol>';
                                            for ($i = 1; $i < $contador; ++$i) {
                                                echo '<li>';
                                                echo $aux[$i];
                                                echo '</li>';
                                            }
                                            echo '</ol>';
                                            echo '</p>';
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Características sobresalientes alta:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo caracteristicasSobresalientesAlta(obtenerLetraMayor($d_total, $i_total, $s_total, $c_total));
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Características sobresalientes baja:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo caracteristicasSobresalientesBaja(obtenerLetraMenor($d_total, $i_total, $s_total, $c_total));
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Claves para la motivación (alta):</b></h6>
                                        <p class="center">DESEA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMayor($d_total, $i_total, $s_total, $c_total);
                                                $desea = clavesMotivacionDesea($letra, 1);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p class="center">NECESITA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMayor($d_total, $i_total, $s_total, $c_total);
                                                $desea = clavesMotivacionNecesita($letra, 1);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Claves para la motivación (baja):</b></h6>
                                        <p class="center">DESEA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMenor($d_total, $i_total, $s_total, $c_total);
                                                $desea = clavesMotivacionDesea($letra, 0);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p class="center">NECESITA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMenor($d_total, $i_total, $s_total, $c_total);
                                                $desea = clavesMotivacionNecesita($letra, 0);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Posibles limitaciones (alta)</b></h6>
                                            <p class="center">Bajo presión la persona tiende a:</p>
                                            <ol>
                                                    <?php
                                                    $letra = obtenerLetraMayor($d_total, $i_total, $s_total, $c_total);
                                                    $aux = posiblesLimitacionesAlta($letra);
                                                    $limite = count($aux);

                                                    for ($i = 0; $i < $limite; ++$i) {
                                                        echo '<li>';
                                                        echo $aux[$i];
                                                        echo '</li>';
                                                    }
                                                    ?>
                                            </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Posibles limitaciones (baja)</b></h6>
                                            <p class="center">Bajo presión la persona tiende a:</p>
                                            <ol>
                                                    <?php
                                                    $letra = obtenerLetraMenor($d_total, $i_total, $s_total, $c_total);
                                                    $aux = posiblesLimitacionesBaja($letra);
                                                    $limite = count($aux);

                                                    for ($i = 0; $i < $limite; ++$i) {
                                                        echo '<li>';
                                                        echo $aux[$i];
                                                        echo '</li>';
                                                    }
                                                    ?>
                                            </ol>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Auto Descripción (A.D.):</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo $temporal[2];
                                            ?>
                                            </p>
                                        </p>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        <h4 class="center">Gráfica M</h4>
                            <div class="col s12">
                                <div id="grafica_m">                                
                                </div>
                                <p class="center">
                                    <b>
                                        <?php echo obtenerLetraMayor($d_mas, $i_mas, $s_mas, $c_mas); ?>
                                        /
                                        <?php echo obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas); ?>
                                    </b>
                                </p>
                                <p>
                                <div class="row">
                                    <div class="col l12">
                                        
                                        <?php
                                        $temporal = obtenerMatrizBasica(obtenerLetraMayor($d_mas, $i_mas, $s_mas, $c_mas), obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas));
                                        $count = count($temporal);
                                        ?>

                                        <p>
                                            <h5 class="center"><b>Interpretación (<?php echo obtenerLetraMayor($d_mas, $i_mas, $s_mas, $c_mas); ?>/<?php echo obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas); ?>)</b></h5>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Matriz de combinaciones básicas del comportamiento:</b></h6>
                                            <ol>
                                                <?php for ($i = 0; $i < $count; ++$i) {
                                            echo '<li>';
                                            echo $temporal[$i].'<br>';
                                            echo '</li>';
                                        }
                                                ?>
                                            </ol>
                                        </p>

                                        <?php
                                        $temporal = obtenerInterpretacion(obtenerLetraMayor($d_mas, $i_mas, $s_mas, $c_mas), obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas));
                                        $count = count($temporal);
                                        ?>                                                       

                                        <p>
                                            <h6 class="center"><b>Caracteristica:</b></h6>
                                            <?php
                                            echo $temporal[0];
                                            ?>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Factor Humano (F.H.):</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo $temporal[1];
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Factores humanos en la percepción del puesto:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            $aux = factoresHumanosAlta(obtenerLetraMayor($d_mas, $i_mas, $s_mas, $c_mas));
                                            $contador = count($aux);

                                            echo '<p style="text-align: justify">';
                                            echo $aux[0];
                                            echo '<ol>';
                                            for ($i = 1; $i < $contador; ++$i) {
                                                echo '<li>';
                                                echo $aux[$i];
                                                echo '</li>';
                                            }
                                            echo '</ol>';
                                            echo '</p>';

                                            $aux = factoresHumanosBaja(obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas));
                                            $contador = count($aux);

                                            echo '<p style="text-align: justify">';
                                            echo $aux[0];
                                            echo '<ol>';
                                            for ($i = 1; $i < $contador; ++$i) {
                                                echo '<li>';
                                                echo $aux[$i];
                                                echo '</li>';
                                            }
                                            echo '</ol>';
                                            echo '</p>';
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Características sobresalientes alta:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo caracteristicasSobresalientesAlta(obtenerLetraMayor($d_mas, $i_mas, $s_mas, $c_mas));
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Características sobresalientes baja:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo caracteristicasSobresalientesBaja(obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas));
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Claves para la motivación (alta):</b></h6>
                                        <p class="center">DESEA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMayor($d_total, $i_total, $s_total, $c_total);
                                                $desea = clavesMotivacionDesea($letra, 1);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p class="center">NECESITA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMayor($d_total, $i_total, $s_total, $c_total);
                                                $desea = clavesMotivacionNecesita($letra, 1);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Claves para la motivación (baja):</b></h6>
                                        <p class="center">DESEA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas);
                                                $desea = clavesMotivacionDesea($letra, 0);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p class="center">NECESITA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas);
                                                $desea = clavesMotivacionNecesita($letra, 0);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Posibles limitaciones (alta)</b></h6>
                                            <p class="center">Bajo presión la persona tiende a:</p>
                                            <ol>
                                                    <?php
                                                    $letra = obtenerLetraMayor($d_mas, $i_mas, $s_mas, $c_mas);
                                                    $aux = posiblesLimitacionesAlta($letra);
                                                    $limite = count($aux);

                                                    for ($i = 0; $i < $limite; ++$i) {
                                                        echo '<li>';
                                                        echo $aux[$i];
                                                        echo '</li>';
                                                    }
                                                    ?>
                                            </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Posibles limitaciones (baja)</b></h6>
                                            <p class="center">Bajo presión la persona tiende a:</p>
                                            <ol>
                                                    <?php
                                                    $letra = obtenerLetraMenor($d_mas, $i_mas, $s_mas, $c_mas);
                                                    $aux = posiblesLimitacionesBaja($letra);
                                                    $limite = count($aux);

                                                    for ($i = 0; $i < $limite; ++$i) {
                                                        echo '<li>';
                                                        echo $aux[$i];
                                                        echo '</li>';
                                                    }
                                                    ?>
                                            </ol>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Auto Descripción (A.D.):</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo $temporal[2];
                                            ?>
                                            </p>
                                        </p>
                                    </div>
                                </div>
                                </p>
                            </div>
                    </div>
                    <div class="container">
                        <h4 class="center">Gráfica L</h4>
                        <div class="col s12">
                            <div id="grafica_l"></div>
                            <p class="center">
                                    <b>
                                        <?php echo obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos); ?>
                                        /
                                        <?php echo obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos); ?>                                        
                                    </b>
                                </p>
                                <!-- EMPIEZA INTERPRETACIÓN -->
                                <p>
                                <div class="row">
                                    <div class="col l12">
                                        
                                        <?php
                                        $temporal = obtenerMatrizBasica(obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos), obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos));
                                        $count = count($temporal);
                                        ?>

                                        <p>
                                            <h5 class="center"><b>Interpretación (<?php echo obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos); ?>/<?php echo obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos); ?>)</b></h5>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Matriz de combinaciones básicas del comportamiento:</b></h6>
                                            <ol>
                                                <?php for ($i = 0; $i < $count; ++$i) {
                                            echo '<li>';
                                            echo $temporal[$i].'<br>';
                                            echo '</li>';
                                        }
                                                ?>
                                            </ol>
                                        </p>

                                        <?php
                                        $temporal = obtenerInterpretacion(obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos), obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos));
                                        $count = count($temporal);
                                        ?>                                                       

                                        <p>
                                            <h6 class="center"><b>Caracteristica:</b></h6>
                                            <?php
                                            echo $temporal[0];
                                            ?>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Factor Humano (F.H.):</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo $temporal[1];
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Factores humanos en la percepción del puesto:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            $aux = factoresHumanosAlta(obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos));
                                            $contador = count($aux);

                                            echo '<p style="text-align: justify">';
                                            echo $aux[0];
                                            echo '<ol>';
                                            for ($i = 1; $i < $contador; ++$i) {
                                                echo '<li>';
                                                echo $aux[$i];
                                                echo '</li>';
                                            }
                                            echo '</ol>';
                                            echo '</p>';

                                            $aux = factoresHumanosBaja(obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos));
                                            $contador = count($aux);

                                            echo '<p style="text-align: justify">';
                                            echo $aux[0];
                                            echo '<ol>';
                                            for ($i = 1; $i < $contador; ++$i) {
                                                echo '<li>';
                                                echo $aux[$i];
                                                echo '</li>';
                                            }
                                            echo '</ol>';
                                            echo '</p>';
                                            ?>
                                            </p>
                                        <p>
                                        <p>
                                            <h6 class="center"><b>Características sobresalientes alta:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo caracteristicasSobresalientesAlta(obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos));
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Características sobresalientes baja:</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo caracteristicasSobresalientesBaja(obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos));
                                            ?>
                                            </p>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Claves para la motivación (alta):</b></h6>
                                        <p class="center">DESEA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos);
                                                $desea = clavesMotivacionDesea($letra, 1);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p class="center">NECESITA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos);
                                                $desea = clavesMotivacionNecesita($letra, 1);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Claves para la motivación (baja):</b></h6>
                                        <p class="center">DESEA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos);
                                                $desea = clavesMotivacionDesea($letra, 0);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p class="center">NECESITA:</p>
                                        <ol>
                                            <?php
                                                $letra = obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos);
                                                $desea = clavesMotivacionNecesita($letra, 0);
                                                $limite = count($desea);

                                                for ($i = 0; $i < $limite; ++$i) {
                                                    echo '<li>';
                                                    echo $desea[$i];
                                                    echo '</li>';
                                                }
                                            ?>
                                        </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Posibles limitaciones (alta)</b></h6>
                                            <p class="center">Bajo presión la persona tiende a:</p>
                                            <ol>
                                                    <?php
                                                    $letra = obtenerLetraMenor($d_menos, $i_menos, $s_menos, $c_menos);
                                                    $aux = posiblesLimitacionesAlta($letra);
                                                    $limite = count($aux);

                                                    for ($i = 0; $i < $limite; ++$i) {
                                                        echo '<li>';
                                                        echo $aux[$i];
                                                        echo '</li>';
                                                    }
                                                    ?>
                                            </ol>
                                        </p>
                                        <p>
                                        <h6 class="center"><b>Posibles limitaciones (baja)</b></h6>
                                            <p class="center">Bajo presión la persona tiende a:</p>
                                            <ol>
                                                    <?php
                                                    $letra = obtenerLetraMayor($d_menos, $i_menos, $s_menos, $c_menos);
                                                    $aux = posiblesLimitacionesBaja($letra);
                                                    $limite = count($aux);

                                                    for ($i = 0; $i < $limite; ++$i) {
                                                        echo '<li>';
                                                        echo $aux[$i];
                                                        echo '</li>';
                                                    }
                                                    ?>
                                            </ol>
                                        </p>
                                        <p>
                                            <h6 class="center"><b>Auto Descripción (A.D.):</b></h6>
                                            <p style="text-align: justify">
                                            <?php
                                            echo $temporal[2];
                                            ?>
                                            </p>
                                        </p>
                                    </div>
                                </div>                                                            
                                </p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
        
    </div>



   <!-- Footer -->
   <?php
    require_once 'includes/footer.php';
   ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JS GRAFICAS GOOGLE -->
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>

    <!-- JS propios -->
    <script src="../js/validaciones.js"></script>

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

    <script type='text/javascript'>

    google.charts.load('current', { 'packages': ['line'] });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = new google.visualization.DataTable();
                data.addColumn('string', '');
                data.addColumn('number', 'Resultado');

                data.addRows([
                    ['D', <?php echo $d_total; ?>],
                    ['I', <?php echo $i_total; ?>],
                    ['S', <?php echo $s_total; ?>],
                    ['C', <?php echo $c_total; ?>]
                ]);

                var options = {
                    vAxis: {
                        direction: '-1'
                    },  
                    series: {
                        0: { color: '#003a5c' }
                    },
                    width: '100%',
                    height: 300,
                    backgroundColor: '#f7f7f7',
                  
                };

                var chart = new google.charts.Line(document.getElementById('grafica_total'));

                chart.draw(data, google.charts.Line.convertOptions(options));
            }
    </script>

    <script type='text/javascript'>

    google.charts.load('current', { 'packages': ['line'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', '');
        data.addColumn('number', 'Resultado');

        data.addRows([
            ['D', <?php echo $d_mas; ?>],
            ['I', <?php echo $i_mas; ?>],
            ['S', <?php echo $s_mas; ?>],
            ['C', <?php echo $c_mas; ?>]
        ]);

        var options = {
            vAxis: {
                direction: '-1'
            },  
            series: {
                0: { color: '#003a5c' }
            },
            width: '100%',
            height: 300,
            backgroundColor: '#f7f7f7',
        
        };

        var chart = new google.charts.Line(document.getElementById('grafica_m'));

        chart.draw(data, google.charts.Line.convertOptions(options));
    }
    </script>

    <script type='text/javascript'>

    google.charts.load('current', { 'packages': ['corechart','line'] });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', '');
    data.addColumn('number', '');

    data.addRows([
        ['D', <?php echo $d_menos; ?>],
        ['I', <?php echo $i_menos; ?>],
        ['S', <?php echo $s_menos; ?>],
        ['C', <?php echo $c_menos; ?>]
    ]);

    var options = {
        vAxis: {
        direction: '-1'
        },
        series: {
        0: { color: '#003a5c' }
        },
        width: '500%',
        height: 300,
        backgroundColor: '#f7f7f7',

    };

    var chart = new google.visualization.LineChart(document.getElementById('grafica_l'));

    chart.draw(data, options);
    }
    </script>
    



</body>

</html>

