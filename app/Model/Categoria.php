<?php

namespace App\Model;

use App\Model\Model;

class Categoria implements Model {
    private int $id;
    private string $nome;
    private string $tipo;

    public function __construct(string $nome = "", string $tipo = '') {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getNome () {
        return $this->nome;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setTipo(string $tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getAtributo(string $atributo){
        return $this->$atributo;
    }
}