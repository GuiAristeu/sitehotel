<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="../Control/controle.php?acao=cadastrar" method="POST" enctype="multipart/form-data">
        <div class="form-control text-primary" style="background-color: #d8d8d8!important;">
            <label for="">Nome:</label>
            <input type="text" class="form-control" name="nome"><br>
            <label for="">Descrição:</label>
            <input type="text" class="form-control" name="desc"><br>
            <input type="file" class="form-control" name="arquivo">
            <br><br>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
        </form>
    </div>
</body>
</html>