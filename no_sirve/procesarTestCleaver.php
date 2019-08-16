<?php

$d_mas = 0;
$d_menos = 0;
$d_total = 0;
$i_mas = 0;
$i_menos = 0;
$i_total = 0;
$s_mas = 0;
$s_menos = 0;
$s_total = 0;
$c_mas = 0;
$c_menos = 0;
$c_total = 0;

if ($_POST) {
    foreach ($_POST as $clave => $valor) {
        //echo "El valor de $clave es: $valor <br>";

        if (strcmp($valor, 'D') == 0) {
            ++$d_mas;
        }

        if (strcmp($valor, 'D-') == 0) {
            ++$d_menos;
        }

        if (strcmp($valor, 'I') == 0) {
            ++$i_mas;
        }

        if (strcmp($valor, 'I-') == 0) {
            ++$i_menos;
        }

        if (strcmp($valor, 'S') == 0) {
            ++$s_mas;
        }

        if (strcmp($valor, 'S-') == 0) {
            ++$s_menos;
        }

        if (strcmp($valor, 'C') == 0) {
            ++$c_mas;
        }

        if (strcmp($valor, 'C-') == 0) {
            ++$c_menos;
        }
    }
}

$d_total = $d_mas - $d_menos;
$i_total = $i_mas - $i_menos;
$s_total = $s_mas - $s_menos;
$c_total = $c_mas - $c_menos;

echo 'D+: '.$d_mas.'<br>';
echo 'D-: '.$d_menos.'<br>';
echo 'D TOTAL: '.$d_total.'<br>';
echo 'I+: '.$i_mas.'<br>';
echo 'I-: '.$i_menos.'<br>';
echo 'I TOTAL: '.$i_total.'<br>';
echo 'S+: '.$s_mas.'<br>';
echo 'S-: '.$s_menos.'<br>';
echo 'S TOTAL: '.$s_total.'<br>';
echo 'C+: '.$c_mas.'<br>';
echo 'C-: '.$c_menos.'<br>';
echo 'C TOTAL: '.$c_total.'<br>';

echo '<div id="line_top_x"></div>';

echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>";

echo "<script type='text/javascript'>

google.charts.load('current', { 'packages': ['line'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Day');
            data.addColumn('number', 'Guardians of the Galaxy');

            data.addRows([
                ['D', $d_total],
                ['I', $i_total],
                ['S', $s_total],
                ['C', $c_total]
            ]);

            var options = {
                chart: {
                    title: 'Box Office Earnings in First Two Weeks of Opening',
                    subtitle: 'in millions of dollars (USD)'
                },
                width: 900,
                height: 500,
                axes: {
                    x: {
                        0: { side: 'top' }
                    }
                }
            };

            var chart = new google.charts.Line(document.getElementById('line_top_x'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }



</script>";
