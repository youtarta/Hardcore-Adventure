<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tienda | ThunderLand</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
body {
    background: radial-gradient(circle at top, #1a1a2e, #0b0b0f 60%);
    color: #fff;
    font-family: 'Poppins', sans-serif;
    padding: 40px;
}
.product {
    background: #1f1f2f;
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 20px;
}
.buy {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background: #1f6a4d;
    border-radius: 20px;
    color: #fff;
    text-decoration: none;
}
.buy:hover {
    background: #ffffff;
    color: #000;
}
</style>
</head>

<body>

<h1>🛒 Tienda ThunderLand</h1>

<div class="product">
    <h2>VIP Básico</h2>
    <p>Acceso a beneficios exclusivos.</p>
    <a class="buy" href="https://mpago.la/TU_LINK_AQUI" target="_blank">
        Comprar
    </a>
</div>

<div class="product">
    <h2>VIP Premium</h2>
    <p>Más beneficios, más diversión.</p>
    <a class="buy" href="https://mpago.la/TU_LINK_AQUI" target="_blank">
        Comprar
    </a>
</div>

<a href="dashboard.php" style="color:#7a5cff;">⬅ Volver</a>

</body>
</html>
