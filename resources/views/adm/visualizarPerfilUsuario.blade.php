<x-layoutadm>
  <div class="main-content" id="visualizarPerfil">
    <h1>Visualizar Perfil do Usuário</h1>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Dados Pessoais</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">Nome Completo</label>
          <p class="form-control-plaintext">João da Silva</p>
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">CPF</label>
          <p class="form-control-plaintext">000.000.000-00</p>
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">RG</label>
          <p class="form-control-plaintext">1234567</p>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Data de Nascimento</label>
          <p class="form-control-plaintext">01/01/1990</p>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Sexo</label>
          <p class="form-control-plaintext">Masculino</p>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Estado Civil</label>
          <p class="form-control-plaintext">Solteiro</p>
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Contato</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">E-mail</label>
          <p class="form-control-plaintext">joao@email.com</p>
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Telefone</label>
          <p class="form-control-plaintext">(11) 1234-5678</p>
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Celular</label>
          <p class="form-control-plaintext">(11) 91234-5678</p>
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Dados de Acesso</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">Login</label>
          <p class="form-control-plaintext">joaosilva</p>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Perfil de Acesso</label>
          <p class="form-control-plaintext">Administrador</p>
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Outros</legend>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="form-label">Status</label>
          <p class="form-control-plaintext text-success">Ativo</p>
        </div>
        <div class="col-md-8 mb-3">
          <label class="form-label">Observações</label>
          <p class="form-control-plaintext">Usuário cadastrado manualmente no sistema.</p>
        </div>
      </div>
    </fieldset>

    <div class="d-flex justify-content-end">
        <a href="/usuarios" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
</x-layoutadm>
