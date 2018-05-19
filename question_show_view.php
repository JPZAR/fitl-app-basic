<!DOCTYPE html>
<html>
    <head>
        <title><?= $object['title'] ?></title>
    </head>
    <body>
        <h1><?= $object['title'] ?></h1>
        <p><?= $object['description'] ?></p>
        <pre>
            <?= $object['code'] ?>
        </pre>
        <p><?= $object['submitted_at'] ?></p>
    </body>
</html>
