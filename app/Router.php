<?php

namespace App;
use App\Rota;

class Router {

    private string $caminho;
    private $rotas = [];

    public function __construct(string $caminho) {

        $this->caminho = $caminho;
    }

    public function add(Rota $rota) {       

        $caminho = $rota->getAtributo('caminho');
        $this->rotas[$caminho] = $rota;
    }

    public function handler() {   //handler=usado para algo lidar com uma situação
        foreach($this->rotas as $rota) {

            $resultado = $this->verificarUrl($rota->getAtributo('caminho'), $this->caminho);

            if($resultado) {

                $controller = $rota->getAtributo('controller');
                $metodo = $rota->getAtributo('metodo');
                call_user_func([$controller, $metodo], $rota->getAtributo('dados'));
            }
        }
    }

    public function verificarUrl(string $rota, string $caminho ) { 
        $rota = str_replace('/', '\/', $rota); 
        if(preg_match('/^' . $rota . '$/', $caminho)) {
            return true;
        }
        return false;
    }
}