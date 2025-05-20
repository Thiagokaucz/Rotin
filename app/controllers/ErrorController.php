<?php

class ErrorController {
    public function showError($errorCode = 404) {
        session_start();

        $usuario = $_SESSION['usuario'];
        $viewPath = 'app/views/error.php';
        require_once('app/views/header.php');

    }
}
