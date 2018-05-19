<?php
include 'db_connection.php';
$page = $_REQUEST['page'];



if ($page == 'show') {
    $id = $_REQUEST['id'];
    show($id);
}
elseif ($page == 'create') {
    create();
}

function show($id) {

    global $connection;
    $object = array(
        'title' => '',
        'description' => '',
        'code' => '',
        'submitted_at' => '',
    );

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

    include 'question_show_view.php';
}

function create() {
    include 'question_create_view.php';
}