<?php
class Conexao{
    public $host="localhost", $username="root", $password="";
    public $database="hotel";
    public $myconn;

    function connectToDatabase(){

        $conn = mysqli_connect($this->host, $this->username, $this->password);

        if(!$conn){
            die("Não foi possível conectar!");
        }else{
            $this->myconn = $conn;
            echo "Conexão foi estabelecida";
        }
        mysqli_select_db($this->myconn, $this->database);

        if(mysqli_connect_error()){
            echo "Não foi possível encontrar o banco ".$this->database;
        }else{
            echo "Banco selecionado";
        }
        mysqli_set_charset($this->myconn, "utf8mb4");
        return $this->myconn;
    }
    
    function closeConnection(){
        mysqli_close($this->myconn);
        echo "Conexão encerrada";
    }
}
?>