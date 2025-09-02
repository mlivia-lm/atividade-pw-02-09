<?php
include 'conexao.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT); //é a variável que vai receber as informações vindas do array do banco de dados


$Fields = implode(', ', array_keys($data)); // são os campos que receberão os dados vindo do cadastro
$Places = ':' . implode(', :', array_keys($data));  //lugares a serem colocados dados
$Table = 'produtos'; // definindo em qual tabela os dados serão colocados
$Create = "INSERT INTO ".$Table." (".$Fields.") VALUES (".$Places.")"; // criando a inserção de dados
$sth = $pdo->prepare($Create); //irá chamar a variável PDO (responsável pelas interações do php com banco de dados) para preparar a inserção de dados
$sth->execute($data); //irá executar a inserção dos dados

echo " 
<script>alert('CADASTRO EFETUADO');
window.location.href = 'cadastro.php';
 </script>";

