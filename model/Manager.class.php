<?php

    //possivel correção pro erro: include "Conexao.class.php";

    class Manager extends Conexao{
        
        public function insert_client($data){
            $pdo = parent::get_instance();

            $sql = "INSERT INTO usuario VALUES (NULL, nome, email, cpf, data_nascimento, telefone, endereco)";
            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);                
            }
            $statement->execute();
        }
        public function list_client()
        {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM usuario order by id desc";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function list_client_by_id($id)
        {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM usuario WHERE id = $id";
            $statement = $pdo->query($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function delete_client($id)
        {
            $pdo = parent::get_instance();
            $sql = "DELETE FROM usuario WHERE id = :id"; 
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        }

        public function update_client($data)
        {
            $pdo = parent::get_instance();
            $sql = "UPDATE usuario
                    SET nome = :name,
                        email = :email,
                            cpf = :cpf,
                                data_nascimento = :birth,
                                    telefone = :phone,
                                        endereco = :address
                                            WHERE id = :id";
            var_dump($sql);
            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value)
            {
                $statement->bindValue("$key", $value);
            }
            $statement->execute();
        }
    }
?>
