<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Animal</title>
 
</head>
<body>
<div class="container">
        <?php
            include('includes/conexao.php');
            $nome = $_POST['nome'];
            $especie = $_POST['especie'];
            $raca = $_POST['raca'];
            $datan = $_POST['datan'];
            $cep = $_POST['idade'];
            $castrado = $_POST['castrado'];
            $cidade = $_POST['pessoa'];

            echo "<h1>Dados dos Animais</h1>";
            echo "Nome: $nome<br>";
            echo "Espécie: $especie<br>";
            echo "Raça: $raca<br>";
            echo "Data de nascimento: $datan<br>";
            echo "Castrado: $cep<br>";
            echo "pessoa: $pessoa<br>";
            $sql = "INSERT INTO animal
                (nome, especie, raca, datan, idade, castrado, id_pessoa)";
            $sql .= "VALUES('".$nome."','".$especie."','".$raca."','".$datan."', '".$idade."','".$castrado."',".$pessoa.")";
            echo $sql;

            $result = mysqli_query($con, $sql);

            if ($result) {
                echo "<h2>Dados cadastrados com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar!</h2>";
                echo "<p class='error-message'>" . mysqli_error($con) . "</p>";
            }

            mysqli_close($con);
        ?>
        <a href="index.html" class="btn">Voltar à página inicial</a>
        <a href="CadastroCliente.php" class="btn">Cadastrar outro pessoa</a>
    </div>
</body>
</html>