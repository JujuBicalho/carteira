<?php
namespace App;

use PDO;

class BancoDeDados {
    private PDO $conexao;

    public function __construct(PDO $pdo) {
        $this->conexao = $pdo;
    }

    public function executar(string $sql, array $params = []) {
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

        public function consultar(string $sql, array $params = []) {
            $resultado = $this->executar($sql, $params);
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
}
    
        
    
