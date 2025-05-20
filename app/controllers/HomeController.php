<?php
class HomeController {
    public function index() {
        session_start();

        if (!isset($_SESSION['usuario'])) {
            header('Location: /login');
            exit;
        }

        $usuario = $_SESSION['usuario'];
        $viewPath = 'app/views/home.php'; 

        require_once('app/views/header.php');
    }
}
