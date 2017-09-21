<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;

$lava = new Lavacharts;

$chartname = $lava->DataTable();
$chartname->addDateColumn('Date')
    ->setDateTimeFormat('Y-m-d')
// ->setTimezone('usersTimezone')
    ->addNumberColumn('count')
    ->addRoleColumn('string', 'annotation');

$chartname->addRow(['2017-1-1', '40', 'forty']);
$chartname->addRow(['2017-1-2', '41', 'forty one']);
$chartname->addRow(['2017-1-3', '42', 'forty two']);

$lava->AreaChart('chartname', $chartname, [
    'animation' => ['startup' => true, 'duration' => 1000, 'easing' => 'linear'],
    'legend' => ['position' => 'none'],
    'vAxis' => ['format' => 'short', 'minValue' => 4],
    'fontName' => 'Helvetica Neue',
    'chartArea' => ['width' => '90%', 'height' => '85%'],
    'colors' => ['#b0b3e3'],
]);

?>

<html>
<head>
    <title></title>
</head>
<body>

<div id="chart">
    <?= $lava->render('AreaChart', 'chartname', 'chart'); ?>

</body>
</html>
