<?php

session_start();

//Remove a sessão desejada
unset($_SESSION["autenticado"]);

header("location: /");