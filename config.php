<?php

/*echo 'config'; -> teste para ver se aparece o 'config'
echo $_SERVER['REQUEST_URI']; -> verificar o que aparece no servidor*/

/*------------------------------- ESSA PARTE FOI COLOCADA EM ROUTER.PHP
function verificarUrl($rota) { //para criar novas rotas dentro do /admin
    $caminho = $_SERVER['REQUEST_URI'];

    //tira todos os caract que tiverem a barra normal para se transformar na barra regular
    $rota = str_replace('/', '\/', $rota); //toda vez que tiver o / vai virar o \/
    //compara se está batendo com o dado que quero. Tem que comparar com o que está iniciando(^) e ($)limitando o final
    if(preg_match('/^' . $rota . '$/', $caminho)) {
        return true;
    }
}-------------------------------*/

/* -------------------- ESSA PARTE FOI COLOCADA EM
if(verificarUrl("/admin?(.*)")) { //significa que pode aparecer qq coisa depois que será aceito na página
    require __DIR__ . '/admin/routes.php';
}else if (verificarUrl('/admin')) {
    require __DIR__ . '/admin/routes.php';
}else if (verificarUrl("/")) {
    require __DIR__ . '/site/routes.php';
}else {
    echo 'Página não encontrada';
}
-------------------------------*/

/*if($_SERVER['REQUEST_URI'] == "/admin") {
    require __DIR__ . '/admin/routes.php'; //linkar para abrir o conteúdo da página routes.php
}else if ($_SERVER['REQUEST_URI'] == "/") {
    require __DIR__ . '/site/routes.php';
}else {
    echo 'Página não encontrada';
    http_response_code(404); /*antes de colocar esse código o erro da página dava 200(em inspecionar/network/tese-status)
 Ao colocar esse 'http_response_code(404) o erro do status muda para 404, que é o ideal 
}*/

require_once(__DIR__ . '/app/Router.php');
require_once(__DIR__ . '/app/Controller/PainelController.php');
require_once(__DIR__ . '/app/Rota.php');

$builder = require_once __DIR__ . '/container.php';

use App\Controller\CategoriaController;
use App\Router;
use App\Rota;
use App\Controller\PainelController;

$caminho = $_SERVER['REQUEST_URI'];
$router = new Router($caminho);
$controller = new PainelController();
$categoriaController = $builder->get(CategoriaController::class);

$dados = $_POST; //DADOS = A TUDO O QUE VEM DO POST

$router->add(new Rota(
        '/', 
        new App\Controller\SiteController,
        'home'
));

$router->add(new Rota(
    '/admin', 
    $controller,
    'listar'
));

$router->add(new Rota(
    '/admin/', 
    $controller,
    'listar'
));

$router->add(new Rota(
    '/admin/login', 
    $controller,
    'logar'
));

$router->add(new Rota(
    '/admin/logout', 
    $controller,
    'logout'
));

$router->add(new Rota(
    '/admin/categoria/listar',
    $categoriaController,
    'listar'
));

$router->add(new Rota(
    '/admin/categoria/cadastrar',
    $categoriaController,
    'cadastrar'
));

$router->add(new Rota(
    '/admin/categoria/novo',
    $categoriaController,
    'novo',
    $params
));

$router->handler();