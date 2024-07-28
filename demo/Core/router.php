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
// class Router{
//     public $routes = [];
//     public function get($uri , $controller){
//         $this->routes[]=[
//             'uri' => $uri,
//             'controller'=>$controller,
//             'method' => 'GET'
//         ];
        
//     }
//     public function post($uri,$controller){
//         $this->routes[]=[
//             'uri' => $uri,
//             'controller'=>$controller,
//             'method' => 'POST'
//         ];
        

//     }
//     public function delete($uri,$controller){
//         $this->routes[]=[
//             'uri' => $uri,
//             'controller'=>$controller,
//             'method' => 'DELETE'
//         ];

//     }
//     public function patch($uri,$controller){
//         $this->routes[]=[
//             'uri' => $uri,
//             'controller'=>$controller,
//             'method' => 'PATCH'
//         ];

//     }
//     public function put($uri,$controller){
//         $this->routes[]=[
//             'uri' => $uri,
//             'controller'=>$controller,
//             'method' => 'PUT'
//         ];

//     }

