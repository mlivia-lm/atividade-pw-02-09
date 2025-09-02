<?php
include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<form class="" action="cadastrar.php" method="post" enctype="multipart/form-data">
   
            <h1>Cadastrar Produtos</h1>
           
                <div class="textfield">
                    <label for="Produto">Nick</label>
                    <input type="text" name="produto" placeholder="Nome do Produto" required>
                </div>
                <div class="textfield">
                    <label for="Data validade">Data de validade</label>
                    <input type="text"  name="data_Validade" placeholder="Data de validade" required>
                </div>
                <div class="textfield">
                    <label for="Preco">Preço</label>
                    <input type="decimal"  name="preco" placeholder="Preço" required>
                </div>
                <button class="btn-cadastro">Cadastrar</button>
                <br>
                <a class="" href="index.php" >Voltar ao menu </a>
                <br><br>
                </form>
            </div>
        </div>
    </div>
</form>
</body>
</html>