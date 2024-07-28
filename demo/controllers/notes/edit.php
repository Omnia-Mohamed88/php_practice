<?php

$config = require('config.php');
// require ('functions.php');
$errors = [];

$db = new Database($config['database']);

$heading = "Edit Notes";
$cuurentuserid = 1;

if (!isset($_GET['id'])) {
    die('Error: "id" parameter is missing.');
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    $note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();

    authorize($note['user_id'] === $cuurentuserid);

    $db->query('update notes set body = :body where id = :id', [
        'body' => $body,
        'id' => $id
    ]);


    header('location: http://localhost/laracast-php/demo/notes');
    exit();
} else {
    $note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();

    authorize($note['user_id'] === $cuurentuserid);
    require "views/notes/edit.view.php";


}





// $config = require('config.php');


// $db = new Database($config['database']);


// $notes = $db->query('select * from notes')->get();
// dd($notes);

