<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $ativo = $_POST['ativo'];
    $cidade = $_POST['cidade'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <div class="container">
        <h1>Alteração de Dados</h1>
        <?php
            echo "<p>Id: $id</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Endereço: $endereço</p>";
            echo "<p>Bairro: $bairro</p>";
            echo "<p>CEP: $cep</p>";
            echo "<p>Cidade: $cidade</p>";
            $sql = "UPDATE cliente SET 
                        nome = '$nome',
                        email = '$email',
                        senha = '$endereço',
                        bairro = '$bairro',
                        cep = '$cep',
                        cidade = '$cidade'
                    WHERE id = $id";
            $result  = mysqli_query($con, $sql);
            if ($result) {
                echo '<div class="message success">Dados atualizados com sucesso!</div>';
            } else {
                echo '<div class="message error">Erro ao atualizar dados! ' . mysqli_error($con) . '</div>';
            }
        ?>
        
        <button class="btn" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>