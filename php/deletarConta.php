<?php

    if(!empty($_GET['Id_Usuario']))
    {
        include_once('config.php');

        $id = $_GET['Id_Usuario'];

        $sqlSelect = "SELECT * FROM usuario WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuario WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: dashboard-php.php');


?>