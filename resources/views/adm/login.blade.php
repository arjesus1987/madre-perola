<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  @vite(['resources/css/login.css'])
</head>

<body>

  <div class="login-form">
    <!-- LOGO ACIMA DO MENU -->
    <div class="text-center mb-3" style="width: 80%;">
      <img src="{{ Vite::asset('resources/asset/images/logo-horizontal.svg') }}" alt=login-Logo" class="logo">
    </div>
    <h2>Login do Sistema</h2>
    <form method="post" action="{{ route('login.logar') }}">>
      @csrf
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="email" name="email" class="form-control" id="usuario" placeholder="Digite seu nome de usuário" required />
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" id="senha" placeholder="Digite sua senha" required />
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
