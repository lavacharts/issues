<?php
    require('../../lavacharts/src/Lavacharts.php');
    require('../vendor/autoload.php');

    $lava = new Khill\Lavacharts\Lavacharts;

    $popularity = $lava->DataTable();

    $popularity->addStringColumn('Country')
               ->addNumberColumn('Popularity')
               ->addRow(array('Germany', 200))
               ->addRow(array('United States', 300))
               ->addRow(array('Brazil', 400))
               ->addRow(array('Canada', 500))
               ->addRow(array('France', 600))
               ->addRow(array('RU', 700));

    $lava->GeoChart('Pop')->setOptions([
      'datatable' => $popularity,
      'events'    => ['select' => $lava->Select('selectHandler')]
    ]);
?>

<html>
    <head>
        <title>Lava Tests</title>
    </head>
    <body>      
      <div id="chart"></div>
      <script>
            function selectHandler (event, chart) {
                var selection = chart.getSelection();
                var message ='';

                for (var i = 0; i < selection.length; i++) {
                    var item = selection[i];
        
                    if (item.row != null && item.column != null) {
                        message += '{row:' + item.row + ',column:' + item.column + '}';
                    } else if (item.row != null) {
                        message += '{row:' + item.row + '}';
                    } else if (item.column != null) {
                        message += '{column:' + item.column + '}';
                    }
                }

                if (message == '') {
                    message = 'nothing';
                }

                console.log(selection);
                console.log('Selected: ' + message);
            }
        </script>
        <?= $lava->render('GeoChart', 'Pop', 'chart'); ?>
    </body>
</html>
