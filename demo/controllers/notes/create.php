<?php
require 'validator.php'; 

$heading = "Create Note";
$config = require('config.php');
$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD']== "POST" ){
    $errors=[];
    $validator = new Validator();
    if (! $validator -> email('hello_frometax@gmail.com')){
        dd("That is not a valid email");
    }
    if (! $validator::string($_POST['body'],1,1000)) {
        $errors['body'] = "A body of no more than 1,000 character is required";
    }
  
    if (empty($errors)){
        $db->query('INSERT INTO notes (body,user_id) VALUES(:body , :user_id)',[
            'body' => $_POST['body'],
            'user_id'=>1
       ]);
       
       } 
    }

require 'views/notes/note-create.view.php';