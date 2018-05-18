<?php
$type = $_REQUEST['type'];

if ($type == 'car'){
    $vehicle = array(
        'make' => 'Honda',
        'model' => 'Jazz',
        'year' => '2016',
    );
}
elseif ($type == 'truck') {
    $vehicle = array(
        'make' => 'Toyota',
        'model' => 'Hilux',
        'year' => '2006',
    );
}
else {
    $vehicle = array(
        'make' => '',
        'model' => '',
        'year' => '',
    );
}
?>

<!DOCTYPE html>
    <html>
    <head>
        <title><?= $vehicle['make'] ?></title>
    </head>
    <body>

        <h1>The make is: <?= $vehicle['make'] ?></h1>
        <p>The model is: <?= $vehicle['model'] ?></p>
        <p>The year is: <?= $vehicle['year'] ?></p>
    </body>
</html>
