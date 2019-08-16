<!DOCTYPE html>
<html lang="es">

<?php
    require_once '../api/testDomino.php';
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
    <!-- Hoja de estilos domino -->
    <link rel="stylesheet" href="../css/domino.css">
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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-test-colores.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-test-colores.jpg">
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
                <h4 class="center">Test de Colores</h4>
                <p>
                    <h5>Instrucciones:</h5>
                    De click a todos los colores en orden de preferencia (se selecciona primero el que mas le guste y al final el que menos le guste).
                </p>
                <p>
                    <h5>Material de descarga:</h5>
                    <div class="col s12 center">
                    <p class="center">
                    <b>Manual:</b>
                    </p>
                    <a href="../descargable/manuales/MANUAL DE TEST DE COLORES.pdf" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Descarga</a>
                    </div>
                </p>
                <div class="col s12">
                <p class="red-text" style="font-weight: 600">
                    Debe seleccionar todos los colores para que aparezca el botón "enviar" y tener sus resultados.
                </p>
                </div>
                
                <!-- TEST DE COLORES -->
                <p>
                <form action="test-de-colores-resultado.php" method="POST">

                    <div class="row">
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="0" onclick="alerta('0')" style="cursor: pointer;">
                                <p style="height:8em">
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="1" onclick="alerta('1')" style="cursor: pointer">
                                    <p style="height:8em">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="2" onclick="alerta('2')" style="cursor: pointer">
                                    <p style="height:8em">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="3" onclick="alerta('3')" style="cursor: pointer">
                                    <p style="height:8em">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="4" onclick="alerta('4')" style="cursor: pointer">
                                    <p style="height:8em">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="5" onclick="alerta('5')" style="cursor: pointer">
                                    <p style="height:8em">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="6" onclick="alerta('6')" style="cursor: pointer">
                                    <p style="height:8em">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="container">
                                <div class="col s12" id="7" onclick="alerta('7')" style="cursor: pointer">
                                    <p style="height:8em">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s12 hide">

                        <div class="input-field col s12">
                            <p>Color uno:</p>
                                <select class="browser-default" id="8" name="0">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                        <div class="input-field col s12">
                            <p>Color dos:</p>
                                <select class="browser-default" id="9" name="1">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                        <div class="input-field col s12">
                            <p>Color tres:</p>
                                <select class="browser-default" id="10" name="2">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                        <div class="input-field col s12">
                            <p>Color cuatro:</p>
                                <select class="browser-default" id="11" name="3">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                        <div class="input-field col s12">
                            <p>Color cinco:</p>
                                <select class="browser-default" id="12" name="4">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                        <div class="input-field col s12">
                            <p>Color seis:</p>
                                <select class="browser-default" id="13" name="5">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                        <div class="input-field col s12">
                            <p>Color siete:</p>
                                <select class="browser-default" id="14" name="6">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                        <div class="input-field col s12">
                            <p>Color ocho:</p>
                                <select class="browser-default" id="15" name="7">
                                    <option value="" disabled selected>Seleccciona un color</option>
                                    <option value="0">Gris</option>
                                    <option value="1">Azul</option>
                                    <option value="2">Verde</option>
                                    <option value="3">Rojo</option>
                                    <option value="4">Amarillo</option>
                                    <option value="5">Violeta</option>
                                    <option value="6">Cafe</option>
                                    <option value="7">Negro</option>
                                </select>
                        </div>
                    </div>

                    

                    <button id="enviar" class="hide" type="submit" name="action">
                    <i class="material-icons right">send</i>ENVIAR</button>
                  
                </form>

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

    <script>
    
    var lista = [0,1,2,3,4,5,6,7];
    var colores = ["grey","indigo darken-4","green","red","yellow accent-2","purple","brown darken-4","black"];
    lista = lista.sort(function() {return Math.random() - 0.5});
       
    var i;

    for (i = 0; i < 8; i++){
        //console.log(document.getElementById(i));
        var posicion = lista[i];
        var color = " " + colores[posicion];
        document.getElementById(i).className += color;
    }

    var click = -1;

    function alerta(id){       
        
        click += 1; 
        document.getElementById(id).className = "col s12 transparent";
        document.getElementById(id).onclick = null;
        var posicion = lista[id];
        console.log(posicion);   
        
        //var aux = lista[id] + 8;
        var seleccion = click + 8;
        //document.getElementById(posicion).disabled = true
        document.getElementById(seleccion).value = posicion;
        //console.log(document.getElementsByName(posicion).name); 
        if(click == 7){
            document.getElementById("enviar").className = "btn-small waves-effect waves-light brown darken-3 right";
        }
    }
    
    </script>


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