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

    $lava->LineChart('Revenue', $revenueDataTable, [
      'title' => "Revenue",
      'height' => 400,
        'colors' => ['green'],
        'vAxis' => ['format' => '$###,###'],
    ]);
?>

<html>
    <head>
        <title>Lava Tests</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    </head>
    <body>      
      <div id="perf_div"><i class="fa fa-spinner fa-pulse"></i></div>
        <?= $lava->render('LineChart', 'Revenue', 'perf_div'); ?>
    </body>
</html>
