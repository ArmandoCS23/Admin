<?php
session_start();

require_once 'controllers/AdminLoginController.php';
require_once 'controllers/AdminRegisterController.php';
require_once 'controllers/AdminDashboardController.php';
// Incluir otros controladores según sea necesario

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'admin_login';

switch ($controllerName) {
    case 'admin_login':
        $controller = new AdminLoginController();
        if (isset($_GET['action']) && $_GET['action'] === 'logout') {
            $controller->logout();
        } else {
            $controller->login();
        }
        break;
    case 'admin_dashboard':
        $controller = new AdminDashboardController();
        $controller->index();
        break;
    case 'admin_register':
        $controller = new AdminRegisterController();
        $controller->register();
        break;
        // Agregar otros controladores según sea necesario
    default:
        $controller = new AdminLoginController();
        $controller->login();
        break;
}
