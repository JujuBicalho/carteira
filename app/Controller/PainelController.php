<?php

namespace App\Controller;
use App\Controller\Controller;

class PainelController extends Controller {

    public function listar() {
        $this->render("painel", "/templates/home.php");
    }

    public function logar() {
        return require __DIR__ . "/../../admin/login.php";
    }

    public function logout() {
        return require __DIR__ . "/../../admin/logout.php";
    }
}