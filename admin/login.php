<?php

session_start();

const ADMIN = "admin";
const SENHA = "123";

if(isset($_POST) 
    && isset($_POST["admin"]) && $_POST["admin"] == ADMIN 
    && isset($_POST["senha"]) && $_POST["senha"] == SENHA) {
    $_SESSION["autenticado"] = true;
    echo $_SESSION["autenticado"];
    header("location:/admin"); //se der certo o login vai para a página de admin
}else {
    header("location:/"); //se der errado volta a página de login
}
