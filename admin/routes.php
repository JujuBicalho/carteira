<?php

//include é usado para chamar um arquivo
include __DIR__ . "/render.php";

if(verificarUrl("/admin/login")) { //entrar na sessão
    return require __DIR__ . "/login.php";
}else if(verificarUrl("/admin/logout")){ //sair da sessão
    return require __DIR__ . "/logout.php";
}
if(verificarUrl("/admin") || verificarUrl("/admin/")) {
   render ("painel", "/templates/home.php");
}else if (verificarUrl("/admin/categoria/cadastrar?(.*)")) {
    render ("painel", "/templates/cadastrar-categorias.php");    
}else if(verificarUrl("/admin/categoria/listar?(.*)")) {
    render ("painel", "/templates/listar-categorias.php");
}else {
    echo "Página não encontrada";
    http_response_code(404);
}