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
        <div class="parallax"><img style="max-width: 90%" src="../img/banner-test-cleaver.jpg"></div>
</div>

<!-- Banner para móvil -->
<div class="row hide-on-med-and-up">
    <div class="s12">
            <img style="max-width: 100%" src="../img/banner-test-cleaver.jpg">
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
                <h4 class="center">Test de Cleaver</h4>
                <p>
                    <h5>Instrucciones:</h5>
                    Las palabras descriptivas que verá a continuación se encuentran agrupadas en series de cuatro, 
                    examine las palabras de cada serie y anote una "X" bajo la columna "MAS" de la palabra que mejor 
                    describa su forma de ser o de comportarse. Después marque una "X" en la palabra que menos lo describa 
                    o se acerque a su forma de ser, bajo la columna de "MENOS".
                </p>
                <p>
                    <h5>Material de descarga:</h5>
                    <div class="col s6 center">
                    <p class="center">
                    <b>Manual:</b>
                    </p>
                    <a href="../descargable/manuales/Cleaver - Manual de Interpretacion (Completo).pdf" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>Descarga</a>
                    </div>
                    <div class="col s6 center">
                    <p class="center">
                    <b>Hoja de respuesta:</b>
                    </p>
                    <a href="../descargable/manuales/Cleaver - Hoja de Respuesta.xls" download
                        class="waves-effect waves-light brown darken-3 btn-small"><i class="material-icons right">save_alt</i>descarga</a> 
                    </div>
                </p>
                <div class="col s12">
                <p class="red-text" style="font-weight: 600">
                    Debe responder todas las preguntas para poder obtener un resultado.
                </p>
                </div>
                
                <!-- PREGUNTAS TEST DE CLEAVER -->
                <p>
                    <form action="test-de-cleaver-resultado.php" method="POST">
                        <div class="row">
                            <!-- SECCION 1 -->
                            <div class="col s12 l6">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th >MAS</th>
                                            <th >MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Persuasivo</td>
                                            <td class="center"><label>
                                                    <input name="g1_mas" type="radio" id="persuasivo_mas" value="I"
                                                        onclick="recorridoRadioButton(g1_menos,persuasivo_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g1_menos" type="radio" id="persuasivo_menos" value="X"
                                                    onclick="recorridoRadioButton(g1_mas,persuasivo_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gentil</td>
                                            <td class="center"><label>
                                                    <input name="g1_mas" type="radio" id="gentil_mas" value="S"
                                                    onclick="recorridoRadioButton(g1_menos,gentil_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g1_menos" type="radio" id="gentil_menos" value="S-"
                                                    onclick="recorridoRadioButton(g1_mas,gentil_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Humilde</td>
                                            <td class="center"><label>
                                                    <input name="g1_mas" type="radio" id="humilde_mas" value="C"
                                                    onclick="recorridoRadioButton(g1_menos,humilde_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g1_menos" type="radio" id="humilde_menos" value="C-"
                                                    onclick="recorridoRadioButton(g1_mas,humilde_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Original</td>
                                            <td class="center"><label>
                                                    <input name="g1_mas" type="radio" id="original_mas" value="X"
                                                    onclick="recorridoRadioButton(g1_menos,original_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g1_menos" type="radio" id="original_menos" value="D-"
                                                    onclick="recorridoRadioButton(g1_mas,original_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 2 -->
                            <div class="col l6 s12">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th >MAS</th>
                                            <th >MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fuerza de Voluntad</td>
                                            <td class="center"><label>
                                                    <input name="g2_mas" type="radio" id="fuerza_voluntad_mas" value="X"
                                                    onclick="recorridoRadioButton(g2_menos,fuerza_voluntad_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g2_menos" type="radio" id="fuerza_voluntad_menos" value="D-"
                                                    onclick="recorridoRadioButton(g2_mas,fuerza_voluntad_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mente Abierta</td>
                                            <td class="center"><label>
                                                    <input name="g2_mas" type="radio" id="mente_abierta_mas" value="C"
                                                    onclick="recorridoRadioButton(g2_menos,mente_abierta_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g2_menos" type="radio" id="mente_abierta_menos" value="X"
                                                    onclick="recorridoRadioButton(g2_mas,mente_abierta_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Complaciente</td>
                                            <td class="center"><label>
                                                    <input name="g2_mas" type="radio" id="complaciente_mas" value="S"
                                                    onclick="recorridoRadioButton(g2_menos,complaciente_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g2_menos" type="radio" id="complaciente_menos" value="S-"
                                                    onclick="recorridoRadioButton(g2_mas,complaciente_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Animoso</td>
                                            <td class="center"><label>
                                                    <input name="g2_mas" type="radio" id="animoso_mas" value="I"
                                                    onclick="recorridoRadioButton(g2_menos,animoso_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g2_menos" type="radio" id="animoso_menos" value="I-"
                                                    onclick="recorridoRadioButton(g2_mas,animoso_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- SECCION 3 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Obediente</td>
                                            <td class="center"><label>
                                                    <input name="g3_mas" type="radio" id="obediente_mas" value="S"
                                                    onclick="recorridoRadioButton(g3_menos,obediente_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g3_menos" type="radio" id="obediente_menos" value="X"
                                                    onclick="recorridoRadioButton(g3_mas,obediente_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quisquilloso</td>
                                            <td class="center"><label>
                                                    <input name="g3_mas" type="radio" id="quisquilloso_mas" value="X"
                                                    onclick="recorridoRadioButton(g3_menos,quisquilloso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g3_menos" type="radio" id="quisquilloso_menos" value="C-"
                                                    onclick="recorridoRadioButton(g3_mas,quisquilloso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Inconquistable</td>
                                            <td class="center"><label>
                                                    <input name="g3_mas" type="radio" id="inconquistable_mas" value="D"
                                                    onclick="recorridoRadioButton(g3_menos,inconquistable_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g3_menos" type="radio" id="inconquistable_menos" value="D-"
                                                    onclick="recorridoRadioButton(g3_mas,inconquistable_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Juguetón</td>
                                            <td class="center"><label>
                                                    <input name="g3_mas" type="radio" id="jugueton_mas" value="I"
                                                    onclick="recorridoRadioButton(g3_menos,jugueton_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g3_menos" type="radio" id="jugueton_menos" value="I-"
                                                    onclick="recorridoRadioButton(g3_mas,jugueton_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 4 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th >MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Aventurero</td>
                                            <td class="center"><label>
                                                    <input name="g4_mas" type="radio" id="aventurero_mas" value="D"
                                                    onclick="recorridoRadioButton(g4_menos,aventurero_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g4_menos" type="radio" id="aventurero_menos" value="D-"
                                                    onclick="recorridoRadioButton(g4_mas,aventurero_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Receptivo</td>
                                            <td class="center"><label>
                                                    <input name="g4_mas" type="radio" id="receptivo_mas" value="C"
                                                    onclick="recorridoRadioButton(g4_menos,receptivo_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g4_menos" type="radio" id="receptivo_menos" value="X"
                                                    onclick="recorridoRadioButton(g4_mas,receptivo_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cordial</td>
                                            <td class="center"><label>
                                                    <input name="g4_mas" type="radio"  id="cordial_mas" value="I"
                                                    onclick="recorridoRadioButton(g4_menos,cordial_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g4_menos" type="radio" id="cordial_menos" value="I-"
                                                    onclick="recorridoRadioButton(g4_mas,cordial_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Moderado</td>
                                            <td class="center"><label>
                                                    <input name="g4_mas" type="radio" id="moderado_mas" value="S"
                                                    onclick="recorridoRadioButton(g4_menos,moderado_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g4_menos" type="radio" id="moderado_menos" value="S-"
                                                    onclick="recorridoRadioButton(g4_mas,moderado_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 5 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Agresivo</td>
                                            <td class="center"><label>
                                                    <input name="g5_mas" type="radio" id="agresivo_mas" value="D"
                                                    onclick="recorridoRadioButton(g5_menos,agresivo_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g5_menos" type="radio" id="agresivo_menos" value="X"
                                                    onclick="recorridoRadioButton(g5_mas,agresivo_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alma de la Fiesta</td>
                                            <td class="center"><label>
                                                    <input name="g5_mas" type="radio" id="alma_fiesta_mas" value="I"
                                                    onclick="recorridoRadioButton(g5_menos,alma_fiesta_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g5_menos" type="radio" id="alma_fiesta_menos" value="I-"
                                                    onclick="recorridoRadioButton(g5_mas,alma_fiesta_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Comodino</td>
                                            <td class="center"><label>
                                                    <input name="g5_mas" type="radio" id="comodino_mas" value="S"
                                                    onclick="recorridoRadioButton(g5_menos,comodino_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g5_menos" type="radio" id="comodino_menos" value="S-"
                                                    onclick="recorridoRadioButton(g5_mas,comodino_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Temeroso</td>
                                            <td class="center"><label> 
                                                    <input name="g5_mas" type="radio" id="temeroso_mas" value="X"
                                                    onclick="recorridoRadioButton(g5_menos,temeroso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g5_menos" type="radio" id="temeroso_menos" value="C-"
                                                    onclick="recorridoRadioButton(g5_mas,temeroso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 6 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Confiado</td>
                                            <td class="center"><label>
                                                    <input name="g6_mas" type="radio" id="confiado_mas" value="I"
                                                    onclick="recorridoRadioButton(g6_menos,confiado_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g6_menos" type="radio" id="confiado_menos" value="X"
                                                    onclick="recorridoRadioButton(g6_mas,confiado_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Simpatizador</td>
                                            <td class="center"><label>
                                                    <input name="g6_mas" type="radio" id="simpatizador_mas" value="X"
                                                    onclick="recorridoRadioButton(g6_menos,simpatizador_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g6_menos" type="radio" id="simpatizador_menos" value="S-"
                                                    onclick="recorridoRadioButton(g6_mas,simpatizador_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tolerante</td>
                                            <td class="center"><label>
                                                    <input name="g6_mas" type="radio" id="tolerante_mas" value="X"
                                                    onclick="recorridoRadioButton(g6_menos,tolerante_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g6_menos" type="radio" id="tolerante_menos" value="C-"
                                                    onclick="recorridoRadioButton(g6_mas,tolerante_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Afirmativo</td>
                                            <td class="center"><label>
                                                    <input name="g6_mas" type="radio" id="afirmativo_mas" value="D"
                                                    onclick="recorridoRadioButton(g6_menos,afirmativo_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g6_menos" type="radio" id="afirmativo_menos" value="D-"
                                                    onclick="recorridoRadioButton(g6_mas,afirmativo_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 7 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Respetuoso</td>
                                            <td class="center"><label>
                                                    <input name="g7_mas" type="radio" id="respetuoso_mas" value="C"
                                                    onclick="recorridoRadioButton(g7_menos,respetuoso_menos)" required>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g7_menos" type="radio" id="respetuoso_menos" value="X"
                                                    onclick="recorridoRadioButton(g7_mas,respetuoso_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Emprendedor</td>
                                            <td class="center"><label>
                                                    <input name="g7_mas" type="radio" id="emprendedor_mas" value="D"
                                                    onclick="recorridoRadioButton(g7_menos,emprendedor_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g7_menos" type="radio" id="emprendedor_menos" value="D-"
                                                    onclick="recorridoRadioButton(g7_mas,emprendedor_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Optimista</td>
                                            <td class="center"><label>
                                                    <input name="g7_mas" type="radio" id="optimista_mas" value="I"
                                                    onclick="recorridoRadioButton(g7_menos,optimista_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g7_menos" type="radio" id="optimista_menos" value="I-"
                                                    onclick="recorridoRadioButton(g7_mas,optimista_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Servicial</td>
                                            <td class="center"><label>
                                                    <input name="g7_mas" type="radio" id="servicial_mas" value="S"
                                                    onclick="recorridoRadioButton(g7_menos,servicial_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g7_menos" type="radio" id="servicial_menos" value="S-"
                                                    onclick="recorridoRadioButton(g7_mas,servicial_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 8 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Indulgente</td>
                                            <td class="center"><label>
                                                    <input name="g8_mas" type="radio" id="indulgente_mas" value="S"
                                                    onclick="recorridoRadioButton(g8_menos,indulgente_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g8_menos" type="radio" id="indulgente_menos" value="S-"
                                                    onclick="recorridoRadioButton(g8_mas,indulgente_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Esteta</td>
                                            <td class="center"><label> 
                                                    <input name="g8_mas" type="radio" id="esteta_mas" value="X"
                                                    onclick="recorridoRadioButton(g8_menos,esteta_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g8_menos" type="radio" id="esteta_menos" value="C-"
                                                    onclick="recorridoRadioButton(g8_mas,esteta_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vigoroso</td>
                                            <td class="center"><label>
                                                    <input name="g8_mas" type="radio" id="vigoroso_mas" value="D"
                                                    onclick="recorridoRadioButton(g8_menos,vigoroso_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g8_menos" type="radio" id="vigoroso_menos" value="D-"
                                                    onclick="recorridoRadioButton(g8_mas,vigoroso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sociable</td>
                                            <td class="center"><label>
                                                    <input name="g8_mas" type="radio" id="sociable_mas" value="I"
                                                    onclick="recorridoRadioButton(g8_menos,sociable_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g8_menos" type="radio" id="sociable_menos" value="I-"
                                                    onclick="recorridoRadioButton(g8_mas,sociable_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 9 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Agradable</td>
                                            <td class="center"><label>
                                                    <input name="g9_mas" type="radio" id="agradable_mas" value="S"
                                                    onclick="recorridoRadioButton(g9_menos,agradable_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g9_menos" type="radio" id="agradable_menos" value="S-"
                                                    onclick="recorridoRadioButton(g9_mas,agradable_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Temeroso de Dios</td>
                                            <td class="center"><label>
                                                    <input name="g9_mas" type="radio" id="temeroso_dios_mas" value="C"
                                                    onclick="recorridoRadioButton(g9_menos,temeroso_dios_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g9_menos" type="radio" id="temeroso_dios_menos" value="C-"
                                                    onclick="recorridoRadioButton(g9_mas,temeroso_dios_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tenaz</td>
                                            <td class="center"><label>
                                                    <input name="g9_mas" type="radio" id="tenaz_mas" value="D"
                                                    onclick="recorridoRadioButton(g9_menos,tenaz_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g9_menos" type="radio" id="tenaz_menos" value="D-"
                                                    onclick="recorridoRadioButton(g9_mas,tenaz_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Atractivo</td>
                                            <td class="center"><label>
                                                    <input name="g9_mas" type="radio" id="atractivo_mas" value="I"
                                                    onclick="recorridoRadioButton(g9_menos,atractivo_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g9_menos" type="radio" id="atractivo_menos" value="I-"
                                                    onclick="recorridoRadioButton(g9_mas,atractivo_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 10 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ecuánime</td>
                                            <td class="center"><label>
                                                    <input name="g10_mas" type="radio" id="ecuanime_mas" value="S"
                                                    onclick="recorridoRadioButton(g10_menos,ecuanime_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g10_menos" type="radio" id="ecuanime_menos" value="S-"
                                                    onclick="recorridoRadioButton(g10_mas,ecuanime_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Preciso</td>
                                            <td class="center"><label>
                                                    <input name="g10_mas" type="radio" id="preciso_mas" value="C"
                                                    onclick="recorridoRadioButton(g10_menos,preciso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g10_menos" type="radio" id="preciso_menos" value="C-"
                                                    onclick="recorridoRadioButton(g10_mas,preciso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nervioso</td>
                                            <td class="center"><label>
                                                    <input name="g10_mas" type="radio" id="nervioso_mas" value="X"
                                                    onclick="recorridoRadioButton(g10_menos,nervioso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g10_menos" type="radio" id="nervioso_menos" value="D-"
                                                    onclick="recorridoRadioButton(g10_mas,nervioso_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jovial</td>
                                            <td class="center"><label>
                                                    <input name="g10_mas" type="radio" id="jovial_mas" value="X"
                                                    onclick="recorridoRadioButton(g10_menos,jovial_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g10_menos" type="radio" id="jovial_menos" value="I-"
                                                    onclick="recorridoRadioButton(g10_mas,jovial_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 11 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Valiente</td>
                                            <td class="center"><label>
                                                    <input name="g11_mas" type="radio" id="valiente_mas" value="D"
                                                    onclick="recorridoRadioButton(g11_menos,valiente_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g11_menos" type="radio" id="valiente_menos" value="X"
                                                    onclick="recorridoRadioButton(g11_mas,valiente_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Inspirador</td>
                                            <td class="center"><label>
                                                    <input name="g11_mas" type="radio" id="inspirador_mas" value="I"
                                                    onclick="recorridoRadioButton(g11_menos,inspirador_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g11_menos" type="radio" id="inspirador_menos" value="X"
                                                    onclick="recorridoRadioButton(g11_mas,inspirador_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sumiso</td>
                                            <td class="center"><label>
                                                    <input name="g11_mas" type="radio" id="sumiso_mas" value="X"
                                                    onclick="recorridoRadioButton(g11_menos,sumiso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g11_menos" type="radio" id="sumiso_menos" value="S-"
                                                    onclick="recorridoRadioButton(g11_mas,sumiso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tímido</td>
                                            <td class="center"><label>
                                                    <input name="g11_mas" type="radio" id="timido_mas" value="X"
                                                    onclick="recorridoRadioButton(g11_menos,timido_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g11_menos" type="radio" id="timido_menos" value="C-"
                                                    onclick="recorridoRadioButton(g11_mas,timido_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 12 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Parlanchín</td>
                                            <td class="center"><label>
                                                    <input name="g12_mas" type="radio" id="parlanchin_mas" value="I"
                                                    onclick="recorridoRadioButton(g12_menos,parlanchin_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g12_menos" type="radio" id="parlanchin_menos" value="I-"
                                                    onclick="recorridoRadioButton(g12_mas,parlanchin_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Controlado</td>
                                            <td class="center"><label>
                                                    <input name="g12_mas" type="radio" id="controlado_mas" value="S"
                                                    onclick="recorridoRadioButton(g12_menos,controlado_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label> 
                                                    <input name="g12_menos" type="radio" id="controlado_menos" value="S-"
                                                    onclick="recorridoRadioButton(g12_mas,controlado_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Convencional</td>
                                            <td class="center"><label>
                                                    <input name="g12_mas" type="radio" id="convencional_mas" value="X"
                                                    onclick="recorridoRadioButton(g12_menos,convencional_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g12_menos" type="radio" id="convencional_menos" value="C-"
                                                    onclick="recorridoRadioButton(g12_mas,convencional_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Decisivo</td>
                                            <td class="center"><label>
                                                    <input name="g12_mas" type="radio" id="decisivo_mas" value="D"
                                                    onclick="recorridoRadioButton(g12_menos,decisivo_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g12_menos" type="radio" id="decisivo_menos" value="D-"
                                                    onclick="recorridoRadioButton(g12_mas,decisivo_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 13 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cauteloso</td>
                                            <td class="center"><label>
                                                    <input name="g13_mas" type="radio" id="cauteloso_mas" value="C"
                                                    onclick="recorridoRadioButton(g13_menos,cauteloso_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g13_menos" type="radio" id="cauteloso_menos" value="C-"
                                                    onclick="recorridoRadioButton(g13_mas,cauteloso_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Determinado</td>
                                            <td class="center"><label>
                                                    <input name="g13_mas" type="radio" id="determinado_mas" value="D"
                                                    onclick="recorridoRadioButton(g13_menos,determinado_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label> 
                                                    <input name="g13_menos" type="radio" id="determinado_menos" value="X"
                                                    onclick="recorridoRadioButton(g13_mas,determinado_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Convincente</td>
                                            <td class="center"><label>
                                                    <input name="g13_mas" type="radio" id="convincente_mas" value="I"
                                                    onclick="recorridoRadioButton(g13_menos,convincente_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g13_menos" type="radio" id="convincente_menos" value="I-"
                                                    onclick="recorridoRadioButton(g13_mas,convincente_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bonachón</td>
                                            <td class="center"><label> 
                                                    <input name="g13_mas" type="radio" id="bonachon_mas" value="S"
                                                    onclick="recorridoRadioButton(g13_menos,bonachon_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g13_menos" type="radio" id="bonachon_menos" value="X"
                                                    onclick="recorridoRadioButton(g13_mas,bonachon_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 14 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Disciplinado</td>
                                            <td class="center"><label> 
                                                    <input name="g14_mas" type="radio" id="disciplinado_mas" value="C"
                                                    onclick="recorridoRadioButton(g14_menos,disciplinado_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g14_menos" type="radio" id="disciplinado_menos" value="X"
                                                    onclick="recorridoRadioButton(g14_mas,disciplinado_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Generoso</td>
                                            <td class="center"><label>
                                                    <input name="g14_mas" type="radio" id="generoso_mas" value="S"
                                                    onclick="recorridoRadioButton(g14_menos,generoso_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g14_menos" type="radio" id="generoso_menos" value="S-"
                                                    onclick="recorridoRadioButton(g14_mas,generoso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Animoso</td>
                                            <td class="center"><label>
                                                    <input name="g14_mas" type="radio" id="animoso_dos_mas" value="X"
                                                    onclick="recorridoRadioButton(g14_menos,animoso_dos_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g14_menos" type="radio" id="animoso_dos_menos" value="I-"
                                                    onclick="recorridoRadioButton(g14_mas,animoso_dos_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Persistente</td>
                                            <td class="center"><label>
                                                    <input name="g14_mas" type="radio" id="persistente_mas" value="D"
                                                    onclick="recorridoRadioButton(g14_menos,persistente_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label> 
                                                    <input name="g14_menos" type="radio" id="persistente_menos" value="D-"
                                                    onclick="recorridoRadioButton(g14_mas,persistente_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 15 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Adaptable</td>
                                            <td class="center"><label>
                                                    <input name="g15_mas" type="radio" id="adaptable_mas" value="C"
                                                    onclick="recorridoRadioButton(g15_menos,adaptable_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g15_menos" type="radio" id="adaptable_menos" value="X"
                                                    onclick="recorridoRadioButton(g15_mas,adaptable_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Disputador</td>
                                            <td class="center"><label>
                                                    <input name="g15_mas" type="radio" id="disputador_mas" value="D"
                                                    onclick="recorridoRadioButton(g15_menos,disputador_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g15_menos" type="radio" id="disputador_menos" value="D-"
                                                    onclick="recorridoRadioButton(g15_mas,disputador_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Indiferente</td>
                                            <td class="center"><label>
                                                    <input name="g15_mas" type="radio" id="indiferente_mas" value="X"
                                                    onclick="recorridoRadioButton(g15_menos,indiferente_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g15_menos" type="radio" id="indiferente_menos" value="S-"
                                                    onclick="recorridoRadioButton(g15_mas,indiferente_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sangre Liviana</td>
                                            <td class="center"><label>
                                                    <input name="g15_mas" type="radio" id="sangre_liviana_mas" value="I"
                                                    onclick="recorridoRadioButton(g15_menos,sangre_liviana_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g15_menos" type="radio" id="sangre_liviana_menos" value="I-"
                                                    onclick="recorridoRadioButton(g15_mas,sangre_liviana_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 16 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cohibido</td>
                                            <td class="center"><label>
                                                    <input name="g16_mas" type="radio" id="cohibido_mas" value="X"
                                                    onclick="recorridoRadioButton(g16_menos,cohibido_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g16_menos" type="radio" id="cohibido_menos" value="S-"
                                                    onclick="recorridoRadioButton(g16_mas,cohibido_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Exacto</td>
                                            <td class="center"><label>
                                                    <input name="g16_mas" type="radio" id="exacto_mas" value="C"
                                                    onclick="recorridoRadioButton(g16_menos,exacto_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g16_menos" type="radio" id="exacto_menos" value="X"
                                                    onclick="recorridoRadioButton(g16_mas,exacto_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Franco</td>
                                            <td class="center"><label>
                                                    <input name="g16_mas" type="radio" id="franco_mas" value="D"
                                                    onclick="recorridoRadioButton(g16_menos,franco_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g16_menos" type="radio" id="franco_menos" value="D-"
                                                    onclick="recorridoRadioButton(g16_mas,franco_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Buen Compañero</td>
                                            <td class="center"><label>
                                                    <input name="g16_mas" type="radio" id="buen_companero_mas" value="I"
                                                    onclick="recorridoRadioButton(g16_menos,buen_companero_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g16_menos" type="radio" id="buen_companero_menos" value="I-"
                                                    onclick="recorridoRadioButton(g16_mas,buen_companero_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 17 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dócil</td>
                                            <td class="center"><label>
                                                    <input name="g17_mas" type="radio" id="docil_mas" value="X"
                                                    onclick="recorridoRadioButton(g17_menos,docil_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g17_menos" type="radio" id="docil_menos" value="C-"
                                                    onclick="recorridoRadioButton(g17_mas,docil_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Atrevido</td>
                                            <td class="center"><label>
                                                    <input name="g17_mas" type="radio" id="atrevido_mas" value="D"
                                                    onclick="recorridoRadioButton(g17_menos,atrevido_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g17_menos" type="radio" id="atrevido_menos" value="D-"
                                                    onclick="recorridoRadioButton(g17_mas,atrevido_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Leal</td>
                                            <td class="center"><label>
                                                    <input name="g17_mas" type="radio" id="leal_mas" value="S"
                                                    onclick="recorridoRadioButton(g17_menos,leal_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g17_menos" type="radio" id="leal_menos" value="X"
                                                    onclick="recorridoRadioButton(g17_mas,leal_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Encantador</td>
                                            <td class="center"><label>
                                                    <input name="g17_mas" type="radio" id="encantador_mas" value="I"
                                                    onclick="recorridoRadioButton(g17_menos,encantador_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g17_menos" type="radio" id="encantador_menos" value="I-"
                                                    onclick="recorridoRadioButton(g17_mas,encantador_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 18 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Competitivo</td>
                                            <td class="center"><label>
                                                    <input name="g18_mas" type="radio" id="competitivo_mas" value="D"
                                                    onclick="recorridoRadioButton(g18_menos,competitivo_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g18_menos" type="radio" id="competitivo_menos" value="D-"
                                                    onclick="recorridoRadioButton(g18_mas,competitivo_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alegre</td>
                                            <td class="center"><label>
                                                    <input name="g18_mas" type="radio" id="alegre_mas" value="X"
                                                    onclick="recorridoRadioButton(g18_menos,alegre_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g18_menos" type="radio" id="alegre_menos" value="I-"
                                                    onclick="recorridoRadioButton(g18_mas,alegre_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Considerado</td>
                                            <td class="center"><label>
                                                    <input name="g18_mas" type="radio" id="considerado_mas" value="S"
                                                    onclick="recorridoRadioButton(g18_menos,considerado_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g18_menos" type="radio" id="considerado_menos" value="S-"
                                                    onclick="recorridoRadioButton(g18_mas,considerado_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Armonioso</td>
                                            <td class="center"><label>
                                                    <input name="g18_mas" type="radio" id="armonioso_mas" value="X"
                                                    onclick="recorridoRadioButton(g18_menos,armonioso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g18_menos" type="radio" id="armonioso_menos" value="C-"
                                                    onclick="recorridoRadioButton(g18_mas,armonioso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 19 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Amiguero</td>
                                            <td class="center"><label>
                                                    <input name="g19_mas" type="radio" id="amiguero_mas" value="I"
                                                    onclick="recorridoRadioButton(g19_menos,amiguero_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g19_menos" type="radio" id="amiguero_menos" value="I-"
                                                    onclick="recorridoRadioButton(g19_mas,amiguero_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paciente</td>
                                            <td class="center"><label>
                                                    <input name="g19_mas" type="radio" id="paciente_mas" value="S"
                                                    onclick="recorridoRadioButton(g19_menos,paciente_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g19_menos" type="radio" id="paciente_menos" value="S-"
                                                    onclick="recorridoRadioButton(g19_mas,paciente_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Confianza en si Mismo</td>
                                            <td class="center"><label>
                                                    <input name="g19_mas" type="radio" id="confianza_mismo_mas" value="D"
                                                    onclick="recorridoRadioButton(g19_menos,confianza_mismo_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g19_menos" type="radio" id="confianza_mismo_menos" value="D-"
                                                    onclick="recorridoRadioButton(g19_mas,confianza_mismo_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mesurado para Hablar</td>
                                            <td class="center"><label>
                                                    <input name="g19_mas" type="radio" id="mesurado_hablar_mas" value="C"
                                                    onclick="recorridoRadioButton(g19_menos,mesurado_hablar_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g19_menos" type="radio" id="mesurado_hablar_menos" value="X"
                                                    onclick="recorridoRadioButton(g19_mas,mesurado_hablar_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 20 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Diplomático</td>
                                            <td class="center"><label>
                                                    <input name="g20_mas" type="radio" id="diplomatico_mas" value="C"
                                                    onclick="recorridoRadioButton(g20_menos,diplomatico_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g20_menos" type="radio" id="diplomatico_menos" value="X"
                                                    onclick="recorridoRadioButton(g20_mas,diplomatico_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Audaz</td>
                                            <td class="center"><label>
                                                    <input name="g20_mas" type="radio" id="audaz_mas" value="D"
                                                    onclick="recorridoRadioButton(g20_menos,audaz_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g20_menos" type="radio" id="audaz_menos" value="D-"
                                                    onclick="recorridoRadioButton(g20_mas,audaz_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Refinado</td>
                                            <td class="center"><label>
                                                    <input name="g20_mas" type="radio" id="refinado_mas" value="X"
                                                    onclick="recorridoRadioButton(g20_menos,refinado_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g20_menos" type="radio" id="refinado_menos" value="I-"
                                                    onclick="recorridoRadioButton(g20_mas,refinado_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Satisfecho</td>
                                            <td class="center"><label>
                                                    <input name="g20_mas" type="radio" id="satisfecho_mas" value="S"
                                                    onclick="recorridoRadioButton(g20_menos,satisfecho_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g20_menos" type="radio" id="satisfecho_menos" value="S-"
                                                    onclick="recorridoRadioButton(g20_mas,satisfecho_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 21 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dispuesto</td>
                                            <td class="center"><label>
                                                    <input name="g21_mas" type="radio" id="dispuesto_mas" value="S"
                                                    onclick="recorridoRadioButton(g21_menos,dispuesto_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g21_menos" type="radio" id="dispuesto_menos" value="X"
                                                    onclick="recorridoRadioButton(g21_mas,dispuesto_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Deseoso</td>
                                            <td class="center"><label>
                                                    <input name="g21_mas" type="radio" id="deseoso_mas" value="X"
                                                    onclick="recorridoRadioButton(g21_menos,deseoso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g21_menos" type="radio" id="deseoso_menos" value="X"
                                                    onclick="recorridoRadioButton(g21_mas,deseoso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Consecuente</td>
                                            <td class="center"><label>
                                                    <input name="g21_mas" type="radio" id="consecuente_mas" value="C"
                                                    onclick="recorridoRadioButton(g21_menos,consecuente_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g21_menos" type="radio" id="consecuente_menos" value="C-"
                                                    onclick="recorridoRadioButton(g21_mas,consecuente_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Entusiasta</td>
                                            <td class="center"><label>
                                                    <input name="g21_mas" type="radio" id="entusiasta_mas" value="X"
                                                    onclick="recorridoRadioButton(g21_menos,entusiasta_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g21_menos" type="radio" id="entusiasta_menos" value="D-"
                                                    onclick="recorridoRadioButton(g21_mas,entusiasta_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 22 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admirable</td>
                                            <td class="center"><label>
                                                    <input name="g22_mas" type="radio" id="admirable_mas" value="I"
                                                    onclick="recorridoRadioButton(g22_menos,admirable_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g22_menos" type="radio" id="admirable_menos" value="X"
                                                    onclick="recorridoRadioButton(g22_mas,admirable_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bondadoso</td>
                                            <td class="center"><label>
                                                    <input name="g22_mas" type="radio" id="bondadoso_mas" value="S"
                                                    onclick="recorridoRadioButton(g22_menos,bondadoso_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g22_menos" type="radio" id="bondadoso_menos" value="X"
                                                    onclick="recorridoRadioButton(g22_mas,bondadoso_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Resignado</td>
                                            <td class="center"><label>
                                                    <input name="g22_mas" type="radio" id="resignado_mas" value="X"
                                                    onclick="recorridoRadioButton(g22_menos,resignado_menos)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g22_menos" type="radio" id="resignado_menos" value="C-"
                                                    onclick="recorridoRadioButton(g22_mas,resignado_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Carácter Firme</td>
                                            <td class="center"><label>
                                                    <input name="g22_mas" type="radio" id="caracter_firme_mas" value="D"
                                                    onclick="recorridoRadioButton(g22_menos,caracter_firme_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g22_menos" type="radio" id="caracter_firme_menos" value="D-"
                                                    onclick="recorridoRadioButton(g22_mas,caracter_firme_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 23 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Conforme</td>
                                            <td class="center"><label>
                                                    <input name="g23_mas" type="radio" id="conforme_mas" value="X"
                                                    onclick="recorridoRadioButton(g23_menos,conforme_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g23_menos" type="radio" id="conforme_menos" value="S-"
                                                    onclick="recorridoRadioButton(g23_mas,conforme_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Confiable</td>
                                            <td class="center"><label>
                                                    <input name="g23_mas" type="radio" id="confiable_mas" value="I"
                                                    onclick="recorridoRadioButton(g23_menos,confiable_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g23_menos" type="radio" id="confiable_menos" value="I-"
                                                    onclick="recorridoRadioButton(g23_mas,confiable_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pacifico</td>
                                            <td class="center"><label>
                                                    <input name="g23_mas" type="radio" id="pacifico_mas" value="C"
                                                    onclick="recorridoRadioButton(g23_menos,pacifico_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g23_menos" type="radio" id="pacifico_menos" value="C-"
                                                    onclick="recorridoRadioButton(g23_mas,pacifico_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Positivo</td>
                                            <td class="center"><label>
                                                    <input name="g23_mas" type="radio" id="positivo_mas" value="D"
                                                    onclick="recorridoRadioButton(g23_menos,positivo_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g23_menos" type="radio" id="positivo_menos" value="D-"
                                                    onclick="recorridoRadioButton(g23_mas,positivo_mas)" />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- SECCION 24 -->
                            <div class="col s12 l6" style="margin-top:60px">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="transparent-text">Name</th>
                                            <th>MAS</th>
                                            <th>MENOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Inquieto</td>
                                            <td class="center"><label>
                                                    <input name="g24_mas" type="radio" id="inquieto_mas" value="D"
                                                    onclick="recorridoRadioButton(g24_menos,inquieto_menos)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g24_menos" type="radio" id="inquieto_menos" value="D-"
                                                    onclick="recorridoRadioButton(g24_mas,inquieto_mas)" required/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Popular</td>
                                            <td class="center"><label>
                                                    <input name="g24_mas" type="radio" id="popular_mas" value="I"
                                                    onclick="recorridoRadioButton(g24_menos,popular_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g24_menos" type="radio" id="popular_menos" value="I-"
                                                    onclick="recorridoRadioButton(g24_mas,popular_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Buen Vecino</td>
                                            <td class="center"><label>
                                                    <input name="g24_mas" type="radio" id="buen_vecino_mas" value="S"
                                                    onclick="recorridoRadioButton(g24_menos,buen_vecino_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g24_menos" type="radio" id="buen_vecino_menos" value="S-"
                                                    onclick="recorridoRadioButton(g24_mas,buen_vecino_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Devoto</td>
                                            <td class="center"><label>
                                                    <input name="g24_mas" type="radio" id="devoto_mas" value="C"
                                                    onclick="recorridoRadioButton(g24_menos,devoto_menos)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="center"><label>
                                                    <input name="g24_menos" type="radio" id="devoto_menos" value="C-"
                                                    onclick="recorridoRadioButton(g24_mas,devoto_mas)"/>
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>





                        </div>

                        <button class="btn-small waves-effect waves-light brown darken-3 right" type="submit" name="action">
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