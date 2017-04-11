<?php
    require('../../lavacharts/src/Lavacharts.php');
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $revenueDataTable = $lava->DataTable()
        ->addStringColumn('Dude')
        ->addNumberColumn('Price')
        ->addNumberColumn('benchmark');

    $revenueDataTable->addRows([
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
        ['blahblahblah', rand(100000,500000), rand(100000,500000)],
    ]);

    $lava->BarChart('Revenue', $revenueDataTable, [
        'title' => 'Average fees',
        'height' => 800
    ]);
?>

<html>
    <head>
        <title>Lava Tests</title>
    </head>
    <body>
      <div id="perf_div"></div>
        <?= $lava->render('BarChart', 'Revenue', 'perf_div'); ?>
    </body>
</html>
