<?php
require "functions.php";
// require "router.php";

//conecting to the mysql database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8";
$pdo = new PDO($dsn ,'root' );
$statement = $pdo -> prepare("select * from posts");
$statement -> execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}