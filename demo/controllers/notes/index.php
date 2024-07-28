<?php


$config = require('config.php');


$db = new Database($config['database']);

$heading = "My Notes";

$notes = $db->query('select * from notes')->get();
// dd($notes);

require "views/notes/notes.view.php";
