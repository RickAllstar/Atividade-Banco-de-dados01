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
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $turma = $_POST['turma'];
    $senha = $_POST['senha'];

    $atualizar = mysqli_query($connection, "UPDATE cadastrar_aluno 
                                SET matricula = '$matricula'
                                nome = '$nome'
                                cpf = '$cpf'
                                turma = '$turma'
                                senha = '$senha'
                                Where matricula_aluno = '$matricula_aluno'");
    echo "Aluno atualizado com sucesso";

?>
</body>
</html>