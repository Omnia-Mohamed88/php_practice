<?php

$config = require('config.php');
// require ('functions.php');


$db = new Database($config['database']);

$heading = "My Note";
// $id=$_GET['id'];
$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();
// dd($note);
if (! $note){
    abort();
}
$cuurentuserid = 1;
// $forbidden = 403 ;
if ($note['user_id'] != $cuurentuserid){
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
