<?php

$config = require('config.php');
// require ('functions.php');

$db = new Database($config['database']);

$heading = "My Note";
$cuurentuserid = 1;

// Check if the 'id' parameter is set
if (!isset($_GET['id'])) {
    die('Error: "id" parameter is missing.');
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();

    authorize($note['user_id'] === $cuurentuserid);

    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: http://localhost/laracast-php/demo/notes');
    exit();
} else {
    $note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();

    authorize($note['user_id'] === $cuurentuserid);

    require "views/notes/show.view.php";
}
?>
