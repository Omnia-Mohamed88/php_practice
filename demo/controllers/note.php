<?php

$config = require('config.php');
// require ('functions.php');


$db = new Database($config['database']);

$heading = "My Note";
$cuurentuserid = 1;

// $id=$_GET['id'];
$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();
// dd($note);
// if (! $note){
//     abort();
// }
// $forbidden = 403 ;
authorize($note['user_id'] === $cuurentuserid);

require "views/note.view.php";
