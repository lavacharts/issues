<?php
    require('../../lavacharts/src/Lavacharts.php');
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $revenueDataTable = $lava->DataTable()
        ->addStringColumn('Month')
        ->addNumberColumn('Revenue');

    $revenueDataTable->addRows([
        ['2015-1-1', rand(100000,500000)],
        ['2015-2-1', rand(100000,500000)],
        ['2015-3-1', rand(100000,500000)],
        ['2015-4-1', rand(100000,500000)],
        ['2015-5-1', rand(100000,500000)],
        ['2015-6-1', rand(100000,500000)],
        ['2015-7-1', rand(100000,500000)],
        ['2015-8-1', rand(100000,500000)],
    ]);

    $lava->LineChart('Revenue', $revenueDataTable,  [
        'events' => [
            'ready' => 'getImageCallback'
        ]
    ]);
?>

<html>
    <head>
        <title>Lava Tests</title>
        <script type="text/javascript">
            function getImageCallback (event, chart) {
                console.log(chart.getImageURI());
                // This will return in the form of "data:image/png;base64,iVBORw0KGgoAAAAUA..."
            }
        </script>
    </head>
    <body>
      <div id="perf_div"><i class="fa fa-spinner fa-pulse"></i></div>
        <?= $lava->render('LineChart', 'Revenue', 'perf_div'); ?>
    </body>
</html>
