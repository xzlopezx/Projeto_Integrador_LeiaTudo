<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: /");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LeiaTudo - Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" />
</head>
<body class="home-body">
    <?php include 'public/home/page-top-home.php'; ?>
    <?php include '/home/page-carousel.php'; ?>
    <?php include 'public/home/page-main.php'; ?>
    <?php include '/home/page-bottom.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
