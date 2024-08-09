<?php

session_start();
include_once('./config.php');

$sql = "SELECT * FROM alunos ORDER BY id DESC";

$result = $conexao->query($sql);

// print_r($result);

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueSistem</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="container-header">

        <img class="img-logo" src="images/LogoJiu2.png" alt="">
    </header>
    <h1>ALUNOS</h1>

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
                    <th scope="col">DataDeNasc</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Faixa</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($alunos_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $alunos_data['id'] . "</td>";
                    echo "<td>" . $alunos_data['nome'] . "</td>";
                    echo "<td>" . $alunos_data['sobrenome'] . "</td>";
                    echo "<td>" . $alunos_data['data_nasc'] . "</td>";
                    echo "<td>" . $alunos_data['CEP'] . "</td>";
                    echo "<td>" . $alunos_data['email'] . "</td>";
                    echo "<td>" . $alunos_data['sexo'] . "</td>";
                    echo "<td>" . $alunos_data['faixa'] . "</td>";
                    echo "<td>
                            <a class='btn btn-sm text-white btn-primary' href='edit.php?id=$alunos_data[id]'>
                             <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                             <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                             </svg>
                            </a>
                            
                            <a class='btn btn-sm text-white btn-danger' href='delete.php?id=$alunos_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                </svg>
                            </a>

                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>
</body>