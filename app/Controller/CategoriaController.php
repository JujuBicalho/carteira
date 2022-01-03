<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Repository\CategoriaRepository;
use App\Model\Categoria;

class CategoriaController extends Controller {

    private CategoriaRepository $repository;

    public function __construct(CategoriaRepository $repository){
        $this->repository = $repository;        
    }

    public function cadastrar() {
        $this->render("painel", "/templates/cadastrar-categorias.php");      
    }
    
    public function novo(array $dados) { //método chamado para cadastrar uma categoria nova
        $nome = $dados["nome"];
        $tipo = $dados ["tipos"];

        $categoria = new Categoria($nome, $tipo);

        $this->repository->salvar($categoria);

        $this->listar();
    }
    public function listar() {
        $categorias = $this->repository->listar();
        $this->render("painel", "/templates/listar-categorias.php", $categorias);
    }
}