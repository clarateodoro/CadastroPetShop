<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <legend>Cadastro de Animais</legend>
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <div>
        <label for="especie">Espécie</label>
        <input type="text" name="especie" id="especie" required>
    </div>
    <div>
        <label for="raca">Raça</label>
        <input type="text" name="raca" id="raca" required>
    </div>
    <div>
        <label for="datan">Data de nascimento</label>
        <input type="text" name="datan" id="datan"></input>
    </div>
    <div class="input-container">
        <label for="castrado">Castrado</label>
        <input type="radio" name="castrado" id="castrado" value="1" required>Sim
        <input type="radio" name="castrado" id="castrado" value="0" required>Não
    </div>
    
    
    <div>
        <button type="submit">Cadastrar</button>
    </div>            
</body>
</html>