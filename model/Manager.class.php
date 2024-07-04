<?php
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
            $sql = "SELECT*FROM client order by id desc";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

    }
?>