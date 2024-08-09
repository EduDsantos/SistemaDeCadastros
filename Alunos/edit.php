<?php
if (!empty($_GET['id'])) {

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM alunos WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {

        while ($alunos_data = mysqli_fetch_assoc($result)) {

            $nome = $alunos_data['nome'];
            $sobrenome = $alunos_data['sobrenome'];
            $sexo = $alunos_data['sexo'];
            $data_nasc = $alunos_data['data_nasc'];
            $email = $alunos_data['email'];
            $telefone = $alunos_data['telefone'];
            $cep = $alunos_data['CEP'];
            $faixa = $alunos_data['faixa'];
        }
    } else {
        header('Location: sistema.php ');
    }
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Aluno</title>
    <link rel="stylesheet" href="../TelaRegistroAlunos/style.css">
</head>

<body>

    <div class="back">
        <label>Voltar</label>
        <a href="../Alunos/index.php"><img class="iconBack" src="images/icon.png" alt="iconeDeVoltar"></a>
    </div>
    <main>

        <div class="container">
            <form action="saveEdit.php" method="POST">
                <h1>Registrar Aluno</h1>
                <div class="input-box">
                    <label>Nome: </label>
                    <input type="text" class="nome" name="nome" placeholder="Digite seu nome" value="<?php echo $nome ?>" required>
                </div>

                <div class="input-box">
                    <label>Sobrenome: </label>
                    <input type="text" name="sobrenome" class="Sobrenome" placeholder="Digite seu Sobrenome" value="<?php echo $sobrenome ?>" required>
                </div>

                <div class="input-box">
                    <label>Data de nasc: </label>
                    <input type="date" class="nasc" name="data_nasc" class="dataNasc" value="<?php echo $data_nasc ?>" required>
                </div>

                <div class="input-box">
                    <label>Celular: </label>
                    <input type="number" name="telefone" class="telefone" placeholder="Digite o telefone" value="<?php echo $telefone ?>" required>
                </div>

                <div class="input-box">
                    <label>CEP: </label>
                    <input type="number" name="CEP" class="cep" placeholder="Digite o CEP" value="<?php echo $cep ?>" required>
                </div>

                <div class="input-box">
                    <label>E-mail: </label>
                    <input type="email" name="email" class="email" placeholder="Digite seu email" value="<?php echo $email ?>" required>
                </div>

                <div class="input-box">
                    <p>Gênero: </p>

                    <input type="radio" name="sexo" class="sexo" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : '' ?> required>
                    <label>Masculino</label>

                    <input type="radio" name="sexo" class="sexo" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : '' ?> required>
                    <label>Feminino</label>

                    <input type="radio" name="sexo" class="sexo" value="outro" <?php echo $sexo == 'outro' ? 'checked' : '' ?> required>
                    <label>Outro</label>
                </div>
                <div class="input-box">
                    <label>Selecione a Faixa</label>
                    <select class="faixa" name="faixa">
                        <option selected>FAIXA</option>
                        <option value="Branca" ">Branca</option>
                        <option value=" Azul">Azul</option>
                        <option value="Roxa">Roxa</option>
                        <option value="Marrom">Marrom</option>
                        <option value="Preta">Preta</option>
                    </select>
                </div>

                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" class="btn-cadastrar" name="update" id="update" value="Atualizar">

            </form>
        </div>


    </main>

</body>

</html>