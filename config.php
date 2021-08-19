<?php

/*echo 'config'; -> teste para ver se aparece o 'config'
echo $_SERVER['REQUEST_URI']; -> verificar o que aparece no servidor*/

function verificarUrl($rota) { //para criar novas rotas dentro do /admin
    $caminho = $_SERVER['REQUEST_URI'];

    if($caminho == $rota) {
        return true;
    }
}

if(verificarUrl('/admin/')) {
    require __DIR__ . '/admin/routes.php';
}else if (verificarUrl('/admin')) {
    require __DIR__ . '/admin/routes.php';
}else if (verificarUrl("/")) {
    require __DIR__ . '/site/routes.php';
}else {
    echo 'Página não encontrada';
}

/*if($_SERVER['REQUEST_URI'] == "/admin") {
    require __DIR__ . '/admin/routes.php'; //linkar para abrir o conteúdo da página routes.php
}else if ($_SERVER['REQUEST_URI'] == "/") {
    require __DIR__ . '/site/routes.php';
}else {
    echo 'Página não encontrada';
    http_response_code(404); /*antes de colocar esse código o erro da página dava 200(em inspecionar/network/tese-status)
 Ao colocar esse 'http_response_code(404) o erro do status muda para 404, que é o ideal 
}*/