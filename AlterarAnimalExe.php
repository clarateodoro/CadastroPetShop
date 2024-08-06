<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $idade = $_POST['idade'];
    $datan = $_POST['data'];
    $pessoa = $_POST['pessoa'];
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
            echo "<p>Email: $especie</p>";
            echo "<p>Endereço: $raca</p>";
            echo "<p>Bairro: $idade</p>";
            echo "<p>Data de nacimento: $datan</p>";
            echo "<p>pessoa: $pessoa</p>";
            $sql = "UPDATE cliente SET 
                        nome = '$nome',
                        especie = '$especie',
                        raca = '$raca',
                        idade = '$idade',
                        datan = '$datan',
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