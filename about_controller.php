<?php
$page = $_REQUEST['page'];

if ($page == 'about') {
    about();
}

function about() {
    include 'about_view.php';
}
