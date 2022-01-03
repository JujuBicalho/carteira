<?php
//para o BDD

namespace App\Repository;

use App\Model\Model;

interface Repository {
    public function listar();

    public function salvar(Model $model);
}