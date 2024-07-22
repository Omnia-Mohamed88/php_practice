<?php
require "functions.php";
require "Database.php";
// require "router.php";
$config = require('config.php');
$id = $_GET['id'];
$db = new Database($config);
$query = "select * from posts where id = :id";
$posts = $db ->query($query , [':id' => $id])->fetch();
dd($posts);