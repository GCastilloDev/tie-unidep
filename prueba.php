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
<div class="parallax-container">
        <div class="parallax"><img style="max-width: 90%" src="img/banner-principal-1.jpg"></div>
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
                <h4 class="center">Test de Colores</h4>
                <form action="api/procesarTestColores.php" method="post">
                <p>Selecciona un color:</p>

                <div class="input-field col s12">
                    <p>Color uno:</p>
                    <select class="browser-default" name="0">
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
                    <select class="browser-default" name="1">
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
                    <select class="browser-default" name="2">
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
                    <select class="browser-default" name="3">
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
                    <select class="browser-default" name="4">
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
                    <select class="browser-default" name="5">
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
                    <select class="browser-default" name="6">
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
                    <select class="browser-default" name="7">
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

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>

                </form>
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