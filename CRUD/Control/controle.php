<?php
session_start();
require_once("../Model/quarto.php");
require_once("../Model/quartoDAO.php");

$acao = $_GET["acao"];
$quartoDAO = new QuartoDAO();

if($acao == "cadastrar"){
    $nome = $_POST["nome"];
    $desc = $_POST["desc"];
    $foto = $_POST["foto"];
    $quarto = new Quarto();
    $quarto->setNome($nome);
    $quarto->setDesc($desc);
    
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../../upload/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    $quarto->setFoto($novo_nome);

    $quartoDAO->inserir($quarto);
    header('Location: ../index.php');
}else if ($acao == 'listar'){
    $_SESSION["quartos"] = $quartoDAO->recuperarTodos();
    header('Location: ../view/listarTodos.php');
}else if ($acao == "excluir"){
    $id = $_GET["id"];
    $quarto = new Quarto();
    $quarto->setId($id);
    $quartoDAO->excluir($quarto);
    header('Location: ../Control/controle.php?acao=listar');
}else if ($acao == "recuperar"){
    $id = $_GET["id"];
    $quarto = new Quarto();
    $quarto = $quartoDAO->recuperarPorId($id);
    $_SESSION["quarto"] = $quarto;
    header('Location: ../View/formEdicaoQuarto.php');
}else if($acao == "editar"){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $desc = $_POST["desc"];
    $foto = $_POST["foto"];
    $quarto = new Quarto();
    $quarto->setId($id);
    $quarto->setNome($nome);
    $quarto->setDesc($desc);
    
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../../upload/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    $quarto->setFoto($novo_nome);

    $quartoDAO->atualizar($quarto);
    header('Location: ../Control/controle.php?acao=listar');
}