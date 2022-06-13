<?php

//será criado apenas um arquivo index.php que orquestrara os outos arquivos


//direcionando o caminho do autoload
include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName,
        'method' => $methodName, 
    ];
}

//rotas=> o que uma URL acessa do conteudo
//executando a funcao createRoute criada logo acima
$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),   
];   

//criado apenas pra utilizar o notFoundAction() uma unica vez
if (false === isset($routes[$url])) {
    (new ErrorController()) ->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName =$routes[$url]['method'];

(new $controllerName()) ->$methodName();



