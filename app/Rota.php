<?php

namespace App;

use App\Controller\Controller;

class Rota {

    private string $caminho;
    private Controller $controller;
    private string $metodo;
    private array $dados;

    public function __construct(

        string $caminho,
        Controller $controller,
        string $metodo,
        array $dados = [] //valor default caso nenhum dado seja utilizado
    )
    {
        $this->caminho = $caminho;
        $this->controller = $controller;
        $this->metodo = $metodo;
        $this->dados = $dados;
        
    }

    public function getAtributo(string $atributo) {
        return $this->{$atributo};
    }
}