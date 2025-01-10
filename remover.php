<?php

require_once './db/conn.php';

$id = htmlspecialchars(isset($_GET['id']) ? $_GET['id'] : '');
try {
    $sql = 'DELETE FROM contato WHERE id = :id';

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    $stmt->execute();
    header( 'Location: index.php' );
} catch (PDOException $e){
    echo 'erro ao excluir';
}