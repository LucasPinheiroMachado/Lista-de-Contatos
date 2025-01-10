<?php
    require_once './db/conn.php';
    $id = htmlspecialchars(isset($_GET['id']) ? $_GET['id'] : '');

        $sql = 'SELECT * FROM contato WHERE id = :id';
        $ps = $pdo->prepare($sql);
        $ps->bindValue(':id', $id, PDO::PARAM_INT);
        $ps->execute();
        
        $contato = $ps->fetch(PDO::FETCH_ASSOC);;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="form-container">
    <form action="editar.php" method="post">
        <h2>Nome:</h2>
        <input type="hidden" name="id" id="id" value="<?php echo $contato['id'] ?>">
        <input type="text" name="nome" id="nome" value="<?php echo $contato['nome'] ?>">
        <h2>Telefone (Apenas Números):</h2>
        <input type="tel" name="telefone" id="telefone" value="<?php echo $contato['telefone'] ?>">
        <button type="submit">Editar</button>
    </form>
    </div>
</body>
</html>