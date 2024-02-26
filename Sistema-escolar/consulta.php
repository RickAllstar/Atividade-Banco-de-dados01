<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
<?php
//estabelece conexão com o servidor e BD 
    include_once('connection.php');

//recebe dados do formulario
    $matricula = $_POST['matricula'];

    $consulta = mysqli_query($connection, "SELECT Nome_aluno as aluno
                                FROM cadastrar_aluno
                                WHERE Matricula_aluno = '$matricula'");

    while($linha = mysqli_fetch_array($consulta)){

                    echo "<h2>" . $linha['aluno']."</h2>";
                };

?>
</body>
</html>