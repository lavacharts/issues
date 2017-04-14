<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\Support\JavascriptDate as Date;

$daysToMilliseconds = function ($days) {
    return $days * 24 * 60 * 60 * 1000;
};

$lava = new Lavacharts;

$data = $lava->DataTable();
$data->addColumn('string', 'Task ID');
$data->addColumn('string', 'Task Name');
$data->addColumn('date', 'Start Date');
$data->addColumn('date', 'End Date');
$data->addColumn('number', 'Duration');
$data->addColumn('number', 'Percent Complete');
$data->addColumn('string', 'Dependencies');
$data->addRows([
    ['Research', 'Find sources',
     new Date(2015, 0, 1), new Date(2015, 0, 5), null,  100,  null],
    ['Write', 'Write paper',
     null, new Date(2015, 0, 9), $daysToMilliseconds(3), 25, 'Research,Outline'],
    ['Cite', 'Create bibliography',
     null, new Date(2015, 0, 7), $daysToMilliseconds(1), 20, 'Research'],
    ['Complete', 'Hand in paper',
     null, new Date(2015, 0, 10), $daysToMilliseconds(1), 0, 'Cite,Write'],
    ['Outline', 'Outline paper',
     null, new Date(2015, 0, 6), $daysToMilliseconds(1), 100, 'Research']
]);

$lava->GanttChart('Paper', $data, [
    'height' => 275
]);
?>

<html>
<head>
    <title></title>
</head>
<body>

    <div id="chart">
    <?= $lava->render('GanttChart', 'Paper', 'chart'); ?>

</body>
</html>
