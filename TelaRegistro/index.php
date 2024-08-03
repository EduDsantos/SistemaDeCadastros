<?php

if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome', '$email', '$senha')");

    header('Location: ../TelaLogin/index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="back">
        <label>Voltar</label>
        <a href="../TelaInicial/index.php"><img class="iconBack" src="images/icon.png" alt="iconeDeVoltar"></a>
    </div>

    <main>
        <div class="container">

            <form action="index.php" method="POST">
                <h1>CRIE SUA CONTA</h1>
                <div class="input-box">
                    <label for="nome">Nome</label>
                    <input type="nome" name="nome" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                </div>
                <div class="input-box">
                    <label for="password">Digite sua senha</label>
                    <input type="password" name="senha" id="password" placeholder="Digite sua senha">
                </div>

                <button class="btn-cadastrar" name="submit">Cadastrar</button>

            </form>
        </div>
    </main>


    <footer>Created by &copy<a href="#"> BlueSystem</a></footer>
    <script src="script.js"></script>
</body>

</html>