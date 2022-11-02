<?php

$servidor ="localhost";
$usuario = "root";
$senha = "";
$banco = "mgcar";

try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $erro){
    echo "Falha na conecxão com o  banco!";

};

function limparPost($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;

};