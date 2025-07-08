<?php
ob_start();
session_start();
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portal CEAAT</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styleHOME.css" />
 
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand d-flex align-items-center" href="#">
        
      </a>

      <div class="d-flex align-items-center">
        <a href="index.php" class="btn btn-success me-3">Home</a>

        <?php if (!isset($_SESSION['usuario_nome']) || empty($_SESSION['usuario_nome'])): ?>
          <a href="admin/login.php" class="btn btn-success">
            <i class="fa-regular fa-user"></i> Login
          </a>
        <?php else: ?>
          <a href="admin/logout.php" class="btn btn-success">
            <i class="fa-regular fa-user"></i> Sair
          </a>
        <?php endif; ?>
      </div>
    </div>
  </nav>


</body>
</html>
