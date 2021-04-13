<?php

    namespace classes;

    class Conexao{

        private static $pdo;
        
        public static function conectar()
        {
            if(!isset(self::$pdo)){
                try {
                    self::$pdo = new \PDO('mysql:dbname=crud_oo;host=localhost','root','');
                } catch (PDOExcpetion $erro) {
                    $mensagem = $erro->getMessage();
                    echo "Erro = ".$mensagem;
                }
            }
                return self::$pdo;
        }
    }
?>