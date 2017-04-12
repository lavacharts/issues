<?php

require('../vendor/autoload.php');

use Khill\Lavacharts\Lavacharts;

$lava = new Lavacharts;

//


?>

<html>
<head>
    <title></title>
</head>
<body>

    <div id="chart">
    <?= $lava->render('', '', 'chart'); ?>

</body>
</html>
