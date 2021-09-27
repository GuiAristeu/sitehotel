<?php
session_start();
require_once("../Model/quarto.php");
require_once("../Model/quartoDAO.php");

$acao = $_GET["acao"];
$quartoDAO = new QuartoDAO();

if ($acao == 'listar'){
    $_SESSION["quartos"] = $quartoDAO->recuperarTodos();
    header('Location: ../View/acomodações.php');
}