<?php

//include é usado para chamar um arquivo
include __DIR__ . '/render.php';

if(verificarUrl("/admin") || verificarUrl("/admin/")) {
   render ('painel', '/templates/home.php');
}else if (verificarUrl("/admin/categoria")) {
    render ('/templates/cadastrar-categorias.php');
}else if (verificarUrl ("/admin/categoria/listar")) {
    render ('/templates/listar-categorias.php/');  
}else {
    http_response_code(404);
}