<?php
require "Core/functions.php";
// require "bootstrap.php";
require "Core/Database.php";
spl_autoload_register(function ($class) {
    require "Core/{$class}.php";
});
require "Core/Response.php";
$router = require "Core/Router.php";

$config = require('config.php');

// Set default value for $id if 'id' parameter is not provided
$id = $_GET['id'] ?? null;

$db = new Database($config);

if ($id !== null) {
    $query = "select * from posts where id = :id";
    $posts = $db->query($query, [':id' => $id])->fetch();
    dd($posts);
} else {
    $router;
}