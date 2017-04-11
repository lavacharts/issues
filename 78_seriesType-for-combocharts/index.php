<?php
    require('../../lavacharts/src/Lavacharts.php');
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $revenueDataTable = $lava->DataTable()
        ->addDateColumn('Dates')
        ->addNumberColumn('Revenue')
        ->addNumberColumn('Expenses')
        ->addNumberColumn('Trend');

    $revenueDataTable->addRows([
        ['2015-1-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
        ['2015-2-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
        ['2015-3-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
        ['2015-4-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
        ['2015-5-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
        ['2015-6-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
        ['2015-7-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
        ['2015-8-1', rand(100000,500000), rand(100000,500000), rand(100000,500000)],
    ]);

    $lava->ComboChart('chart', $revenueDataTable, [
        'title' => "Shopping Cart Conversions by New, Upgrading, and Guests",
        'isStacked' => true,
        'legend' => ['position' => 'bottom'],
        'hAxis' => ["format" => 'MMM-yy'],
        'seriesType' => 'bars',
        'series' => [
            2 => ['type' => 'line']
        ]
    ]);
?>

<html>
    <head>
        <title>Lava Tests</title>
    </head>
    <body>      
      <div id="perf_div"></div>
        <?= $lava->render('ComboChart', 'chart', 'perf_div'); ?>
    </body>
</html>
