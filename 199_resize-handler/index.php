<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;

$lava = new Lavacharts;


$data = $lava->DataTable([
    ['date', 'Dates'],
    ['number', 'High Temp'],
    ['number', 'Average Temp'],
    ['number', 'Low Temp']
], [
    ['2014-10-1',  67, 65, 62],
    ['2014-10-2',  68, 65, 61],
    ['2014-10-3',  68, 62, 55],
    ['2014-10-4',  72, 62, 52],
    ['2014-10-5',  61, 54, 47],
    ['2014-10-6',  70, 58, 45],
    ['2014-10-7',  74, 70, 65],
    ['2014-10-8',  75, 69, 62],
    ['2014-10-9',  69, 63, 56],
    ['2014-10-10', 64, 58, 52],
    ['2014-10-11', 59, 55, 50],
    ['2014-10-12', 65, 56, 46],
    ['2014-10-13', 66, 56, 46],
    ['2014-10-14', 75, 70, 64]
 ]);


$lava->LineChart('Paper', $data, [
    'height' => 275
]);
?>

<html>
<head>
    <title></title>
</head>
<body>

    <div id="chart">
    <?= $lava->render('LineChart', 'Paper', 'chart'); ?>

</body>
</html>
