<?php

    //sessão inicia aqui
    session_start();

    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Senha']))// Checa se email e senha estão preenchidos
    {
        //Acesso ao sistema
        include_once('config.php');
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];

        //Checa se estão chegando os valores
        //print_r('Email: ' . $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        //sql
        $sql = "SELECT * FROM usuario WHERE Email_Usuario = '$email' and Senha_Usuario = '$senha'";

        $result = $conexao->query($sql);//Exexuta a query acima no BD

        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            //print_r('Esse usuario não existe');
            unset($_SESSION['Email']);
            unset($_SESSION['Senha']);
            header('Location: login-php.php');
        }
        else{
            //print_r('Esse usuario existe');
            $_SESSION['Email'] = $email;
            $_SESSION['Senha'] = $senha;
            header('Location: dashboard-php.php');
        }
    }
    else{
        header('Location: login-php.php');
    }

?>