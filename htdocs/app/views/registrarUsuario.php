<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Registrar | Rotin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<main class="main-content">
  <div class="container-fluid">
    <h2 class="text-center">Registrar Novo Usuário</h2>

    <form action="/registrar/salvar" method="POST" enctype="multipart/form-data">
      <!-- Nome -->
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
      </div>

      <!-- Sobrenome -->
      <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>

      <!-- Senha -->
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
      </div>

      <!-- Sexo -->
      <div class="mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <select class="form-select" id="sexo" name="sexo" required>
          <option value="">Selecione o Sexo</option>
          <option value="M">Masculino</option>
          <option value="F">Feminino</option>
        </select>
      </div>

      <!-- Nível de Acesso -->
      <div class="mb-3">
        <label for="nivel_acesso" class="form-label">Nível de Acesso</label>
        <select class="form-select" id="nivel_acesso" name="nivel_acesso" required>
          <option value="">Selecione o Nível</option>
          <option value="adm">Administrador</option>
          <option value="funcionario">Funcionário</option>
        </select>
      </div>

      <!-- Código Cliente -->
      <div class="mb-3">
        <label for="codigo_cliente" class="form-label">Código Cliente</label>
        <input type="text" class="form-control" id="codigo_cliente" name="codigo_cliente" placeholder="Código Cliente" required>
      </div>

      <!-- CNPJ -->
      <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" required>
      </div>

      <!-- Imagem -->
      <div class="mb-3">
        <label for="imagem" class="form-label">Imagem</label>
        <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
      </div>

      <!-- Botão de Submissão -->
      <div class="mb-3 text-center">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </form>

  </div>
</main>

</body>
</html>
