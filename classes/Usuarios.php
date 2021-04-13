<?php

    namespace classes;

    class Usuarios{
        public $id;
        public $nome;
        public $email;

        public function getId()
        {
            return $this->id;
        } 
        public function setId($id)
        {
            $this->id = $id;
        }


        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
 

        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
    }

?>