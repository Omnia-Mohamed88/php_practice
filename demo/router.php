<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes =[
    '/laracast-php/demo/' => 'controllers/index.php',
    '/laracast-php/demo/about' => 'controllers/about.php',
    '/laracast-php/demo/contact' => 'controllers/contact.php',
    '/laracast-php/demo/notes' => 'controllers/notes.php',

];
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