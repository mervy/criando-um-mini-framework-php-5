<?php

use PDO;
use PDOException;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=mini-framework", "root", "");
    }

    public function insert($tabela, array $dados)
    {
        $sql = "INSERT INTO tabela (campo1, campo2) VALUES ('valor1', valor2)";
        $array = array(
            "titulo" => "titulo aqui",
            "resumo" => "resumo aqui",
            "conteudo" => "conteudo aqui"
        );

        foreach ($dados as $inds => $vals) {
            $campos[] = $inds;
            $valores[] = $vals;
        }

        $campos = implode(', ', $campos);
        $valores = "'" . implode("', '", $valores) . "'";
        echo "INSERT INTO `{$tabela}` ({$campos}) VALUES ({$valores})";

     
            return $this->db->query("INSERT INTO `{$tabela}` ({$campos}) VALUES ({$valores})");
     
    }

    public function read()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
