<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\DataTables\JoinedDataTable;

$lava = new Lavacharts;

$data1 = $lava->DataTable();
$data1->addColumn('number', 'X');
$data1->addColumn('number', 'Y 1');
$data1->addRows([
    [1, 3],
    [2, 6],
    [5, 5],
    [6, 8],
    [8, 2],
    [9, 5],
    [10, 5],
    [12, 4],
    [13, 8]
]);

$data2 = $lava->DataTable();
$data2->addColumn('number', 'X');
$data2->addColumn('number', 'Y 2');
$data2->addRows([
    [1, 5],
    [3, 1],
    [4, 3],
    [5, 9],
    [6, 4],
    [8, 5],
    [9, 7],
    [11, 7],
    [16, 3]
]);

$joined = new JoinedDataTable($data1, $data2, [
    'height' => 300,
    'width' => 600
]);

$lava->LineChart('Joined', $joined, [ 'elementId' => 'chart' ]);

?>

<html>
<head>
    <title></title>
</head>
<body>

    <div id="chart">
    <?= $lava->renderAll(); ?>

</body>
</html>
