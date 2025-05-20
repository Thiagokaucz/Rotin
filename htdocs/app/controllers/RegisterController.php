<?php
require_once('app/models/UserModel.php');

class RegisterController {
    public function showRegisterForm() {
    session_start();

    if (!isset($_SESSION['usuario'])) {
    header('Location: /login');
    exit;
    }

    $usuario = $_SESSION['usuario'];
    $viewPath = 'app/views/registrarUsuario.php'; 

    require_once('app/views/header.php');
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'sobrenome' => $_POST['sobrenome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'sexo' => $_POST['sexo'],
                'nivel_acesso' => $_POST['nivel_acesso'],
                'codigo_cliente' => $_POST['codigo_cliente'],
                'cnpj' => $_POST['cnpj'],
                'status' => 1,
                'data_cadastro' => date('Y-m-d H:i:s'),
                'data_ativacao' => null,
                'data_desativacao' => null
            ];

            $model = new UserModel();
            $userId = $model->createUserAndReturnId($data);

            // Upload de imagem
            if ($userId && isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = "uploads/$userId/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $imagemPath = $uploadDir . "imagemPerfil.jpg";
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagemPath);

                // Salva caminho no banco
                $model->updateUserImagePath($userId, $imagemPath);
            }

            header('Location: /login');
            exit();
        }
    }
}

