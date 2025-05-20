<?php
session_start();

require_once('app/models/UserModel.php');

class LoginController {
    public function showLoginForm() {
        require_once('app/views/login.php');
    }

    public function authenticate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Pegar os dados do formulário
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Instanciar o modelo de usuário
            $userModel = new UserModel();
            $usuario = $userModel->getUserByEmail($email);

            if ($usuario) {
                // Se o usuário existir, verificar a senha
                if (password_verify($senha, $usuario['senha'])) {
                    // Login bem-sucedido
                    $_SESSION['usuario_id'] = $usuario['id'];
                    $_SESSION['usuario_nome'] = $usuario['nome'];

                    $_SESSION['usuario'] = $usuario; // $usuario deve ser um array com todos os campos necessários

                    // Redirecionar para o painel de controle
                    header('Location: /home');
                    exit();
                } else {
                    // Senha incorreta
                    $_SESSION['erro_login'] = 'E-mail ou senha incorretos!';
                    header('Location: /login');
                    exit();
                }
            } else {
                // Usuário não encontrado
                $_SESSION['erro_login'] = 'E-mail ou senha incorretos!';
                header('Location: /login');
                exit();
            }
        }
    }
}
?>
