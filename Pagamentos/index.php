<?php

include_once('../Alunos/config.php');

$sql = "SELECT * FROM alunos ORDER BY id DESC";

$result = $conexao->query($sql);

// print_r($result);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="container-header">

        <img class="img-logo" src="images/LogoJiu2.png" alt="">
    </header>
    <h1>PAGAMENTOS</h1>

    <div class="back">
        <label>Voltar</label>
        <a href="../Home/sistema.php"><img class="iconBack" src="images/icon.png" alt="iconeDeVoltar"></a>
    </div>

    <div class="m-5">
        <table class="table table-bg">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">faixa</th>
                    <th scope="col">Fatura</th>
                    <th scope="col">Pagamento</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($alunos_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $alunos_data['id'] . "</td>";
                    echo "<td>" . $alunos_data['nome'] . "</td>";
                    echo "<td>" . $alunos_data['sobrenome'] . "</td>";
                    echo "<td>" . $alunos_data['faixa'] . "</td>";
                    echo "<td>" . $alunos_data['fatura'] . "</td>";
                }
                ?>
            </tbody>

        </table>
    </div>
</body>