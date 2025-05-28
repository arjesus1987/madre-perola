<x-layoutadm>
<div class="main-content" id="usuario">
  <h1>Cadastro de Usuário</h1>
  <form>
    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Dados Pessoais</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="nomeCompleto" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nomeCompleto" required>
        </div>
        <div class="col-md-3 mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" required>
        </div>
        <div class="col-md-3 mb-3">
          <label for="rg" class="form-label">RG</label>
          <input type="text" class="form-control" id="rg">
        </div>
        <div class="col-md-4 mb-3">
          <label for="dataNascimento" class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control" id="dataNascimento">
        </div>
        <div class="col-md-4 mb-3">
          <label for="sexo" class="form-label">Sexo</label>
          <select class="form-select" id="sexo">
            <option value="">Selecione</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Outro</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="estadoCivil" class="form-label">Estado Civil</label>
          <select class="form-select" id="estadoCivil">
            <option value="">Selecione</option>
            <option>Solteiro</option>
            <option>Casado</option>
            <option>Divorciado</option>
            <option>Viúvo</option>
          </select>
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Contato</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="col-md-3 mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="telefone">
        </div>
        <div class="col-md-3 mb-3">
          <label for="celular" class="form-label">Celular</label>
          <input type="tel" class="form-control" id="celular">
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Dados de Acesso</legend>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="login" class="form-label">Login</label>
          <input type="text" class="form-control" id="login" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmarSenha" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="perfil" class="form-label">Perfil de Acesso</label>
          <select class="form-select" id="perfil" required>
            <option value="">Selecione</option>
            <option value="admin">Administrador</option>
            <option value="gerente">Gerente</option>
            <option value="usuario">Usuário</option>
          </select>
        </div>
      </div>
    </fieldset>

    <fieldset class="border p-3 mb-4">
      <legend class="w-auto px-2">Outros</legend>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" id="status" required>
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
          </select>
        </div>
        <div class="col-md-8 mb-3">
          <label for="obs" class="form-label">Observações</label>
          <textarea class="form-control" id="obs" rows="2"></textarea>
        </div>
      </div>
    </fieldset>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-secondary me-2">Limpar</button>
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
</div>
</x-layoutadm>