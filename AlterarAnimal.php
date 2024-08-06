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
    <form action="AlteraAnimalExe.php" method="post">
        <fieldset>
            <legend>Alterar Animal</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" required>
            </div>
            <div>
                <label for="especie">Espécie</label>
                <input type="especie" name="especie" id="especie" value="<?php echo $row['especie']?>" required>
            </div>
            <div>
                <label for="raca">Raça</label>
                <input type="raca" name="raca" id="raca" value="<?php echo $row['raca']?>" required>
            </div>
            <div>
                <label for="idade">Idade</label>
                <input type="idade" name="idade" id="idade" value="<?php echo $row['idade']?>" required>
            </div>
            <div>
                <label for="datan">Data de nacimento</label>
                <input type="datan" name="datan" id="datan" value="<?php echo $row['datan']?>" required>
            </div>
            <div style="display: flex; justify-content: space-between;">

                <label for="castrado">Castrado</label>
                <input type="radio" name="castrado" id="castrado" value="1" required> Sim
                <input type="radio" name="acastrado" id="castrado" value="0" checked required> Não
            </div>
            <label for="pessoa">Pessoa</label>
                <select name="pessoa" id="pessoa">
                    <?php
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM pessoa";
                        $result = mysqli_query($con, $sql);
                        while($row_cid = mysqli_fetch_array($result)) {
                            echo "<option value='".$row_cid['id']."'>".$row_cid['nome']."</option>";
                        }
                    ?>
                </select>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarCliente.php" class="btn btn-secondary">Consultar Cadastros</a>
        <a href="index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>