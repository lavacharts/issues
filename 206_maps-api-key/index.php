<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;

$lava = new Lavacharts();

$popularity = $lava->DataTable();
$popularity->addStringColumn('Country')
           ->addNumberColumn('Popularity')
           ->addRow(['Germany', 200])
           ->addRow(['United States', 300])
           ->addRow(['Brazil', 400])
           ->addRow(['Canada', 500])
           ->addRow(['France', 600])
           ->addRow(['RU', 700]);

$lava->GeoChart('206', $popularity, [
    'elementId' => 'chart',
]);

?>

<!doctype html>
<html>
<head>
    <title>206</title>
</head>
<body>

    <div id="chart">

    <?= $lava->renderAll(); ?>

</body>
</html>
