<?php
require_once("../Model/quarto.php");
session_start();
$quartos = $_SESSION["quartos"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quartos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="container">
    <?php foreach ($quartos as $quarto){ ?>
        <div class="card">
            <div class="card-image"><img class="quarto" src="../../upload/<?php echo $quarto->getFoto();?>" alt="" style="height: 100%;"></div>
            <div class="desc">
                <h2><?php echo $quarto->getNome();?></h2>
                <span><?php echo $quarto->getDesc();?></span><br>
                <a style="background-color: rgb(117, 117, 255); border: none; padding: 5px; color: whitesmoke; text-decoration:none;" href="../Control/controle.php?acao=recuperar&id=<?php echo $quarto->getId();?>">Editar</a>
                <a style="background-color: rgb(255, 117, 117); border: none; padding: 5px; color: whitesmoke; text-decoration:none;" href="../Control/controle.php?acao=excluir&id=<?php echo $quarto->getId();?>">Excluir</a>
            </div>
        </div>
    <?php } ?>
</section>
    <p><a style="background-color: blue; border: none; padding: 5px; color: whitesmoke; text-decoration:none;" href="../index.php">Voltar</a></p>
</body>
</html>