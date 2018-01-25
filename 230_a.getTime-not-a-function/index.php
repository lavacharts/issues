<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;
use Carbon\Carbon;
use League\Period\Period;

$lava = new Lavacharts;

$spreadlines = $lava->DataTable();
$spreadlines->addDateTimeColumn('Timestamp')
            ->addNumberColumn('Spread')
            ->addRoleColumn('string', 'tooltip');

foreach([Carbon::now()] as $l) {
    $spreadlines->addRow([$l, -4.5, 'TODO:']);
};

$period = new Period( new \DateTime('2018-01-21 11:00:00'), new \DateTime('2018-01-21 14:00:00'));

$hTicks = [];

foreach ($period->getDatePeriod('1 HOUR') as $immutable) {
    $datetime = new \DateTime($immutable->format(\DateTime::ATOM));
    $hTicks[] = [ 'v' => $lava->Date($datetime) ];
}

$linechart = $lava->LineChart('Spread', $spreadlines,
    [
        'title' => 'Spread Graph',
        'height' =>  800,
        'width' => 1200,
        'vAxis'  => [
            'textStyle' => ['color' => '#666'],
            'ticks' => [ ['v' => -4.0, 'f' => 'TT-4.0'], [ 'v' => -4.05, 'f' => '-115'], [ 'v' => -4.1, 'f' => '-120'], [ 'v' => -4.15, 'f' => '-125'], [ 'v' => -4.2, 'f' => '-130'], [ 'v' => -4.25, 'f' => '+115'], [ 'v' => -4.3, 'f' => '+110'],[ 'v' => -4.35, 'f' => '+105'], [ 'v' => -4.4, 'f' => '+100'], [ 'v' => -4.45, 'f' => '-105'], [ 'v' => -4.5, 'f' => 'TT-4.5'], [ 'v' => -4.55, 'f' => '-115'], [ 'v' => -4.6, 'f' => '-120'], [ 'v' => -4.65, 'f' => '-125'], [ 'v' => -4.7, 'f' => '-130'], [ 'v' => -4.75, 'f' => '+115'], [ 'v' => -4.8, 'f' => '+110'],[ 'v' => -4.85, 'f' => '+105'], [ 'v' => -4.9, 'f' => '+100'], [ 'v' => -4.95, 'f' => '-105'], [ 'v' => -5.0, 'f' => 'TT-5.0']],
            'textStyle' => ['fontSize' => 10],
        ],
        'hAxis' => [
            'ticks' => $hTicks
        ],
        'events' => [
            'ready' => 'chartReady'
        ],
    ]
);


?>

<html>
<head>
    <title></title>
</head>
<body>

    <div id="spreadgraph"></div>

    <?= $lava->render('LineChart', 'Spread', 'spreadgraph'); ?>

</body>
</html>
