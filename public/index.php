<?php
/*echo('Olá');
echo $_SERVER['REQUEST_URI']; 
-->para ter a informação do que o usuário está requisitando. 
-->Se ficar requsitando "/" é porque não está requisitando nada. Ex: "Olá/" Se colocar algo após essa barra irá dar erro porque não está configurado.
-->Para revolver este problema é necessário criar um novo arquivo chamado ".htaccess"*/

require __DIR__ . '/../config.php';
    /*esse comando é para o index.php seja sempre aberto com os dados do config.php**/


//Contador para saber quantas vezes a página foi visualizada com cookie
$contador = 1;

//var_dump($_COOKIE); //exibe todos os cookies da página em array para conferir se deu certo

if(isset($_COOKIE) && isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"]; //se existe vai querer aumentar o valor dele com incremente
    $contador++;
    setcookie("contador", $contador, time() + 3600); //nome, conteúdo,tempo de expiração
}else {
    setcookie("contador", $contador, time() + 3600);
}
//echo "Você já acessou a página " . $contador . " vezes."; //--mostra na página a mensagem e o número de vezes acessado



//CONTADOR DE ACESSO CASO O LOGIN DÊ ERRO
/*
$contAcesso = 1;

if(isset($_COOKIE) &&  isset($_COOKIE["contAcesso"]) && !isset($_SESSION["autenticado"])) {
    $contAcesso = $_COOKIE["contAcesso"] ;
    $contAcesso++;
    setcookie("contAcesso", $contAcesso, time() + 3600);
}else {
    setcookie("contAcesso", $contAcesso, time() + 3600);        
}*/
