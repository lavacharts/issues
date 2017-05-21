<?php
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $currency = new Khill\Lavacharts\DataTables\Formats\NumberFormat();
    $currency->pattern('$###,###');
    $currency->negativeColor('red');
    $currency->negativeParens(true);

    $revenueDataTable = $lava->DataTable()
        ->addStringColumn('Month')
        ->addNumberColumn('Revenue', $currency);

    // $revenueDataTable->addRows([
    //     ['2015-1-1', rand(100000,500000)],
    //     ['2015-2-1', rand(100000,500000)],
    //     ['2015-3-1', rand(100000,500000)],
    //     ['2015-4-1', rand(100000,500000)],
    //     ['2015-5-1', rand(100000,500000)],
    //     ['2015-6-1', rand(100000,500000)],
    //     ['2015-7-1', rand(100000,500000)],
    //     ['2015-8-1', rand(100000,500000)],
    // ]);

    $lava->AreaChart('Revenue', $revenueDataTable, [
        'title' => "Revenue",
        'colors' => ['green'],
        'vAxis' => ['format' => '$###,###'],
    ]);
?>

<html>
    <head>
        <title>Lava Tests</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    </head>
    <body>
        <input type="button" id="load" value="Load Data" />
        <div id="chart"></div>
        <?php
            echo $lava->Render('AreaChart', 'Revenue', 'chart');
        ?>

        <script type="text/javascript">
            lava.ready(function() {
                $('#load').click(function(){
                    $.getJSON('http://localhost:8000/data.php', function (data) {
                        lava.loadData('Revenue', data, function (c) {
                            console.log(c);
                        });
                    });
                });
            });
        </script>
    </body>
</html>
