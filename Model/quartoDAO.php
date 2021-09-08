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

}
?>