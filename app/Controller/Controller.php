<?php

namespace App\Controller;

class Controller {

    public function render($template, $content, array $dados = []) {
        require __DIR__ . '/../../admin/' . $template . '.php';
    }

    public function listar() {
        $this->render("painel", "/templates/home.php");
    }
}