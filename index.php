<?php

  require_once './db/conn.php';

  $sql = 'SELECT * FROM contato ORDER BY nome';

  $ps = $pdo->query($sql);

  $contatos = $ps->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contatos</title>
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
    <h1>Lista de contatos:</h1>
    <a href="form-cadastro.php" id="link-add">Adicionar contato</a>
    <ul>
    <?php
      foreach($contatos as $contato){
        $urlAlteracao = '/form-editar.php?id=' . $contato['id'];
        $linkAlteracao = '<a href="' . $urlAlteracao . '" >Editar</a>';

        $urlRemocao = '/remover.php?id=' . $contato['id'];
        $linkRemocao = '<a href="' . $urlRemocao . '" >Remover</a>';
        echo <<<HTML
          <li><div id='nameTel'><div>Nome: $contato[nome] </div> <span id='sep'>|</span> <div>Telefone: $contato[telefone]</div></div> <div id='containerLinks'> $linkAlteracao $linkRemocao</a></div></li>
        HTML;
      }
    ?>
    </ul>
  </body>
</html>
