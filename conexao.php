<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '0123456';
    $dbName = 'form';


     $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao -> connect_errno){
    //     echo "erro";
    // } else {
    //     echo "Conexao efetuada com sucesso";
    // }


?>