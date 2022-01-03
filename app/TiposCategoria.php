<?php

namespace App;

class TiposCategoria {
    const ENTRADA = "ENTRADA";
    const SAIDA = "SAIDA";

    public static function toString($tipo) {
        switch($tipo) {
            case self::ENTRADA;
                return "Entrada";
            case self::SAIDA;
                return "Saída";
            default:
                return "";
        }
    }
}