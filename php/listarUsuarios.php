<h1> Listagem de Usuários </h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
<?php

    include_once('config.php');

    $sql = "SELECT * FROM usuario";

    $res = $conexao ->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0)
    {
        print "<table class='table table-hover
        table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome do Usuário</th>";
            print "<th>Email do Usuário</th>";
            print "<th>Telefone do Usuário</th>";
            print "<th>Sexo do Usuário</th>";
            print "<th>Data de Nascimento (EUA) do Usuário</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->Id_Usuario."</td>";
            print "<td>".$row->Nome_Usuario."</td>";
            print "<td>".$row->Email_Usuario."</td>";
            print "<td>".$row->Telefone_Usuario."</td>";
            print "<td>".$row->Sexo_Usuario."</td>";
            print "<td>".$row->Data_Nasc_Usuario."</td>";
            print "</tr>";
        }
        print "</table>";
    }
    else{
        print "<p class='alert alert-danger'> Não encontrou resultados!</p>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Sistemas Wellmize</title>
</head>
<body>

</body>
</html>