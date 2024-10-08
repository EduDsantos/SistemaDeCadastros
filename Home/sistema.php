<?php

session_start();
include_once('./config.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../TelaLogin/index.php');
}

$logado = $_SESSION['email'];
$sql = "SELECT * FROM alunos ORDER BY id DESC";

$result = $conexao->query($sql);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueSistem</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="container-header">

        <!-- <div class="header-nav">
            <a href="">Jiu-jitsu</a>
            <a href="">Muay Thai</a>
            <a href="">Contrato</a>
            <a href="">Calendario</a>
            <a href="">SAIR</a>
        </div> -->
        <img class="img-logo" src="images/LogoJiu2.png" alt="">
    </header>
    <h1>Gerenciar Alunos</h1>
    <div class="container">
        <div class="container-alunos">
            <div class="label-alunos">Alunos</div>
            <button onclick="location.href='../Alunos/index.php' " class="btn-icons" name="btn-icons"><img class="img-buttons" src="images/icon_alunos.png" alt=""></button>
        </div>

        <div class="container-pagamentos">
            <div class="label-pagamentos">Pagamentos</div>
            <button onclick="location.href='../Pagamentos/index.php'" class="btn-icons" name="btn-icons"><img class="img-buttons" src="images/icon_din.png" alt=""></button>
        </div>

        <div class="container-registros">
            <div class="label-registros">Registrar aluno</div>
            <button onclick="location.href='../TelaRegistroAlunos/index.php' "  class="btn-icons" name="btn-icons"><img class="img-buttons" src="images/iconRegister.png" alt=""></button>
        </div>

    </div>
    <!-- <footer>Created by &copy<a href="#"> BlueSystem</a></footer> -->

</body>

</html>