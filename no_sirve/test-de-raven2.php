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
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
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
<div class="parallax-container">
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-test-moss.jpg"></div>
</div>

    <div class="row">

        <!-- Menú expandible izquierdo -->
        <div class="col s3">
            <?php
                /*
                Menu expandible lado izquierdo
                */
                require_once 'includes/menu-izquierdo.php';
            ?>
        </div>

        <!-- Contenido de la página -->
        <div class="col s9">
            <div class="container">
                <h4 class="center">Test de Raven</h4>
                <p>
                    <h5>Instrucciones:</h5>
                    Selecciona la figura que le corresponde a la serie.
                </p>
                <p class="red-text" style="font-weight: 600">
                    Debe responder todas las preguntas para poder obtener un resultado.
                </p>
                
                <!-- PREGUNTAS TEST DE RAVEN -->
                <p>
                <form action="test-de-moss-resultado.php" method="POST">
                    <ol>
                        <!-- PREGUNTA 1 -->
                        <div class="row">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 2 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 3 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 4 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 5 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                         <!-- PREGUNTA 6 -->
                         <div class="row">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 7 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 8 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 9 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 10 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                         <!-- PREGUNTA 11 -->
                         <div class="row">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 12 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 13 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 14 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 15 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                                                <!-- PREGUNTA 1 -->
                        <div class="row">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 2 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 3 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 4 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 5 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                         <!-- PREGUNTA 6 -->
                         <div class="row">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 7 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 8 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 9 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 10 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                         <!-- PREGUNTA 11 -->
                         <div class="row">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 12 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 13 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 14 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 15 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 16 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                         <!-- PREGUNTA 17 -->
                         <div class="row">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 18 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 19 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 20 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                        <!-- PREGUNTA 21 -->
                        <div class="row" style="margin-top: 50px">
                            <li>
                                <div class="col l7">                                
                                    <img src="../img/raven/1.png" class="materialboxed" style="max-width: 75%;" alt="">
                                </div>
                                <div class="col l5">
                                    <p>
                                        ¿Cuál es la pieza que encaja en la serie?
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>3</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>4</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>5</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="group1" type="radio" />
                                            <span>6</span>
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </div>
                    </ol>
                  
                </form>

                </p>
                   
            </div>

        </div>       
    </div>



   <!-- Footer -->
   <?php
    require_once '../includes/footer.php';
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