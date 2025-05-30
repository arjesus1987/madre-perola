<x-hf>
  <div class="login-form">
     <!-- LOGO ACIMA DO MENU -->
      <div class="text-center mb-3">
        <img src="{{ Vite::asset('resources/asset/images/logo-horizontal.svg') }}">
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
  </x-hf>

  <div class="image-box">
    <img src="img/clinica.png" alt="Moça da madrepérola" class="side-image">
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
  
