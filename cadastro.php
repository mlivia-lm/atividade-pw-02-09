<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="form-card">
      <h1 class="mb-4">Cadastrar Produtos</h1>
      <form action="cadastrar.php" method="post" enctype="multipart/form-data">
        
        <div class="textfield">
          <label for="produto">Produto</label>
          <input type="text" name="produto" id="produto" placeholder="Nome do Produto" required>
        </div>

        <div class="textfield">
          <label for="data_Validade">Data de validade</label>
          <input type="text" name="data_Validade" id="data_Validade" placeholder="Data de validade" required>
        </div>

        <div class="textfield">
          <label for="preco">Preço</label>
          <input type="number" step="0.01" name="preco" id="preco" placeholder="Preço" required>
        </div>

        <button class="btn-cadastro" type="submit">Cadastrar</button>
        <a class="btn-voltar" href="index.php">Voltar ao menu</a>
      </form>
    </div>
  </div>
</body>
</html>
