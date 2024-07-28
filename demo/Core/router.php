<?php 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require('routes.php');
function routerToController($uri , $routes){
if (array_key_exists($uri , $routes)){
    require $routes[$uri];
}else {
   abort();
}
}

function abort ($code = 404){ // setting the default code to be 404
    http_response_code($code);
    require "views/partials/{$code}.php";
    die();

}

routerToController($uri , $routes);