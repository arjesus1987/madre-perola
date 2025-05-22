<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Sistema da Clínica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  @vite(['resources/css/login.css'])
<body>
  <div class="login-form">
     <!-- LOGO ACIMA DO MENU -->
      <div class="text-center mb-3">
        <img src="logo-horizontal.svg" alt="Logo" class="img-fluid">
      </div>
    <h2>Login do Sistema</h2>
    <form>
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" class="form-control" id="usuario" placeholder="Digite seu nome de usuário" required />
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required />
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="lembrar" />
        <label class="form-check-label" for="lembrar">Lembrar-me</label>
      </div>
      <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
