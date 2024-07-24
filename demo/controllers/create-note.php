<?php
$heading = "Create Note";
$config = require('config.php');

$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD']== "POST" ){
    $errors=[];
    if (strlen($_POST['body'])===0){
     $errors['body'] = "a body is required ";
    }
    if (strlen($_POST['body'])>1000){
        $errors['body'] = "body length should noyr be more than 1000 char";
    }
    if (empty($errors)){
        $db->query('INSERT INTO notes (body,user_id) VALUES(:body , :user_id)',[
            'body' => $_POST['body'],
            'user_id'=>1
       ]);
       
       } 
    }

require 'views/note-create.view.php';