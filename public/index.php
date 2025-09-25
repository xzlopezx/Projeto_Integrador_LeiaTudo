<?php
session_start();

// Se está logado, inclui a página inicial (home)
if (isset($_SESSION['usuario'])) {
    include 'home/page-top-home.php';
    exit;
}

// Caso contrário, exibe o formulário de login
include 'login/page-top-login.php';
exit;
