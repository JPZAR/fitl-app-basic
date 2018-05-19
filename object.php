<?php
$id = $_REQUEST['id'];

$object = array(
    'title' => '',
    'description' => '',
    'code' => '',
    'submitted_at' => '',
);

//DB credentials
$servername = 'localhost';
$username = 'root';
$password = '';

//Create connection
$connection = new mysqli($servername, $username, $password);

//Check for error
if ($connection->connect_error) {
    echo 'Connection Failed:' . $connection->connect_error;
    exit;
}
//otherwise, print success
/*else {
    echo 'Connection Successful';
}*/
//Connect to the 'fitl' database
$connection->select_db('fitl');

//Query to select the object
$sql = 'Select * from questions where id = ' . $id;

//execute the query
$result = $connection->query($sql);

//check for and retrieve the object
if ($result->num_rows > 0) {
    $object = $result->fetch_assoc();
    /*echo '<pre>';
    print_r($object);
    echo '</pre>';*/
}
/*
//set the object variables based on the id value from the url
if ($id == 1) {
    $object = array(
        'title' => 'Programming Question #1',
        'question' => 'I\'m having trouble displaying a JS alert.',
        'description' => 'I think I\'m using the correct function, but I can\'t figure out what\'s wrong. Could you point me in the right direction?',
        'code' => 'alert(This is a message)',
        'date' => 'June 11, 2015',
    );
}
elseif ($id == 2) {
    $object = array(
        'title' => 'Programming Question #2',
        'question' => 'My HTML list isn\'t displaying properly.',
        'description' => 'I think I\'m using the right list element, but it\'s not showing up correctly. Any thoughts?',
        'code' => '&lt;ul&gt;
                item 1
                item 2
                item 3
            &lt;/ul&gt;',
        'date' => 'June 16, 2015',
    );
}*/




?>
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
