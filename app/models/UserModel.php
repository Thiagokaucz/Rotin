<?php
require_once('config/database.php');

class UserModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getUserByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($data) {
        $sql = "INSERT INTO usuarios 
            (nome, sobrenome, email, senha, sexo, nivel_acesso, codigo_cliente, cnpj, status, data_cadastro, data_ativacao, data_desativacao)
            VALUES 
            (:nome, :sobrenome, :email, :senha, :sexo, :nivel_acesso, :codigo_cliente, :cnpj, :status, :data_cadastro, :data_ativacao, :data_desativacao)";
    
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    public function createUserAndReturnId($data) {
        $sql = "INSERT INTO usuarios 
            (nome, sobrenome, email, senha, sexo, nivel_acesso, codigo_cliente, cnpj, status, data_cadastro, data_ativacao, data_desativacao)
            VALUES 
            (:nome, :sobrenome, :email, :senha, :sexo, :nivel_acesso, :codigo_cliente, :cnpj, :status, :data_cadastro, :data_ativacao, :data_desativacao)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $this->conn->lastInsertId();
    }

    public function updateUserImagePath($id, $caminho) {
        $sql = "UPDATE usuarios SET caminho_imagem = :caminho WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':caminho', $caminho);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }  
    
}
?>
