<?php

    namespace classes;

    class UsuariosDao{

        // --------------- C R E A T E ---------------
        public function create(Usuarios $p)
        {
            $sql = "SELECT * FROM usuarios WHERE email = :e";
            $select = Conexao::conectar()->prepare($sql);
            $select->bindValue(':e', $p->getEmail());
            $select->execute();

            if($select->rowCount() > 0 )
            {
                echo "E-mail já está cadastrado";
            }
            else
            {
                $sql = "INSERT INTO usuarios (nome, email) VALUES(:n, :e)";
                $insert = Conexao::conectar()->prepare($sql);
                $insert->bindValue(':n', $p->getNome());
                $insert->bindValue(':e', $p->getEmail());
                $insert->execute();
            }
        }



        // --------------- R E A D ---------------
        public function read()
        {
            $sql = "SELECT * FROM usuarios";
            $select = Conexao::conectar()->prepare($sql);
            $select->execute();

            if($select->rowCount() > 0)
            {
                $lista = $select->fetchAll(\PDO::FETCH_ASSOC);
                return $lista;
            }
        }



        // --------------- U P D A T E ---------------
        public function update(Usuarios $p)
        {
            $sql = "UPDATE usuarios SET nome = :n, email = :e WHERE id = :id";
            $atualizar = Conexao::conectar()->prepare($sql);
            $atualizar->bindValue(':id', $p->getId());
            $atualizar->bindValue(':n', $p->getNome());
            $atualizar->bindValue(':e', $p->getEmail());
            $atualizar->execute();
        } 



        // --------------- D E L E T E ---------------
        public function delete($id)
        {
            $sql = "DELETE FROM usuarios WHERE id = $id";
            $deletar = Conexao::conectar()->prepare($sql);
            $deletar->execute();
        }
    }

?>