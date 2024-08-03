<?php
if (isset($_POST['submit'])) {

    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $faixa = $_POST['faixa'];


    $result = mysqli_query($conexao, "INSERT INTO alunos(nome,sobrenome,sexo,data_nasc,email,telefone,cep,faixa)
    VALUES('$nome','$sobrenome','$sexo','$data_nasc','$email','$telefone','$cep','$faixa')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="back">
        <label>Voltar</label>
        <a href="../Home/sistema.php"><img class="iconBack" src="images/icon.png" alt="iconeDeVoltar"></a>
    </div>
    <main>



        <div class="container">
            <form action="index.php" method="POST">
                <h1>Registrar Aluno</h1>
                <div class="input-box">
                    <label>Nome: </label>
                    <input type="text" class="nome" name="nome" placeholder="Digite seu nome" required>
                </div>

                <div class="input-box">
                    <label>Sobrenome: </label>
                    <input type="text" name="sobrenome" class="Sobrenome" placeholder="Digite seu Sobrenome" required>
                </div>

                <div class="input-box">
                    <label>Data de nasc: </label>
                    <input type="date" class="nasc" name="data_nasc" class="dataNasc" required>
                </div>

                <div class="input-box">
                    <label>Celular: </label>
                    <input type="number" name="telefone" class="telefone" placeholder="Digite o telefone" required>
                </div>

                <div class="input-box">
                    <label>CEP: </label>
                    <input type="number" name="cep" class="cep" placeholder="Digite o CEP" required>
                </div>

                <div class="input-box">
                    <label>E-mail: </label>
                    <input type="email" name="email" class="email" placeholder="Digite seu email" required>
                </div>

                <div class="input-box">
                    <p>Gênero: </p>

                    <input type="radio" name="sexo" class="sexo" value="masculino" required>
                    <label>Masculino</label>

                    <input type="radio" name="sexo" class="sexo" value="feminino" required>
                    <label>Feminino</label>

                    <input type="radio" name="sexo" class="sexo" value="outro" required>
                    <label>Outro</label>
                </div>
                <div class="input-box">
                    <label>Selecione a Faixa</label>
                    <select class="faixa" name="faixa">
                        <option selected>FAIXA</option>
                        <option value="Branca">Branca</option>
                        <option value="Azul">Azul</option>
                        <option value="Roxa">Roxa</option>
                        <option value="Marrom">Marrom</option>
                        <option value="Preta">Preta</option>
                    </select>
                </div>


                <button class="btn-cadastrar" name="submit">Cadastrar</button>
            </form>
        </div>


    </main>

</body>

</html>