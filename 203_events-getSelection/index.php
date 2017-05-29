<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;

$lava = new Lavacharts;

$classTable = $lava->DataTable();
$classTable->addColumns([
    ['string', 'things'],
    ['number', 'count'],
])->addRows([
    ['tacos', 25],
    ['hotdogs', 25],
    ['salad', 25],
    ['pizza', 25],
]);

$lava->PieChart('class_data', $classTable, [
    'legend' => 'right',
    'events' => [
        'select' => 'selectCallback'
    ]
]);

?>

<html>
<head>
    <title></title>
</head>
<body>

    <div id="chart"></div>
    <script>
        function selectCallback (event, chart, datatable) {
            var selection = chart.getSelection();

            if (selection.length) {
                var pieSliceLabel = datatable.getValue(selection[0].row, 0);
                window.location.href = 'http://www.google.com/search?q=' + pieSliceLabel;
            }
        }
    </script>

    <div id="class-div"></div>
    <?= $lava->render('PieChart', 'class_data', 'class-div') ?>

</body>
</html>
