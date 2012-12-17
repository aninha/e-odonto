<?php 
// Inicia sessões 
session_start(); 

// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["nome_usuario"]) || !isset($_SESSION["nivel"])) 
{ 
    // Se nao logado, redireciona para a página de login 
    header("Location: index.php"); 
    exit; 
} 
?>

