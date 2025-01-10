<?php

require_once './db/conn.php';

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

$nome = htmlspecialchars($nome);
$telefone = htmlspecialchars($telefone);

try {
    $sql = 'INSERT INTO contato (nome, telefone) values (:nome, :telefone)';
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindValue(':telefone', $telefone, PDO::PARAM_STR);

    $stmt->execute();
    header( 'Location: index.php' );
} catch (PDOException $e){
    echo 'erro ao adicionar';
}