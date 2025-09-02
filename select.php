<?php
include 'conexao.php';

$sql = "SELECT codigo, produto, data_validade, preco FROM produtos";
$stmt = $pdo->prepare($sql);
$stmt->execute();


$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de Produtos</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Data de Validade</th>
        <th>Preço</th>
    </tr>
    <?php if ($produtos): ?>
        <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?= $p['codigo'] ?></td>
                <td><?= $p['produto'] ?></td>
                <td><?= $p['data_validade'] ?></td>
                <td><?= $p['preco'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">Nenhum produto cadastrado.</td>
        </tr>
    <?php endif; ?>
</table>
<a class="" href="index.php" >Voltar ao menu </a>
