<?php
session_start();
/*
 * Main Controller
 */
//get the connection

require("./../library/connections.php");
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}
switch ($action) {
    default:
        header("Location: ../view/interviewq.php");
}

