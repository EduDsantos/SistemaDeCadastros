<?php

include_once('config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $cep = $_POST['CEP'];
    $faixa = $_POST['faixa'];



    $sqlUpdate = "UPDATE alunos SET  nome='$nome', sobrenome='$sobrenome', sexo='$sexo', data_nasc='$data_nasc', email='$email', telefone='$telefone',
     CEP='$cep', faixa='$faixa' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: index.php');

?>