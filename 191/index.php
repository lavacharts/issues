<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;

$lava = new Lavacharts;

$finances = $lava->DataTable();
$finances->addDateColumn('Year')
         ->addNumberColumn('Sales')
         ->addNumberColumn('Expenses')
         ->addNumberColumn('Total')
         ->addRow(['2009-1-1', 1100, 490, 1590])
         ->addRow(['2010-1-1', 1000, 400, 1400])
         ->addRow(['2011-1-1', 1400, 450, 1850])
         ->addRow(['2012-1-1', 1250, 600, 1850])
         ->addRow(['2013-1-1', 1100, 550, 1650]);

$lava->ComboChart('Finances', $finances, [
    'width' => 800,
    'height' => 600,
    'isStacked' => true,
    'title' => 'Company Performance',
    'titleTextStyle' => [
        'color'    => 'rgb(123, 65, 89)',
        'fontSize' => 16
    ],
    'seriesType' => 'bars',
    'vAxes' => [
        [
            'format' => 'decimal',
            'title' => 'Rooms',
            'textStyle' => [
                'color' => 'blue'
            ]
        ],
        [
            'format' => 'decimal',
            'title' => 'Capacity',
            'textStyle' => [
                'color' => 'blue',
            ]
        ]
    ],
    'series' => [
        2 => [
            'targetAxisIndex' => 1,
            'type' => 'line',
            'color' => 'green',
            'fontSize' => 13,

        ]
    ]
]);

?>


<html>
<head>
    <title>Multiple Charts</title>
</head>
<body>
<?php
    for ($a=1; $a <= 13; $a++) {
        echo '<div id="chart-'.$a.'"></div>';

        echo $lava->render('LineChart', 'chart-'.$a);
    }
?>
</body>
</html>
