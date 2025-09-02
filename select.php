<?php
include 'conexao.php';

$sql = "SELECT codigo, produto, data_validade, preco FROM produtos";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos Cadastrados</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-card">
      <h1>Lista de Produtos</h1>
      <table class="produtos-table">
          <thead>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Data de Validade</th>
                <th>Preço</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($produtos): ?>
              <?php foreach ($produtos as $p): ?>
                  <tr>
                      <td><?= $p['codigo'] ?></td>
                      <td><?= $p['produto'] ?></td>
                      <td><?= $p['data_validade'] ?></td>
                      <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                  </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                  <td colspan="4">Nenhum produto cadastrado.</td>
              </tr>
            <?php endif; ?>
          </tbody>
      </table>
      <a class="btn-voltar" href="index.php">Voltar ao menu</a>
    </div>
  </div>
</body>
</html>
