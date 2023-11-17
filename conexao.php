<?php
// Fuso horário
date_default_timezone_set('America/Sao_Paulo');

//Dados de Conexão
$servidor = 'localhost';
$banco = 'login';
$usuario = 'root';
$senha = '';

try{
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
}catch(Exception $e){
    echo "Erro ao conectar ao banco de dados! <br><br>";
    echo $e;
    
}

//Variaveis globais
$nome_sistema = 'Sistema de Login';
$email_padrao = 'contato@gmail.com';
$senha_padrao = '123';
$senha_crip_padrao = md5('123');


