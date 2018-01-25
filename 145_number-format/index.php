<?php
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $formatter = $lava->NumberFormat([
        'fractionDigit' => 2,
        'suffix' => ' DOLLA BILLS!'
    ]);

    $data = $lava->DataTable();

    $data->addDateColumn('Month');
    $data->addNumberColumn('Things', $formatter);
    $data->setDateTimeFormat('Y-m-d');

    $data->addRows([
        ['2015-1-1', rand(0,100)],
        ['2015-2-1', rand(0,100)],
        ['2015-3-1', rand(0,100)],
        ['2015-4-1', rand(0,100)],
        ['2015-8-1', rand(0,100)],
    ]);

    $lava->LineChart('Revenue', $data, [
        'elementId' => 'perf_div',
        'width' => 600
    ]);

    header('application/json');
    echo $lava->getVolcano()->find('Revenue')->getDataTable()->toJavascript();
?>

<html>
    <head>
        <title>Lava Tests</title>
    </head>
    <body>
      <div id="perf_div"><i class="fa fa-spinner fa-pulse"></i></div>
        <?= $lava->renderAll(); ?>
    </body>
</html>
