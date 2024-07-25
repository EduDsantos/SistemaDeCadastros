<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassWord='';
    $dbName = 'formulario-alunos';

    $conexao = new mysqli($dbHost,$dbUsername,  $dbPassWord, $dbName );

    // if($conexao -> connect_errno){
    //     echo "Erro";
    // }else{
    //     echo "Conexao efetuada com sucesso";
    // }

 ?>