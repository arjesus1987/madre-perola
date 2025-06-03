<x-layoutadm>
  <div class="main-content" id="usuario">
    <h1>Cadastro de Usuário</h1>
    <form action="{{ url('/cadastrousuario') }}" method="POST">
      @csrf
      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Dados Pessoais</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nomeCompleto" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nomeCompleto" required name="nome">
          </div>
          <div class="col-md-3 mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" required name="cpf">
          </div>
          <div class="col-md-3 mb-3">
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" required name="rg">
          </div>
          <div class="col-md-4 mb-3">
            <label for="dataNascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" required name="dt_nascimento">
          </div>
          <div class="col-md-4 mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" id="sexo" required name="sexo">
              <option value="">Selecione</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
              <option value="outro">Outro</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="estadoCivil" class="form-label">Estado Civil</label>
            <select class="form-select" id="estadoCivil" required name="estado_civil">
              <option value="">Selecione</option>
              <option value="solteiro">Solteiro</option>
              <option value="casado">Casado</option>
              <option value="divorciado">Divorciado</option>
              <option value="viuvo">Viúvo</option>
            </select>
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Contato</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" required name="email">
          </div>
          <div class="col-md-3 mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone">
          </div>
          <div class="col-md-3 mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="tel" class="form-control" id="celular" name="celular">
          </div>
        </div>
      </fieldset>



      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Endereço</legend>
        <div class="row">
          <div class="col-md-10 mb-10">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro">
          </div>
          <div class="col-md-2 mb-2">
            <label for="numero" class="form-label">Numero</label>
            <input type="text" class="form-control" id="numero" name="numero">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep">
          </div>
          <div class="col-md-3 mb-3">
            <label for="logradouro" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade">
          </div>
          <div class="col-md-3 mb-3">
            <label for="logradouro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro">
          </div>
          <div class="col-md-3 mb-3">
            <label for="uf" class="form-label">UF</label>
            <select name="uf" class="form-select" id="uf">
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-12">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento">
          </div>
        </div>






      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Dados de Acesso</legend>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" required name="login">
          </div>
          <div class="col-md-6 mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" required name="senha">
          </div>
          <div class="col-md-6 mb-3">
            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" id="confirmarSenha" required name="senha_confirmation">
          </div>
          <div class="col-md-6 mb-3">
            <label for="tipo_usuario" class="form-label">Perfil de Acesso</label>
            <select class="form-select" id="tipo_usuario" required name="tipo_usuario">
              <option value="">Selecione</option>
              <option value="1">Administrador</option>
              <option value="2">Gerente</option>
              <option value="3">Usuário</option>
            </select>
          </div>
        </div>
      </fieldset>

      <fieldset class="border p-3 mb-4">
        <legend class="w-auto px-2">Outros</legend>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" required name="status">
              <option value="ativo">Ativo</option>
              <option value="inativo">Inativo</option>
            </select>
          </div>
          <div class="col-md-8 mb-3">
            <label for="obs" class="form-label">Observações</label>
            <textarea class="form-control" id="obs" rows="2" name="observacao"></textarea>
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