<?php
    session_start();
// print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //acessa
    include_once ('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    // print_r('Email: ' . $email);
    // print_r('Senha: '. $senha);

    $sql_login = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql_login);

    print_r($result);
    print_r($sql_login);


    if ($result->num_rows < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: index.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: inicial.php');
    }
} else {
    //nao acessa
    header('Location: index.php');

}

?>