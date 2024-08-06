<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
   
</head>
<body>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM cliente WHERE id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="AlteraPessoaExe.php" method="post">
        <fieldset>
            <legend>Alterar Pessoa</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email']?>" required>
            </div>
            <div>
                <label for="endereco">Eendereço</label>
                <input type="endereco" name="endereco" id="endereco" value="<?php echo $row['endereco']?>" required>
            </div>
            <div>
                <label for="bairro">Bairro</label>
                <input type="bairro" name="bairro" id="bairro" value="<?php echo $row['bairro']?>" required>
            </div>
            <div>
                <label for="cep">CEP</label>
                <input type="cep" name="cep" id="cep" value="<?php echo $row['cep']?>" required>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>" required>
                </div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row_cid = mysqli_fetch_array($result)) {
                            echo "<option value='".$row_cid['id']."'>".$row_cid['nome']."/".$row_cid['estado']."</option>";
                        }
                    ?>
                </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarPessoas.php" class="btn btn-secondary">Consultar Cadastros</a>
        <a href="index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>