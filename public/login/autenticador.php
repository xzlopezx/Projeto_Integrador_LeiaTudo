<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Simulação de autenticação
if ($usuario === 'admin' && $senha === '1234') {
    $_SESSION['usuario'] = $usuario;
    header("Location: /");
    exit;
} else {
    echo "<script>alert('Usuário ou senha inválidos'); window.location.href='/login/page-top-login.php';</script>";
}
