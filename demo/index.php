<?php
require "functions.php";
require "Database.php";
require "router.php";

$config = require('config.php');

// Set default value for $id if 'id' parameter is not provided
$id = $_GET['id'] ?? null;

$db = new Database($config);

if ($id !== null) {
    $query = "select * from posts where id = :id";
    $posts = $db->query($query, [':id' => $id])->fetch();
    dd($posts);
} else {
    require "router.php";

}