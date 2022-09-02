<?php
//Iniciar a sessão
session_start();
 
// Resetar todas as variáveis de sessão
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: telalogin.php");
exit;
?>

