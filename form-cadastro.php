<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="form-container">
    <form action="cadastro.php" method="post">
        <h2>Nome:</h2>
        <input type="text" name="nome" id="nome">
        <h2>Telefone (Apenas Números):</h2>
        <input type="tel" name="telefone" id="telefone">
        <button type="submit">Cadastrar</button>
    </form>
    </div>
</body>
</html>