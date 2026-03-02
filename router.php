<?php
### Verifico la ruta de direccionamiento ingnorando el query que va acompañado del path
// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

### PRIMERA VERSION DE ENRUTAMIENTO
// if($url === '/'){
//     require 'controller/index.php';
// }else if($url === '/about'){
//     require 'controller/about.php';
// }else if($url === '/contact'){
//     require 'controller/contact.php';
// }

### (1) SEGUNDA VERSION USANDO array_key_exists
$routes = [
    '/' => 'controller/index.php',
    '/about' => 'controller/about.php',
    '/contact' => 'controller/contact.php',
];

### (3)CREO UNA FUNCION PARA GESTIONAR MIS CODIGOS DE RESPUESTA
function abort ($code = 404){
    http_response_code($code);
    require "view/{$code}.php";
}

### (2) CON ESTA FUNCION ACCEDO AL VALOR DE MI ARREGLO
function routerToController($url,$routes){
    if(array_key_exists($url,$routes)){
        require $routes[$url];
    }else{
        abort();
    }
};

### LLAMAR A MI ROUTER 
routerToController($url,$routes);