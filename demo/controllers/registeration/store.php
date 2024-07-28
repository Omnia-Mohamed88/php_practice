<?php

$errors =[];
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (! Validator::email($email)){
    $errors['email'] = "please provide a valid email addresse";
}
if (! Validator::email($password ,7,255)){
    $errors['password'] = "please provide a valid password";
}if(! empty($errors)){
    return "views/registration/create.view.php";
}}