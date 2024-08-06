<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('../includes/conexao.php');
    $sql = "SELECT cidade.id, cidade.nome nomecidade, cidade.estado
            FROM Cidade cidade";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die("Erro na culsulta: " . mysqli_error($con));
    }
?>
    <h1>Consulta de Cidades</h1>
    <a href="CadastroCidade.php" class="button">Cadastrar Nova Cidade</a>
    <table align="center" border="1" width="80%">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
     
    </table>
    <a href="index.html" class="back-link">Voltar para a Página Inicial</a>
</body>
</html>