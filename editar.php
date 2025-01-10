<?php

require_once './db/conn.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

$id = htmlspecialchars($id);
$nome = htmlspecialchars($nome);
$telefone = htmlspecialchars($telefone);

try {
    $sql = 'UPDATE contato SET nome = :nome, telefone = :telefone WHERE id = :id';
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindValue(':telefone', $telefone, PDO::PARAM_STR);

    $stmt->execute();
    header( 'Location: index.php' );
} catch (PDOException $e){
    echo 'erro ao editar';
}