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

    //header('Cache-Control: no-cache, must-revalidate');
    //header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    //header('Content-type: application/json');

    echo $revenueDataTable->toJson();
?>
