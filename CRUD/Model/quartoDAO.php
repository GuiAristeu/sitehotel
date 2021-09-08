<?php
require_once("conexao.php");
require_once("quarto.php");

class quartoDAO{
    public $connection;

    public function getConnection(){
        if(is_null($this->connection)){
            $this->connection = new
            Conexao();
        }
        return $this->connection;
    }

    public function inserir(Quarto $quarto){
        $conn = $this->getConnection()->connectToDatabase();
        $nome = $quarto->getNome();
        $desc = $quarto->getDesc();
        $foto = $quarto->getFoto();

        $query = "INSERT INTO quarto (nome, descricao, foto) VALUES('$nome', '$desc', '$foto')";
        $r = mysqli_query($conn, $query);

        if(!$r){
            die("Erro ao inserir");
        }else{
            echo "Inserido com sucesso";
        }

        $this->connection->closeConnection();
    }

    public function atualizar(Quarto $quarto){
        $conn = $this->getConnection()->connectToDatabase();
        $id = $quarto->getId();
        $nome = $quarto->getNome();
        $desc = $quarto->getDesc();
        $foto = $quarto->getFoto();

        $query = "UPDATE quarto SET nome = '$nome', descricao = '$desc', foto = '$foto' where id = '$id'";
        $r = mysqli_query($conn, $query);

        if(!$r){
            die("Erro ao atualizar");
        }else{
            echo "Atualizado com sucesso";
        }

        $this->connection->closeConnection();
    }

    public function excluir(Quarto $quarto){
        $conn = $this->getConnection()->connectToDatabase();
        $id = $quarto->getId();

        $query = "DELETE FROM quarto where id = '$id'";
        $r = mysqli_query($conn, $query);

        if(!$r){
            die("Erro ao excluir");
        }else{
            echo "Exclusão realizado com sucesso";
        }

        $this->connection->closeConnection();
    }

    public function recuperarTodos(){
        $conn = $this->getConnection()->connectToDatabase();
        
        $query = "SELECT * FROM quarto";
        $r = mysqli_query($conn, $query);

        if(!$r){
            die("Erro ao selecionar");
        }else{
            $quartos = array();
            while($row = mysqli_fetch_array($r)){
                $quarto = new Quarto();
                $quarto->setId($row["id"]);
                $quarto->setNome($row["nome"]);
                $quarto->setDesc($row["descricao"]);
                $quarto->setFoto($row["foto"]);
                array_push($quartos, $quarto);
            }
            return $quartos;
        }

        $this->connection->closeConnection();
    }

    public function recuperarPorNome($nome){
        $conn = $this->getConnection()->connectToDatabase();
        
        $query = "SELECT * FROM quarto WHERE nome LIKE '%$nome%'";
        $r = mysqli_query($conn, $query);

        if(!$r){
            die("Erro ao selecionar");
        }else{
            $quartos = array();
            while($row = mysqli_fetch_array($r)){
            $quarto = new Quarto();
                $quarto->setId($row["id"]);
                $quarto->setNome($row["nome"]);
                $quarto->setDesc($row["descricao"]);
                $quarto->setFoto($row["foto"]);
                array_push($quartos, $quarto);
            }
            return $quartos;
        }

        $this->getConnection()->closeConnection();
        return null;
    }

    public function recuperarPorId($id){
        $conn = $this->getConnection()->connectToDatabase();
        
        $query = "SELECT * FROM quarto WHERE id = '$id'";
        $r = mysqli_query($conn, $query);

        if(!$r){
            die("Erro ao selecionar");
        }else{
            while($row = mysqli_fetch_array($r)){
                $quarto = new Quarto();
                $quarto->setId($row["id"]);
                $quarto->setNome($row["nome"]);
                $quarto->setDesc($row["descricao"]);
                $quarto->setFoto($row["foto"]);
                return $quarto;
            }
        }

        $this->getConnection()->closeConnection();
        return null;
    }
}
?>