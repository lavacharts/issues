<?php
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $ewa = $lava->DataTable();

    $ewa->addStringColumn('Infraction')
        ->addNumberColumn('Percent')
        ->addRoleColumn('string', 'style')
        ->addRoleColumn('string', 'annotation');

    $ewa->addRows([
        ['Finishing',            20, 'green', '20%'],
        ['Evenness / Roughness', 13, 'orange',  '13%'],
        ['Cracking / Damages',   34, 'red', '34%'],
        ['Jointing / Alignment', 22, 'blue', '22%']
    ]);

    $lava->ColumnChart('EWA', $ewa, [
        'title'=> "EXTERNAL WALL",
        'legend' => 'none',
        'vAxis'=> [
            'title'=>'% Non-Compliances'
        ],
        'height' => 400,
        'width' => 600
    ]);
 ?>

<html>
    <head>
        <title>Lava Tests</title>
    </head>
    <body>
      <div id="perf_div"></div>
        <?= $lava->render('ColumnChart', 'EWA', 'perf_div'); ?>
    </body>
</html>
