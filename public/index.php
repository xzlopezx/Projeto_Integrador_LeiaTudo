<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>LeiaTudo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
            <link href="/css/default.css" rel="stylesheet" />
        </head>
        <body class="home-body">
            
            <?php include 'login/page-top-login.php'; ?>
            <?php include 'home/page-top-home.php'; ?>
            <?php include 'home/page-carousel-home.php'; ?>
            <?php include 'home/page-main-home.php'; ?>
            <?php include 'home/page-bottom-home.php'; ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
            
        </body>

    </html>
    
<?php
session_start();

if (isset($_SESSION['usuario'])) {
    // Se já está logado, mostra a home
    include 'home/page-top-home.php';
} else {
    // Se não está logado, mostra login
    include 'login/page-top-login.php';
}
