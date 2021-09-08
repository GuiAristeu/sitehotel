<?php
require_once ("../Model/quarto.php");
session_start();
$quarto = $_SESSION["quarto"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="../Control/controle.php?acao=editar" method="POST" enctype="multipart/form-data">
        <div class="form-control text-primary" style="background-color: #d8d8d8!important;">
            <input type="hidden" name="id" value="<?php echo $quarto->getId();?>">
            <label for="">Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $quarto->getNome();?>"><br>
            <label for="">Descrição:</label>
            <input type="text" class="form-control" name="desc" value="<?php echo $quarto->getDesc();?>"><br>
            <input type="file" class="form-control" name="arquivo" value="<?php echo $quarto->getFoto();?>">
            <br><br>
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
        </form>
    </div>
</body>
</html>