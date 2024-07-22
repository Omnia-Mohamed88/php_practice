<?php
require "functions.php";
require "Database.php";
// require "router.php";
$config = require('config.php');

$db = new Database($config);
$posts = $db -> query("select * from posts")-> fetchAll(PDO::FETCH_ASSOC);
dd($posts);