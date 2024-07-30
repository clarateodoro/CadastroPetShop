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
    $sql = "SELECT pessoa.id, pessoa.nome nomepessoa, pessoa.email, pessoa.endereco, pessoa.bairro, pessoa.cep, cid.nome nomecidade, cid.estado
            FROM Pessoa pessoa
            LEFT JOIN cidade cid ON cid.id = pessoa.id_cidade";
?>
    <h1>Consulta de Cidades</h1>
    <a href="CadastroPessoa.html" class="button">Cadastrar Nova Pessoa</a>
    <table align="center" border="1" width="80%">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
     
    </table>
    <a href="index.html" class="back-link">Voltar para a Página Inicial</a>
</body>
</html>