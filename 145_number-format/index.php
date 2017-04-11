<?php
    require('../../lavacharts/src/Lavacharts.php');
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $formatter = $lava->NumberFormat([
        'fractionDigit' => 2,
        'suffix' => '%'
    ]);

    $data = $lava->DataTable()
        ->addDateColumn('Month')
        ->addNumberColumn('Things', $formatter);

    $data->addRows([
        ['2015-1-1', rand(0,100)],
        ['2015-2-1', rand(0,100)],
        ['2015-3-1', rand(0,100)],
        ['2015-4-1', rand(0,100)],
        ['2015-8-1', rand(0,100)],
    ]);

    $lava->LineChart('Revenue', $data, [
        'width' => 600
    ]);
?>

<html>
    <head>
        <title>Lava Tests</title>
    </head>
    <body>
      <div id="perf_div"><i class="fa fa-spinner fa-pulse"></i></div>
        <?= $lava->render('LineChart', 'Revenue', 'perf_div'); ?>
    </body>
</html>
