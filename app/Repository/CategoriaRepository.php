<?php

namespace App\Repository;

use App\Repository\Repository;
use App\BancoDeDados;
use App\Model\Model;
use App\Model\Categoria;

class CategoriaRepository implements Repository{

    private BancoDeDados $bancoDeDados;

    private string $table;

    public function __construct(BancoDeDados $bancoDeDados) {
        $this->bancoDeDados = $bancoDeDados;
        $this->table = "categorias";        
    }

    public function listar() {
        $sql="select * from $this->table where ativo = 1";
        $resultado = $this->bancoDeDados->consultar($sql);
        return $this->toObject($resultado);
    }

    public function salvar(Model $model) {
        $sql = "insert into $this->table (nome,tipo) values (:nome,:tipo)";
        $params = [
            "nome" => $model->getAtributo('nome'),
            "tipo" => $model->getAtributo('tipo')
        ];
        $this->bancoDeDados->executar($sql, $params);
    }

    public function toObject(array $resultado) { //listar categoria sem ser array
        $categorias = [];
        foreach($resultado as $linha) {
            $categoria = new Categoria($linha["nome"], $linha["tipo"]);
            $categoria->setId($linha["id"]);
            array_push($categorias, $categoria);
        }

        return $categorias;
    }

}