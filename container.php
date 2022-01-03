<?php

use App\BancoDeDados;

//TESTE DE CONEXÃO para saber se deu certo com a criação lá no banco
$dsn = "mysql:host=localhost;dbname=projetophp2";
$usuario = "root";
$senha = "";

$pdo = new PDO($dsn, $usuario, $senha);

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    BancoDeDados::class => \DI\create(BancoDeDados::class)->constructor($pdo)
]);

return $builder->build();
