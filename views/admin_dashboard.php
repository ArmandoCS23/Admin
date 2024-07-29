<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin_dashboard.css">
    <title>Dashboard - El AbraExpress</title>
</head>

<body>
    <div class="sidebar">
        <img src="images/logo.jpg" alt="Admin Icon">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Usuarios</a></li>
            <!-- Agrega más ítems según sea necesario -->
        </ul>
    </div>

    <div class="main-content">
        <div class="top-bar">
            <div class="user-menu">
                <img src="images/user_icon.png" alt="User Icon" style="width: 30px; height: 30px; border-radius: 50%;">
                <div class="user-menu-content">
                    <span><?php echo $_SESSION['admin_username']; ?></span>
                    <a href="index.php?controller=admin_login&action=logout">Cerrar Sesión</a>
                </div>
            </div>
        </div>
        <h1>Bienvenido al Dashboard de Administración</h1>
        <!-- Aquí puedes colocar el contenido del Dashboard -->
    </div>
</body>

</html>
