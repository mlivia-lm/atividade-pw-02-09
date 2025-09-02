<?php

$DATABASE = "empresa"; //estabele o nome do banco de dados
$HOST = "localhost"; //LOCAL DO SERVIDOR ( PODE COLOCAR O IP DO SERVIDOR DO SITE POR EXEMPLO)
$USER = "root"; //Conectar com o php
$PASS = ""; //Estabelece a senha
$OPTIONS = [ // variável $OPTIONS irá receber a classe PDO
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];


// $pdo variável que irá receber o objeto de conexão
//new PDO (SGBD HOST; BANCO configurações, USUÁRIO, SENHA, OPÇÕES)
// Classe PDO com os parametros de conexão

try // try catch -> tratamento de erros
{
    $pdo = new PDO("mysql:host=" . $HOST . ';dbname=' . $DATABASE . ';charset=utf8', $USER, $PASS, $OPTIONS);
}
catch (PDOException $e) 
{
    echo $e->getMessage() . "</p>";
    die();
}
//Constante com o caminho do sistema
define('INCLUDE_PATH','C:/xampp/htdocs/Exercicio0309');
// session_start();