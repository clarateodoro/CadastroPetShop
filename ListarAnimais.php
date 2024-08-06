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
    $sql = "SELECT animal.id, animal.nome nomeanimal, animal.especie, animal.raca, animal.datan, animal.idade, pes.nome nomepessoa,
            FROM Animal animal
            LEFT JOIN pessoa pes ON pes.id = animal.id_pessoa";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die("Erro na culsulta: " . mysqli_error($con));
    }
?>
    <h1>Consulta de Animais</h1>
    <a href="CadastroAnimal.php" class="button">Cadastrar Novo Animal</a>
    <table align="center" border="1" width="80%">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Data de nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Pessoa</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
     
    </table>
    <a href="index.html" class="back-link">Voltar para a Página Inicial</a>
</body>
</html>